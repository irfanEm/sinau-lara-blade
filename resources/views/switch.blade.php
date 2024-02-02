<html>
    <body>
        @switch($nilai)
            @case('A')
                Memuaskan
                @break

            @case('B')
                Bagus
                @break

            @case('C')
                Cukup
                @break

            @default
                Belum lulus, silahkan coba lagi.
        @endswitch
    </body>
</html>
