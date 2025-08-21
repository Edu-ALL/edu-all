@php
    $structuredBreadcrumbs = [];

    foreach ($breadcrumbs as $index => $crumb) {
        $structuredBreadcrumbs[] = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $crumb['name'],
            'item' => $crumb['url'],
        ];
    }
@endphp

    <script type="application/ld+json">
        {!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => $structuredBreadcrumbs,
            ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) 
        !!}
    </script>
