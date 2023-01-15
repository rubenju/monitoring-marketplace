<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }} - Monitoring Marketplace</title>

    <link rel="stylesheet" href="/assets/css/main/app.css" />
    <link rel="stylesheet" href="/assets/css/main/app-dark.css" />
    <link
      rel="shortcut icon"
      href="/assets/images/ipos.png"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="/assets/images/ipos.png"
      type="image/png"
    />

    <link rel="stylesheet" href="/assets/css/shared/iconly.css" />
    @stack('content-style')
  </head>

  <body>
    {{-- <script src="/assets/js/initTheme.js"></script> --}}

    <div id="app">
      @include('layout.sidebar')
      @yield('content')
    </div>

    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>

    @stack('content-script')
  </body>
</html>
