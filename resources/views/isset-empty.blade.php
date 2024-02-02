<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isset - Empty Blade</title>
</head>
<body>
    <p>
        @isset($nama)
            Hai, nama saya {{ $nama }}.
        @endisset
    </p>
    <p>
        @empty($hobi2)
            Saya belum memiliki hobi apapun.
        @endempty
    </p>
</body>
</html>
