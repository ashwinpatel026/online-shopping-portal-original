<!DOCTYPE html>
<html lang="en">
<x-head />

<body class="cnt-home">
    <header class="header-style-1">
        <x-header :categories="$categories" />
    </header>

    @yield('content')

    <x-footer />

    <x-script />
</body>

</html>