<html>
<head>
    <style>
        .red{
            color: red;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <ul>
        @foreach($hobi2 as $hobi)
            <li @class(["red", "bold" => $hobi['love']])>{{ $hobi['nama'] }}</li>
        @endforeach
    </ul>
</body>
</html>
