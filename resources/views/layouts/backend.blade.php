<!DOCTYPE html>
<html lang="en">

      @include('backend.includes.head')

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<div class="wrapper">


    @include('backend.includes.sidebar')


    <div class="content-page">
        <div class="content">

        @include('backend.includes.navbar')

        @yield('content')

        </div>

        @include('backend.includes.footer')

    </div>

</div>

         @include('backend.includes.scripts')
@include('sweetalert::alert')

</body>
</html>
