<html></html>
<body>
    @php
        class Person{
            public string $nama;
            public string $alamat;
        }

        $person = new Person();
        $person->nama = "Balqis";
        $person->alamat = "Sumingkir";
    @endphp
    <p>{{ $person->nama }}</p>
    <p>{{ $person->alamat }}</p>
</body>
</html>
