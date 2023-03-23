<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<?php echo '<?xml-stylesheet type="text/xsl" href="'.asset("css/main-sitemap.xsl").'"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($blogs as $blog)
        <url>
            <loc>{{ url($lang . '/blog/' . $blog->slug) }}</loc>
            <lastmod>{{ date('c', strtotime($blog->updated_at)) }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>