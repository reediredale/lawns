<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
    @foreach ($lawns as $lawn)
            <loc>https://epiclawns.com.au/lawns/{{ $lawn->slug }}</loc>
            <lastmod></lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.6</priority>
    @endforeach
    </url>
</sitemapindex>

