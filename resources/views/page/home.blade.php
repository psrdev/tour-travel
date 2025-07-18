@extends('layouts.main')
@section('content')
    @include('sections.banner')
    <div class="py-5">
        @include('sections.category', ['packages' => $catagory])

    </div>
    @include('sections.about')
    @include('sections.counter')

    {{-- @include('sections.tour', ['packages' => $packages]) --}}
    @include('sections.tour-grid', ['packages' => $packages])
    @include('sections.promotion')
    <div class="py-5">
        @include('sections.testimonial')

    </div>
@endsection

@push('meta')
    <!-- Title Tag -->
    <title>International Tour Packages | Dubai, Thailand, Singapore, Georgia Trips – Brolion Tourism</title>

    <!-- Meta Description -->
    <meta name="description"
        content="Explore the best international tour packages to Dubai, Thailand, Singapore, and Georgia with Brolion Tourism Pvt Ltd. Book flights, hotels, visa & full travel services from India. Custom plans available at best prices." />

    <!-- Meta Keywords -->
    <meta name="keywords"
        content="international tour packages, Dubai trip, Thailand holiday, Singapore tours, Georgia travel, visa assistance, flights and hotel booking, affordable international tours, Brolion Tourism Pvt Ltd, best travel agency India" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.broliontourism.com" />

    <!-- Other SEO Tags -->
    <meta name="author" content="Brolion Tourism Pvt Ltd" />
    <meta name="page-topic" content="International Tourism, Travel Packages, Flights, Hotels, Visa Services" />
    <meta name="copyright" content="Brolion Tourism Pvt Ltd ©️ 2025" />
    <meta name="language" content="en" />
    <meta name="owner" content="Brolion Tourism Pvt Ltd" />
    <meta name="rating" content="General" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="daily" />
    <meta name="distribution" content="global" />
    <meta name="HandheldFriendly" content="true" />

    <meta property="og:site_name" content="Brolion Tourism Pvt Ltd" />
    <meta property="og:title" content="Explore International Tour Packages – Dubai, Thailand, Singapore, Georgia" />
    <meta property="og:description"
        content="Book exciting tour packages from India to Dubai, Singapore, Thailand & Georgia with visa, flights, hotels, and transfers included. Travel hassle-free with Brolion Tourism." />
    <meta property="og:url" content="https://www.broliontourism.com" />
    <meta property="og:image" content="https://broliontourism.com/assets/img/og.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Book Dubai, Singapore, Thailand & Georgia Tour Packages – Brolion Tourism" />
    <meta name="twitter:description"
        content="Discover international trips with flights, hotels, visa, and full support from Brolion Tourism Pvt Ltd." />
    <meta name="twitter:image" content="https://broliontourism.com/assets/img/og.jpg" />
    <meta name="twitter:url" content="https://x.com/BrolionTourism" />


    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Brolion Tourism Pvt Ltd",
  "url": "https://www.broliontourism.com",
  "logo": "https://www.broliontourism.com/images/brolion.jpg",
  "sameAs": [
    "https://www.facebook.com/BrolionTourism/",
    "https://x.com/BrolionTourism",
    "https://www.instagram.com/broliontourism",
    "https://www.youtube.com/@BrolionTourism"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 9202106551",
    "contactType": "Customer Service",
    "areaServed": "IN"
  }
}
</script>
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Brolion Tourism Pvt Ltd",
  "image": "https://www.broliontourism.com/images/brolion.jpg",
  "@id": "https://www.broliontourism.com",
  "url": "https://www.broliontourism.com",
  "telephone": "+91 9202106551",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "198/A Tulsibadi",
    "addressLocality": "Ayodhya",
    "postalCode": "224123",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 26.7921605,
    "longitude": 82.1997954
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    "opens": "10:00",
    "closes": "18:00"
  }
}
</script>

        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Brolion Tourism Pvt Ltd",
  "url": "https://www.broliontourism.com",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.broliontourism.com/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Which destinations do you offer tour packages for?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We offer travel packages for Dubai, Thailand, Singapore, and Georgia with full visa, flight, and hotel services."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide visa services with the tour packages?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, all our international tour packages include visa assistance along with hotel and flights."
      }
    },
    {
      "@type": "Question",
      "name": "Can I customize my travel plan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. We offer fully customizable travel plans based on your preferences and budget."
      }
    }
  ]
}
</script>

        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Dubai Tour Package",
  "description": "Explore Dubai with hotel, flights, visa, transfers and sightseeing. Starting from ₹29,999.",
  "touristType": "Family, Couple, Solo",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "INR",
    "price": "29999",
    "url": "https://www.broliontourism.com/dubai-tour"
  }
}
</script>
    @endverbatim
@endpush
