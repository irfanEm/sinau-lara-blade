<html>
    <body>
        @push("script")
            <script src=" pertama.js"></script>
        @endpush

        @push("script")
            <script src=" dua.js"></script>
        @endpush

        @prepend("script")
            
        <script src=" tiga.js"></script>
        @endprepend()

        @stack("script")
    </body>
</html>