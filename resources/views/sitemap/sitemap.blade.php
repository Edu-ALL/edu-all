<?xml-stylesheet type="text/xsl" href="{{asset('css/main-sitemap.xsl')}}"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
            <loc>{{ url('id-en/sitemap-pages.xml')}}</loc>
            <lastmod>{{ date('c') }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>1</priority>
        </url>
        <url>
            <loc>{{ url('id/sitemap-pages.xml')}}</loc>
            <lastmod>{{ date('c') }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>1</priority>
        </url>
</urlset>