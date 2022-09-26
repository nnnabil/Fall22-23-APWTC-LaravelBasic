<html>
    <head>
        <title>Laravel Test</title>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <body>
        <div class="container">
            @include('inc.topnav')
            <div>
                @yield('content')
            </div>
        </div>
    </body>
    </html>