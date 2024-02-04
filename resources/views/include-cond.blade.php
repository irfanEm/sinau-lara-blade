<html>
    <body>
        @includeWhen($user['admin'], "header-admin")
        <p>Selamat datang {{ $user['nama'] }}, diwebsite kami.</p>
    </body>
</html>
