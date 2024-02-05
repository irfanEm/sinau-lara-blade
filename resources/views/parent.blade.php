<html>
    <head>
        <title>Sinau Blade | @yield("title")</title>
    </head>
    <body>
        @section("header")
            <h1>Header Default</h1>
        @show
        @yield("navbar")
            <h4>Navbar Default</h4>
        @show
        @yield("content")
            <p>Ini adalah konten default jika konten child tidak di deklarasikan.</p>
        @show
        @yield("footer")
            <p>footer default.</p>
        @show
    </body>
</html>