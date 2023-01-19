<!DOCTYPE html>
<html lang="en">


<head>
    @yield('meta')
    @include('livewire.includes.cdn')
    <META NAME="robots" CONTENT="noindex,nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    
</head>

<body>
    @include('livewire.includes.header')

    {{ $slot }}

    @include('livewire.includes.footer')
    @livewireScripts
</body>

</html>
