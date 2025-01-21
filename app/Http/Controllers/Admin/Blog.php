<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategorys;
use App\Models\BlogReads;
use App\Models\Blogs;
use App\Models\BlogWidgets;
use App\Models\Mentors;
use App\Models\WebsiteSettings;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class Blog extends Controller
{
    public function index()
    {
        return view('admin.blog.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getBlog(Request $request)
    {
        $start = $request->get('start');
        $length = $request->get('length');
        $searchTerm = $request->get('search')['value'];

        // Build the query
        $query = Blogs::orderBy('updated_at', 'desc');

        // Apply search filter if provided
        if ($searchTerm) {
            $query->where('blog_title', 'like', '%' . $searchTerm . '%');
        }

        // Get paginated data
        $data = $query->offset($start)
            ->limit($length)
            ->get();

        // Get total records (with or without search filter)
        $totalRecords = Blogs::count();
        $totalFiltered = $searchTerm ? $query->count() : $totalRecords;

        // Map the data to the required format
        $mappedData = $data->map(function ($d, $index) use ($start) {
            // Get related data
            $category = $d->blog_category->category_name;
            $mentor = ($d->mt_id ?? 0) === 0 ? '-' : $d->mentor?->mentor_fullname;
            $path = asset('uploaded_files/blogs/' . $d->created_at->format('Y/m') . '/' . $d->blog_thumbnail);
            $image = '<img src="' . $path . '" alt="" width="80">';
            $language = '<img src="' . asset('assets/img/flag/flag-' . $d->lang . '.png') . '" alt="" width="30">
                     <p class="pt-1" style="font-size: 13px;">' . $d->languages->language . '</p>';

            // Handle highlight switch
            $route = route('highlight-blogs', ['id' => $d->id]);
            $highlightToggle = ($d->is_highlight === "true") ? "checked" : "";
            $highlightLabel = ($d->is_highlight === "true") ? "On" : "Off";
            $highlight = '
            <div class="col d-flex align-items-center justify-content-center">
                <form action="' . $route . '" method="POST">
                    ' . csrf_field() . '
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_highlight" ' . $highlightToggle . ' onchange="this.form.submit()">
                        <label class="form-label card-title pt-1" for="is_highlight">' . $highlightLabel . '</label>
                    </div>
                </form>
            </div>';

            // Handle status button
            $statusButton = $d->blog_status === 'publish' ?
                '<button class="btn btn-success" onclick="formDraft(' . $d->id . ')"><span data-bs-toggle="tooltip" title="Set to Draft">' . $d->blog_status . '</span></button>' :
                '<button class="btn btn-danger" onclick="formPublish(' . $d->id . ')"><span data-bs-toggle="tooltip" title="Set to Publish">' . $d->blog_status . '</span></button>';

            // Action buttons
            $actions = '
            <div class="d-flex justify-content-center gap-1">
                <a class="btn btn-primary" href="/admin/blogs/' . $d->id . '/view"><i class="fa-solid fa-magnifying-glass" data-bs-toggle="tooltip" title="View this blog"></i></a>
                <a class="btn btn-warning" href="/admin/blogs/' . $d->id . '/edit"><i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" title="Edit this blog"></i></a>
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete(' . $d->id . ')"><i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" title="Delete this blog"></i></button>
            </div>';

            // Return the mapped array
            return [
                'index' => $start + $index + 1,
                'blog_title' => $d->blog_title,
                'category' => $category,
                'mentor' => $mentor,
                'image' => $image,
                'language' => $language,
                'highlight' => $highlight,
                'status' => $statusButton,
                'last_updated' => $d->updated_at,
                'action' => $actions,
            ];
        });

        return response()->json([
            'start' => $start,
            'draw' => $request->get('draw'),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalFiltered,
            'data' => $mappedData
        ]);
    }


    public function checkPublish()
    {
        $blogs = Blogs::where('blog_status', 'draft')->get();
        foreach ($blogs as $blog) {
            if (date('Y-m-d', strtotime($blog->publish_date)) == date('Y-m-d')) {
                DB::beginTransaction();
                try {
                    $blog->blog_status = 'publish';
                    $blog->updated_at = date('Y-m-d H:i:s');
                    $blog->save();
                    Log::info('blog id: ' . $blog->id . ' already published');
                    DB::commit();
                } catch (Exception $e) {
                    Log::error($e);
                    DB::rollBack();
                    return Redirect::back()->withErrors($e->getMessage());
                }
            }
        }
    }

    public function create()
    {
        $category_en = BlogCategorys::where('lang', 'en')->get();
        $category_id = BlogCategorys::where('lang', 'id')->get();
        $mentor_en = Mentors::where('lang', 'en')->get();
        $mentor_id = Mentors::where('lang', 'id')->get();
        return view('admin.blog.create', [
            'category_en' => $category_en,
            'category_id' => $category_id,
            'mentor_en' => $mentor_en,
            'mentor_id' => $mentor_id,
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function store(Request $request)
    {
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'blog_thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'blog_alt' => 'required',
            'lang' => 'required',
            'category' => 'required',
            'mentor' => 'nullable',
            'blog_title' => 'required',
            'blog_slug' => 'required',
            'blog_description' => 'required',
            'seo_title' => 'required',
            'seo_keyword' => 'required',
            'seo_desc' => 'required',
            'duration_read' => 'required',
            'publish_date' => 'nullable',
            'blog_status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/admin/blogs/create')->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blogs = new Blogs();
            if ($request->hasFile('blog_thumbnail')) {
                $file = $request->file('blog_thumbnail');
                $file_format = $request->file('blog_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path() . '/uploaded_files/' . 'blogs/' . date('Y') . '/' . date('m') . '/';
                $time = date('YmdHis');
                $fileName = 'Blogs-thumbnail-' . $time . '.' . $file_format;
                $file->move($destinationPath, $fileName);
                $blogs->blog_thumbnail = $fileName;
            }
            $blogs->blog_thumbnail_alt = $request->blog_alt;
            $blogs->cat_id = $request->category;
            $blogs->mt_id = $request->mentor;
            $blogs->blog_title = $request->blog_title;
            $blogs->slug = $request->blog_slug;
            // $blogs->blog_description = str_replace('<p>&nbsp;</p>', '<br>', $request->blog_description);
            $blogs->blog_description = $request->blog_description;
            $blogs->seo_title = $request->seo_title;
            $blogs->seo_keyword = $request->seo_keyword;
            $blogs->seo_desc = $request->seo_desc;
            $blogs->blog_status = $request->blog_status;
            $blogs->lang = $request->lang;
            $blogs->click_count = 0;
            $blogs->duration_read = $request->duration_read;
            $blogs->is_highlight = 'false';
            if ($request->blog_status == 'publish' && $request->publish_date == null) {
                $blogs->publish_date = date('Y-m-d H:i:s');
            } else if ($request->blog_status == 'publish' && $request->publish_date != null) {
                $blogs->publish_date = $request->publish_date;
            } else if ($request->blog_status == 'draft' && $request->publish_date != null) {
                $blogs->publish_date = $request->publish_date;
            } else if ($request->blog_status == 'draft' && $request->publish_date == null) {
                $blogs->publish_date = null;
            }
            $blogs->created_at = date('Y-m-d H:i:s');
            $blogs->updated_at = date('Y-m-d H:i:s');
            $blogs->save();
            DB::commit();
            Log::notice('Blog : "' . $blogs->blog_title . '" has been successfully Created by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Blog failed : ' . $e->getMessage());
            return redirect('/admin/blogs/create')->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/' . $blogs->id . '/view')->withSuccess('Blogs Was Successfully Created');
    }

    public function getBlogWidget(Request $request, $blog_id)
    {
        if ($request->ajax()) {
            $data = BlogWidgets::where('blog_id', $blog_id)->orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('description', function ($d) {
                    $result = '
                    ' . Str::limit($d->description, 120, '...') . '
                ';
                    return $result;
                })
                ->editColumn('link', function ($d) {
                    $result = '
                    <a href="' . $d->link . '" target="_blank">' . $d->link . '</a>
                ';
                    return $result;
                })
                ->editColumn('action', function ($d) {
                    $title = "'" . $d->title . "'";
                    $desc = "'" . $d->description . "'";
                    $link = "'" . $d->link . "'";
                    $button = "'" . $d->button_name . "'";
                    $image = "'" . $d->image . "'";
                    $result = '
                    <div class="d-flex flex-row gap-1">
                        <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#widget" style="text-transform: capitalize;" onclick="viewWidget(' . $d->blog_id . ', ' . $d->id . ', ' . $title . ', ' . $desc . ', ' . $link . ', ' . $d->position . ', ' . $button . ',' . $image . ')">
                            <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this blog widget"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete(' . $d->blog_id . ', ' . $d->id . ')" >
                            <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this blog widget"></i>
                        </button>
                    </div>
                ';
                    return $result;
                })
                ->rawColumns(['description', 'link', 'action'])
                ->make(true);
        }
    }

    public function getBlogRead(Request $request, $blog_id)
    {
        if ($request->ajax()) {
            $data = BlogReads::where('blog_id', $blog_id)->orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function view($id)
    {
        $blog = Blogs::find($id);
        $blogs = Blogs::orderBy('blog_title', 'asc')->where('lang', $blog->lang)->get();
        return view('admin.blog.view', [
            'blog' => $blog,
            'blogs' => $blogs,
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function edit($id)
    {
        $blog = Blogs::find($id);
        $category_en = BlogCategorys::where('lang', 'en')->get();
        $category_id = BlogCategorys::where('lang', 'id')->get();
        $mentor_en = Mentors::where('lang', 'en')->get();
        $mentor_id = Mentors::where('lang', 'id')->get();
        return view('admin.blog.update', [
            'blog' => $blog,
            'category_en' => $category_en,
            'category_id' => $category_id,
            'mentor_en' => $mentor_en,
            'mentor_id' => $mentor_id,
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function update($id, Request $request)
    {
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'blog_thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'blog_alt' => 'required',
            'lang' => 'required',
            'category' => 'required',
            'mentor' => 'nullable',
            'blog_title' => 'required',
            'blog_slug' => 'required',
            'blog_description' => 'required',
            'seo_title' => 'required',
            'seo_keyword' => 'required',
            'seo_desc' => 'required',
            'duration_read' => 'required',
            'publish_date' => 'nullable',
            'blog_status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blogs = Blogs::find($id);
            if ($request->hasFile('blog_thumbnail')) {
                if ($old_image_path_en = $blogs->blog_thumbnail) {
                    $file_path = public_path('uploaded_files/' . 'blogs/' . $blogs->created_at->format('Y') . '/' . $blogs->created_at->format('m') . '/' . $old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('blog_thumbnail');
                $file_format = $request->file('blog_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path() . '/uploaded_files/' . 'blogs/' . $blogs->created_at->format('Y') . '/' . $blogs->created_at->format('m') . '/';
                $time = date('YmdHis');
                $fileName = 'Blogs-thumbnail-' . $time . '.' . $file_format;
                $file->move($destinationPath, $fileName);
                $blogs->blog_thumbnail = $fileName;
            }
            $blogs->blog_thumbnail_alt = $request->blog_alt;
            $blogs->cat_id = $request->category;
            $blogs->mt_id = $request->mentor;
            $blogs->blog_title = $request->blog_title;
            $blogs->slug = $request->blog_slug;
            // $blogs->blog_description = str_replace('<p>&nbsp;</p>', '<br>', $request->blog_description);
            $blogs->blog_description = $request->blog_description;
            $blogs->seo_title = $request->seo_title;
            $blogs->seo_keyword = $request->seo_keyword;
            $blogs->seo_desc = $request->seo_desc;
            $blogs->blog_status = $request->blog_status;
            $blogs->lang = $request->lang;
            $blogs->click_count = 0;
            $blogs->duration_read = $request->duration_read;
            $blogs->is_highlight = 'false';
            if ($request->blog_status == 'publish' && $request->publish_date == null) {
                $blogs->publish_date = date('Y-m-d H:i:s');
            } else if ($request->blog_status == 'publish' && $request->publish_date != null) {
                $blogs->publish_date = $request->publish_date;
            } else if ($request->blog_status == 'draft' && $request->publish_date != null) {
                $blogs->publish_date = $request->publish_date;
            } else if ($request->blog_status == 'draft' && $request->publish_date == null) {
                $blogs->publish_date = null;
            }
            $blogs->updated_at = date('Y-m-d H:i:s');
            $blogs->save();
            DB::commit();
            Log::notice('Blog : "' . $blogs->blog_title . '" has been successfully Updated by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Blog failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/' . $id . '/view')->withSuccess('Blogs Was Successfully Updated');
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog_title = $blog->blog_title;
            if ($old_image_path = $blog->blog_thumbnail) {
                $file_path = public_path('uploaded_files/' . 'blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            $blog_widget = BlogWidgets::where('blog_id', $blog->id)->get();
            foreach ($blog_widget as $widget) {
                $widget->delete();
            }
            $blog_read = BlogReads::where('blog_id', $blog->id)->get();
            foreach ($blog_read as $read) {
                $read->delete();
            }
            $blog->delete();
            DB::commit();
            Log::notice('Blog : "' . $blog_title . '" has been successfully Deleted by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Blog failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs')->withSuccess('Blogs Was Successfully Deleted');
    }

    public function status_draft($id)
    {
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog->blog_status = 'draft';
            $blog->publish_date = null;
            $blog->updated_at = date('Y-m-d H:i:s');
            $blog->save();
            DB::commit();
            Log::notice('Blog : "' . $blog->blog_title . '" has been successfully set to Draft by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Set Draft Blog failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }

    public function status_publish($id)
    {
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog->blog_status = 'publish';
            $blog->publish_date = date('Y-m-d H:i:s');
            $blog->updated_at = date('Y-m-d H:i:s');
            $blog->save();
            DB::commit();
            Log::notice('Blog : "' . $blog->blog_title . '" has been successfully set to Publish by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Set Publish Blog failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }

    public function set_highlight($id)
    {
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $status_msg = '';
            if ($blog->is_highlight == 'false') {
                $blog->is_highlight = 'true';
                $status_msg = 'Highlighted';
            } else {
                $blog->is_highlight = 'false';
                $status_msg = 'removed from Highlight';
            }
            $blog->updated_at = date('Y-m-d H:i:s');
            $blog->save();
            DB::commit();
            Log::notice('Blog : "' . $blog->blog_title . '" has been successfully ' . $status_msg . ' by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Set Highlight Blog failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalExtension();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('uploaded_files/blog_assets'), $fileName);

            $url = asset('uploaded_files/blog_assets/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
