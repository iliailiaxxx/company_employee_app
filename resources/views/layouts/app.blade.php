<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mini CRM</title>
    <link href="{{ asset('adminlte/dist/css/adminlte.css') }}" rel="stylesheet">
    <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    @stack('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Sidebar -->
    @include('partials.sidebar')

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <section class="content p-3">
            @yield('content')
        </section>
    </div>

    <!-- Footer -->
    @include('partials.footer')
</div>


<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>

@stack('scripts')
</body>
</html>
