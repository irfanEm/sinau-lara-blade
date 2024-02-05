<html>
    <body>
        @error("nama")
            <p>{{ $message }}</p>
        @enderror

        @error("password")
            <p>{{ $message }}</p>
        @enderror
    </body>
</html>