<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#" aria-label="Product">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="{{route('admin-index')}}">Home page</a>
            <a class="py-2 d-none d-md-inline-block" href="{{route('view-page')}}">View Page</a>
            <a class="py-2 d-none d-md-inline-block" href="{{route('main')}}">Main site</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Contacts</a>
        </div>
    </header>
        @yield('content')
</body>
</html>
