<!doctype html>
<html 
    lang="en" 
    class="h-full antialiased dark" 
    style="color-scheme: dark; --header-position: sticky; --content-offset: 0px; --header-height: 64px; --header-mb: 0px; --header-top: 0px; --avatar-top: 0px;"
    x-data="{ darkMode: $persist(true), 'showModal': false }"
    :class="{'dark': darkMode === true }"
    @keydown.escape="showModal = false" 
    x-cloak
>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">

    <title>{{ $title ?? 'Blockchain $WILLIE' }}</title>
    <meta name="description" content="{{ $description ?? 'Willie Nelson Blockchain Fan Club is a 4/20 memecoin war amongst native degens on various blockchains..' }}" />
    <link rel="canonical" href="{{ $canonical ?? 'https://willieclub.org' }}" />
    <link rel="icon" type="image/x-icon" sizes="16x16" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/site.webmanifest">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $title ?? 'Blockchain $WILLIE' }}" />
    <meta property="og:description" content="{{ $description ?? 'Willie Nelson Blockchain Fan Club is a 4/20 memecoin war amongst native degens on various blockchains..' }}" />
    <meta property="og:url" content="{{ $canonical ?? 'https://willieclub.org' }}" />
    <meta property="og:site_name" content="Blockchain $WILLIE" />
    <meta property="og:image" content="{{ $ogimage ?? 'https://willieclub.org/img/og-willie.png' }}" />
    <meta property="article:publisher" content="https://www.facebook.com/drewroberts" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{ $ogdescription ?? 'Willie Nelson Blockchain Fan Club is a 4/20 memecoin war amongst native degens on various blockchains..' }}" />
    <meta name="twitter:title" content="{{ $title ?? 'Blockchain $WILLIE' }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ mix('/js/app.js') }}"></script>

</head>

<body class="flex h-full bg-zinc-50 dark:bg-black">
    <div class="flex w-full">
        <div class="fixed inset-0 flex justify-center sm:px-8">
            <div class="flex w-full max-w-7xl lg:px-8">
                <div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div>
            </div>
        </div>
        <div class="relative flex w-full flex-col">
            @include('partials.header')

            @yield('content')

            @include('partials.footer')
        </div>
    </div>
</body>
</html>