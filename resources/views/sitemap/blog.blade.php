<?xml-stylesheet type="text/xsl" href="{{ asset('css/main-sitemap.xsl') }}"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($blogs as $blog)
        <url>
            <loc>{{ url($lang . '/blog/' . $blog->slug) }}</loc>
            <lastmod>{{ $blog->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
            <image:image>
                <image:loc>{{ asset('uploaded_files/blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}</image:loc>
                <image:title>
                    <![CDATA[{{$blog->blog_title}}]]>
                </image:title>
            </image:image>
        </url>
    @endforeach
</urlset>
