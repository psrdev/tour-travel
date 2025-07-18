@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', [
        'title' => 'Tours',
        'pagination' => 'tours',
    ])

    @include('sections.tour-grid', ['packages' => $packages])
@endsection
@push('meta')
    <title>International Tour Packages from India | Brolion Tourism</title>
    <meta name="description"
        content="Browse the best international tour packages from India. Choose from Dubai, Thailand, Singapore, Georgia, Azerbaijan & more. Flights, hotels, visas included.">
    <meta name="keywords"
        content="International tour packages, Dubai tour, Thailand packages, Singapore travel, Baku trip, Georgia tourism, visa with hotel, Brolion Tourism">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.broliontourism.com/tours">

    <meta property="og:title" content="Explore All International Tour Packages | Brolion Tourism">
    <meta property="og:description"
        content="Discover handpicked international tours with flights, hotels, sightseeing & visa. Perfect for couples, families & solo travelers.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.broliontourism.com/tours">
    <meta property="og:image" content="https://broliontourism.com/assets/img/logo.png">
    <meta property="og:site_name" content="Brolion Tourism">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="International Tour Packages | Dubai, Thailand, Singapore & More">
    <meta name="twitter:description"
        content="Plan your perfect holiday with Brolion Tourism. Book international trips from India with ease. Hotel + Flight + Visa.">
    <meta name="twitter:image" content="https://broliontourism.com/assets/img/logo.png">
    <meta name="twitter:url" content="https://www.broliontourism.com/tours">
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "International Tour Packages",
  "url": "https://www.broliontourism.com/tours",
  "description": "All international tour packages offered by Brolion Tourism. Book Dubai, Thailand, Singapore, Georgia, Azerbaijan tours with flights, hotels, sightseeing, visa.",
  "numberOfItems": 6,
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Dubai Tour Packages",
      "url": "https://www.broliontourism.com/destination/dubai-tour"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Thailand Tour Packages",
      "url": "https://www.broliontourism.com/destination/thailand"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Singapore Tour Packages",
      "url": "https://www.broliontourism.com/destination/singapore"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Georgia Tour Packages",
      "url": "https://www.broliontourism.com/destination/georgia-tour"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Azerbaijan Tour Packages",
      "url": "https://www.broliontourism.com/destination/azerbaijan-tour"
    },
    {
      "@type": "ListItem",
      "position": 6,
      "name": "All International Tours",
      "url": "https://www.broliontourism.com/tours"
    }
  ]
}
</script>
    @endverbatim
@endpush
