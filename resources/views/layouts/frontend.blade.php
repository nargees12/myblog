<!DOCTYPE html>
<html lang="en">

    @include('frontend.includes.head')

<body>

<div class="body-inner">

    @include('frontend.includes.header')

    @yield('content')

    @include('frontend.includes.footer')

</div>

   @include('frontend.includes.scripts')

</body>
</html>