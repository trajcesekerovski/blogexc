@include('partials._head')
<body>
    <div id="app">
        @include('partials._nav')

        <main class="py-4">
            @include('partials.messages')
            @yield('content')
        </main>
    </div>
    @include('partials._footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
