<html></html>
<body>
    <ul>
        @forelse ($hobi2 as $hobi)
            <li>{{ $hobi }}</li>
            @empty
            <li>Kamu belum memiliki hobi.</li>
        @endforelse
    </ul>
</body>
</html>
