@extends("layout.layout-main")

@section("head-title")
  Home
@endsection

@section("header-title")
  HOME
@endsection

@section("main-content")
  <div class="route_links">
    <a class="btn btn-secondary btn-lg" href="{{ route("books.index") }}">Libri</a>
    <a class="btn btn-secondary btn-lg" href="{{ route("shoes.index") }}">Scarpe</a>
  </div>
@endsection
