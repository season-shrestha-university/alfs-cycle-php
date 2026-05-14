<?php
// Shared geolocation SEO — included in every page's <head>
// NAP: Alf's Cycle, 99-101 Cheriton High Street, Folkestone, Kent CT19, GB
?>
<!-- Geo meta tags (Bing / legacy crawlers) -->
<meta name="geo.region" content="GB-KEN">
<meta name="geo.placename" content="Cheriton, Folkestone">
<meta name="geo.position" content="51.0806;1.1754">
<meta name="ICBM" content="51.0806, 1.1754">

<!-- LocalBusiness structured data (Google Knowledge Panel / Maps) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Alf's Cycle",
  "description": "Cheriton's premier bicycle shop offering classic and modern bikes, accessories, and expert repairs since 1983.",
  "url": "https://season-shrestha.uk/coursework/design-for-web-content/alfs-cycle-revisited/",
  "telephone": "+447484000000",
  "email": "alfscycle@email.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "99-101 Cheriton High Street",
    "addressLocality": "Folkestone",
    "addressRegion": "Kent",
    "postalCode": "CT19",
    "addressCountry": "GB"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 51.0806,
    "longitude": 1.1754
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "09:00",
      "closes": "18:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "10:00",
      "closes": "16:00"
    }
  ],
  "foundingDate": "1983",
  "image": "https://season-shrestha.uk/coursework/design-for-web-content/alfs-cycle-revisited/assets/images/alfs/alf-in-store.webp"
}
</script>