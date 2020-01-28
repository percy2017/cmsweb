<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ setting('site.title') }}</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="{{ asset('vendor/mdb/lgp/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/mdb/lgp/css/mdb.min.css') }}" rel="stylesheet">

<meta property="og:site_name" content="{{ setting('site.title') }}" />
<meta property="og:title" content="{{ setting('site.title') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:image" content="{{ asset(setting('site.logo')) }}" />
<meta property="og:description" content="{{ setting('site.description') }}" />

<link rel="stylesheet" href="{{ asset('vendor/whatsapp/floating-wpp.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/share/css/contact-buttons.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/up/css/floating-totop-button.css') }}">
@laravelPWA