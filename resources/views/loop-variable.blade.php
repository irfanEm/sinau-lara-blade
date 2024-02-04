<html>
<body>
    <ul>
        @foreach ($hobi2 as $hobi)
            <li>{{ $loop->iteration }}. {{ $hobi }}</li>
        @endforeach
    </ul>
</body>
</html>
