<html>
<body>
    @while ($i <= 10)
        Nilai i = {{ $i }}
        @php
            $i++
        @endphp
    @endwhile
    <p></p>
</body>
</html>
