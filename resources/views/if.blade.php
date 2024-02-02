<html>
    <body>
        <p>
            @if (count($hobi2) == 1)
                Saya memiliki sebuah hobi.
            @elseif (count($hobi2) > 1)
                Saya memiliki beberapa hobi.
            @else
                Saya tidak memiliki hobi.
            @endif
        </p>
    </body>
</html>