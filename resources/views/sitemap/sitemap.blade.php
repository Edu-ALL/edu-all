<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<?php echo '<?xml-stylesheet type="text/xsl" href="'.asset("css/main-sitemap.xsl").'"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <sitemap>
            <loc>{{ url('id-en/sitemap-pages')}}</loc>
            <lastmod>{{ date('c') }}</lastmod>
        </sitemap>
        <sitemap>
            <loc>{{ url('id-id/sitemap-pages')}}</loc>
            <lastmod>{{ date('c') }}</lastmod>
        </sitemap>
        <sitemap>
            <loc>{{ url('id-en/sitemap-blogs')}}</loc>
            <lastmod>{{ date('c') }}</lastmod>
        </sitemap>
        <sitemap>
            <loc>{{ url('id-id/sitemap-blogs')}}</loc>
            <lastmod>{{ date('c') }}</lastmod>
        </sitemap>
</sitemapindex>  