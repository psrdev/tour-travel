@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => 'Destination', 'pagination' => 'destination'])
    <div class="py-5">
        @include('sections.category', ['packages' => $packages])

    </div>
@endsection
@push('meta')
    <title>Top International Tour Destinations from India | Brolion Tourism</title>
    <meta name="description"
        content="Explore top international tour destinations from India including Dubai, Thailand, Singapore, and Georgia. Book customized holiday packages with Brolion Tourism.">
    <meta name="keywords"
        content="international tour destinations, Dubai tour, Thailand package, Singapore tourism, Georgia travel, holiday packages from India, Brolion Tourism">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.broliontourism.com/destination">
    <meta property="og:title" content="Top International Tour Destinations from India | Brolion Tourism">
    <meta property="og:description"
        content="Plan your next holiday to top destinations like Dubai, Singapore, Thailand, and Georgia. Affordable packages with flight & hotel.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.broliontourism.com/destination">
    <meta property="og:image" content="https://broliontourism.com/assets/img/logo.png">
    <meta property="og:site_name" content="Brolion Tourism">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Top International Tour Destinations from India | Brolion Tourism">
    <meta name="twitter:description"
        content="Discover your next holiday destination – Dubai, Thailand, Singapore, Georgia. Easy booking with Brolion Tourism.">
    <meta name="twitter:image" content="https://broliontourism.com/assets/img/logo.png">
    <meta name="twitter:url" content="https://www.broliontourism.com/destination">
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Tour Destinations - Brolion Tourism",
  "url": "https://www.broliontourism.com/destination",
  "description": "Explore top international tour destinations from India including Dubai, Thailand, Singapore, and Georgia. Book your next holiday with Brolion Tourism.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://www.broliontourism.com"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Destinations",
        "item": "https://www.broliontourism.com/destination"
      }
    ]
  },
  "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "TouristDestination",
        "name": "Dubai",
        "url": "https://www.broliontourism.com/dubai-tour"
      },
      {
        "@type": "TouristDestination",
        "name": "Thailand",
        "url": "https://www.broliontourism.com/thailand-tour"
      },
      {
        "@type": "TouristDestination",
        "name": "Singapore",
        "url": "https://www.broliontourism.com/singapore-tour"
      },
      {
        "@type": "TouristDestination",
        "name": "Georgia",
        "url": "https://www.broliontourism.com/georgia-tour"
      }
    ]
  }
}
</script>
    @endverbatim
@endpush
