@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => 'About', 'pagination' => 'about'])
    @include('sections.about');
    <div class="py-4">
        @include('sections.promotion')
    </div>
@endsection
@push('meta')
    <title>About Brolion Tourism | Dubai, Thailand, Singapore Tour Experts</title>
    <meta name="description"
        content="Know about Brolion Tourism - India's trusted travel agency for Dubai, Thailand, Singapore & Georgia packages with flight, hotel, and visa services." />
    <meta name="keywords"
        content="About Brolion Tourism, Dubai tour agency, Thailand holiday expert, Singapore package, Georgia visa, international travel agent India" />
    <link rel="canonical" href="https://www.broliontourism.com/about" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.broliontourism.com/about" />
    <meta property="og:title" content="About Brolion Tourism | Dubai, Thailand, Singapore Tour Experts" />
    <meta property="og:description"
        content="Know about Brolion Tourism - India's trusted travel agency for Dubai, Thailand, Singapore & Georgia packages with flight, hotel, and visa services." />
    <meta property="og:image" content="https://broliontourism.com/assets/img/og.jpg" />
    <meta property="og:site_name" content="Brolion Tourism" />
    <meta property="article:publisher" content="https://www.facebook.com/BrolionTourism/" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About Brolion Tourism | Dubai, Thailand, Singapore Tour Experts" />
    <meta name="twitter:description"
        content="Know about Brolion Tourism - India's trusted travel agency for Dubai, Thailand, Singapore & Georgia packages with flight, hotel, and visa services." />
    <meta name="twitter:image" content="https://www.broliontourism.com/assets/images/og-image.jpg" />
    <meta name="twitter:site" content="@BrolionTourism" />
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Brolion Tourism",
  "url": "https://www.broliontourism.com",
  "logo": "https://broliontourism.com/assets/img/logo.png",
  "sameAs": [
    "https://www.facebook.com/BrolionTourism/"
  ],
  "foundingDate": "2023",
  "description": "Brolion Tourism is a leading travel company from India offering affordable international holiday packages to Dubai, Thailand, Singapore, and Georgia.",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Ayodhya",
    "addressRegion": "Uttar Pradesh",
    "postalCode": "224123",
    "addressCountry": "India"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 ",
    "contactType": "Customer Service",
    "availableLanguage": ["English", "Hindi"]
  }
}
</script>

    @endverbatim
@endpush
