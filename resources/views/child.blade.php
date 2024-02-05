@extends("parent")

@section("title", "Halaman Utama")

@section("header")
    @parent
    <h1>Header Utama</h1>
@endsection

@section("navbar")
    <h4>Navbar Utama</h4>
@endsection

@section("content")
    <p>Ini adalah konten Utama kita</p>
@endsection

@section("footer")
    @parent
    <p>footer</p>
@endsection