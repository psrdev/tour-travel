@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => 'Contact', 'pagination' => 'contact'])
    @include('sections.contact')
@endsection
@push('meta')
    title>Contact Brolion Tourism Pvt Ltd | Tour Booking & Visa Assistance</title>
    <meta name="description"
        content="Get in touch with Brolion Tourism for international tour bookings, visa support, or general travel inquiries. Reach us via phone, email, or our contact form.">
    <meta name="keywords"
        content="contact Brolion Tourism, travel agency contact, visa help, tour booking, Brolion Tourism Ayodhya, travel company India">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.broliontourism.com/contact">

    <meta property="og:title" content="Contact Brolion Tourism | Travel Support & Inquiries">
    <meta property="og:description"
        content="Have a query? Contact Brolion Tourism for visa, holiday booking, or travel help. We’re happy to assist.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.broliontourism.com/contact">
    <meta property="og:image" content="https://broliontourism.com/assets/img/logo.png">
    <meta property="og:site_name" content="Brolion Tourism">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Brolion Tourism | Tour Booking & Visa Queries">
    <meta name="twitter:description"
        content="Call, email, or message Brolion Tourism for tour packages and travel assistance.">
    <meta name="twitter:image" content="https://broliontourism.com/assets/img/logo.png">
    <meta name="twitter:url" content="https://www.broliontourism.com/contact">
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Brolion Tourism",
  "description": "Reach Brolion Tourism Pvt Ltd for any inquiries related to international travel, tour bookings, or visa services.",
  "url": "https://www.broliontourism.com/contact",
  "mainEntity": {
    "@type": "Organization",
    "name": "Brolion Tourism Pvt Ltd",
    "url": "https://www.broliontourism.com",
    "logo": "https://broliontourism.com/assets/img/logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+91 9202106551",
      "contactType": "Customer Service",
      "areaServed": "IN",
      "availableLanguage": ["English", "Hindi"]
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "198/A Tulsibadi",
      "addressLocality": "Ayodhya",
      "postalCode": "224123",
      "addressCountry": "IN"
    }
  }
}
</script>
    @endverbatim
@endpush
