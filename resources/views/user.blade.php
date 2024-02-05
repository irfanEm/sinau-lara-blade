@once
    <style>
        .red {
            color: red;
        }
    </style>
@endonce

<h3>{{ $user["nama"] }}</h3>

<ul>
    @foreach ($user["hobi2"] as $hobi)
        <li>{{ $hobi }}</li>
    @endforeach
</ul>