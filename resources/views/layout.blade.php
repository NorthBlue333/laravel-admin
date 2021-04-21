<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet"
          href="{{ asset('vendor/laravel-admin/css/admin.css') }}">
    <script src="https://kit.fontawesome.com/da505524df.js"
            crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/laravel-admin/js/admin.js') }}"></script>
</head>

<body class="bg-ghost-white flex items-stretch h-auto">
    <x-laravel-admin-navigation contentId="admin-main-content"
                        classesToToggle="pl-24 pl-12">
        @slot('userTitle')
            {{ auth()->user()->email }}
        @endslot
    </x-laravel-admin-navigation>
    <main class="pl-24 pt-16 pr-8 pb-8 w-full transition-p-w duration-200"
          id="admin-main-content">
        @yield('content')
    </main>
</body>
@stack('scripts')

</html>
