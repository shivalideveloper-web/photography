@php
use App\Models\Role;
@endphp

<!DOCTYPE html>
<html lang="en">
    @include('frontend.includes.head')

    <body>

        <div id="loader"></div>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        @include('frontend.includes.header')

           @yield('content')

        @include('frontend.includes.footer')
        @include('frontend.includes.foot')

    @stack('scripts')
</body>
</html>
