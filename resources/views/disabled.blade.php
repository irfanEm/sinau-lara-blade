<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>
        @{{ $nama }}
    </h2>

    @verbatim
        <p>
            hai {{ $nama }}
            hai {{ $nama }}
            hai {{ $nama }}
            hai {{ $nama }}
        </p>
    @endverbatim
</body>
</html>