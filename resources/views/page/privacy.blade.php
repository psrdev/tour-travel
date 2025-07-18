@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => 'Privacy Policy', 'pagination' => 'privacy-policy'])
    <div class="container">
        <article class="details-text-page">

            <h2>Privacy Policy</h2>
            <p>Brolion Tourism ("we," "our," "us") is committed to protecting your privacy and ensuring a secure online
                experience. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when
                you
                visit our website <a href="https://www.broliontourism.com">www.broliontourism.com</a> (the “Website”) or use
                our
                services. By using our Website and services, you consent to the practices described in this Privacy Policy.
            </p>

            <h2>1. Information We Collect</h2>
            <h3>1.1 Personal Information:</h3>
            <p>When you use our services, we may collect personal information, including but not limited to:</p>
            <ul>
                <li>Name</li>
                <li>Contact information (e.g., email address, phone number)</li>
                <li>Passport details</li>
                <li>Travel plans and preferences</li>
                <li>Payment information</li>
            </ul>

            <h3>1.2 Non-Personal Information:</h3>
            <p>We may also collect non-personal information about your visit to our Website, such as:</p>
            <ul>
                <li>IP address</li>
                <li>Browser type and version</li>
                <li>Operating system</li>
                <li>Referring website</li>
                <li>Pages visited and time spent on our Website</li>
            </ul>

            <h2>2. How We Use Your Information</h2>
            <h3>2.1 Service Delivery:</h3>
            <p>We use your personal information to provide, process, and manage the services you request, including visa
                applications, travel bookings, and customer support.</p>

            <h3>2.2 Communication:</h3>
            <p>We may use your contact information to communicate with you about your application status, provide updates,
                and
                offer promotional information related to our services.</p>

            <h3>2.3 Billing and Transactions:</h3>
            <p>Your payment information is used to process transactions and manage billing for our services.</p>

            <h3>2.4 Improvement and Analytics:</h3>
            <p>We use non-personal information to analyze Website usage, improve our services, and enhance user experience.
            </p>

            <h3>2.5 Legal Compliance:</h3>
            <p>We may use your information to comply with legal obligations, resolve disputes, and enforce our terms and
                conditions.</p>

            <h2>3. How We Share Your Information</h2>
            <h3>3.1 Service Providers:</h3>
            <p>We may share your information with third-party service providers who assist us in operating our Website and
                delivering services, such as payment processors and visa application centers. These providers are obligated
                to
                protect your information and use it only for the purpose of providing services to us.</p>

            <h3>3.2 Legal Requirements:</h3>
            <p>We may disclose your information if required by law or in response to valid legal requests, such as subpoenas
                or
                court orders.</p>

            <h3>3.3 Business Transfers:</h3>
            <p>In the event of a merger, acquisition, or sale of all or a portion of our business, your information may be
                transferred as part of the transaction.</p>

            <h3>3.4 Consent:</h3>
            <p>We may share your information with your consent or as otherwise described in this Privacy Policy.</p>

            <h2>4. Data Security</h2>
            <p>We implement appropriate security measures to protect your personal information from unauthorized access,
                use, or
                disclosure. However, no method of transmission over the Internet or electronic storage is completely secure,
                and
                we cannot guarantee absolute security.</p>

            <h2>5. Cookies and Tracking Technologies</h2>
            <h3>5.1 Cookies:</h3>
            <p>Our Website uses cookies and similar tracking technologies to enhance user experience, analyze usage, and
                personalize content. Cookies are small data files stored on your device.</p>

            <h3>5.2 Control:</h3>
            <p>You can control cookie settings through your browser. Please note that disabling cookies may affect the
                functionality of our Website.</p>

            <h2>6. Your Rights and Choices</h2>
            <h3>6.1 Access and Correction:</h3>
            <p>You have the right to access, update, or correct your personal information. You may do so by contacting us at
                the
                contact information provided below.</p>

            <h3>6.2 Opt-Out:</h3>
            <p>You may opt out of receiving promotional communications from us by following the unsubscribe instructions
                provided in the emails or contacting us directly.</p>

            <h3>6.3 Data Retention:</h3>
            <p>We retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy
                Policy or as required by law.</p>

            <h2>7. Children’s Privacy</h2>
            <p>Our services are not intended for individuals under the age of 18. We do not knowingly collect personal
                information from children under 18. If we become aware of any such information, we will take steps to delete
                it.
            </p>

            <h2>8. Changes to This Privacy Policy</h2>
            <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated
                effective date. We encourage you to review this Privacy Policy periodically for any updates.</p>

            <h2>9. Contact Us</h2>
            <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact us at:
            </p>
            <ul>
                <li>Email: <a href="mailto:info@broliontourism.com">info@broliontourism.com</a></li>
            </ul>

        </article>

    </div>
@endsection
@push('meta')
    <title>Privacy Policy | Brolion Tourism Pvt Ltd</title>
    <meta name="description"
        content="Read the privacy policy of Brolion Tourism Pvt Ltd. Learn how we collect, use, and protect your personal information while booking travel packages or using our website.">
    <meta name="keywords"
        content="privacy policy, Brolion Tourism privacy, data protection, personal data, travel website policy">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.broliontourism.com/privacy-policy">

    <meta property="og:title" content="Privacy Policy | Brolion Tourism Pvt Ltd">
    <meta property="og:description"
        content="Understand how Brolion Tourism handles and protects your personal data and privacy.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.broliontourism.com/privacy-policy">
    <meta property="og:image" content="https://broliontourism.com/assets/img/og.jpg">
    <meta property="og:site_name" content="Brolion Tourism">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Privacy Policy | Brolion Tourism">
    <meta name="twitter:description" content="We value your privacy. See how Brolion Tourism uses and protects your data.">
    <meta name="twitter:image" content="https://broliontourism.com/assets/img/og.jpg">
    <meta name="twitter:url" content="https://www.broliontourism.com/privacy-policy">

    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Privacy Policy",
  "url": "https://www.broliontourism.com/privacy-policy",
  "description": "Privacy policy of Brolion Tourism Pvt Ltd outlining data collection, storage, and protection practices.",
  "publisher": {
    "@type": "Organization",
    "name": "Brolion Tourism Pvt Ltd",
    "url": "https://www.broliontourism.com",
    "logo": {
      "@type": "ImageObject",
      "url": "https://broliontourism.com/assets/img/logo.png"
    }
  }
}
</script>
    @endverbatim
@endpush
