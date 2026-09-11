@php
    /*
    |--------------------------------------------------------------------------
    | UomUI Page Direction
    |--------------------------------------------------------------------------
    |
    | Available values:
    |
    | auto  = Detect direction automatically from the current Laravel locale.
    | rtl   = Force Right-To-Left direction.
    | ltr   = Force Left-To-Right direction.
    |
    | The generated layout default is: auto
    |
    | You may override the value by passing a $direction variable to the view.
    |
    */

    $uomuiDirection = $direction ?? 'auto';

    /*
    |--------------------------------------------------------------------------
    | Current Locale
    |--------------------------------------------------------------------------
    */

    $uomuiLocale = app()->getLocale();

    /*
    |--------------------------------------------------------------------------
    | RTL Locales
    |--------------------------------------------------------------------------
    |
    | Only the language portion is checked.
    |
    | Examples:
    | ar
    | ar_IQ
    | ar-IQ
    |
    */

    $uomuiRtlLocales = [
        'ar',
        'fa',
        'he',
        'ur',
    ];

    $uomuiLanguage = strtolower(
        preg_split('/[-_]/', $uomuiLocale)[0]
    );

    /*
    |--------------------------------------------------------------------------
    | Resolve Direction
    |--------------------------------------------------------------------------
    */

    $uomuiResolvedDirection = match ($uomuiDirection) {
        'rtl' => 'rtl',
        'ltr' => 'ltr',

        default => in_array(
            $uomuiLanguage,
            $uomuiRtlLocales,
            true
        )
            ? 'rtl'
            : 'ltr',
    };

    /*
    |--------------------------------------------------------------------------
    | Resolve UomUI Stylesheet
    |--------------------------------------------------------------------------
    */

    $uomuiStylesheet = $uomuiResolvedDirection === 'rtl'
        ? 'vendor/uomui/css/uomui.rtl.css'
        : 'vendor/uomui/css/uomui.css';
@endphp

<!DOCTYPE html>

<html
    lang="{{ $uomuiLocale }}"
    dir="{{ $uomuiResolvedDirection }}"
>
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>
        @yield('title', config('app.name', 'Laravel'))
    </title>

    {{-- UomUI --}}
    <link
        rel="stylesheet"
        href="{{ asset($uomuiStylesheet) }}"
    >

    {{-- Page specific styles --}}
    @stack('styles')

</head>

<body>

    @yield('content')

    {{-- UomUI JavaScript --}}
    <script
        src="{{ asset('vendor/uomui/js/uomui.js') }}"
    ></script>

    {{-- Page specific scripts --}}
    @stack('scripts')

</body>
</html>
