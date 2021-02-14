@extends("../layout.layout-main")

@section("head-title")
  Products
@endsection

@section("header-title")
  PRODUCTS
@endsection

@section("main-content")
  <table class="table table-dark table-striped table-bordered">
    <thead>
      <tr>
        @foreach ($items->toArray()[0] as $key => $value)
          @if($key !== "image")
            <th>{{ $key }}</th>
          @endif
        @endforeach
      </tr>
    </thead>
    <tbody>
      @foreach ($items->toArray() as $item)
        <tr>
          @foreach ($item as $key => $value)
            @if($key !== "image")
            <td>{{ $value }}</td>
          @endif
          @endforeach
          <td><a class="btn btn-secondary btn-lg" href="{{
            Route::currentRouteName() == 'books.index' ? route("books.show", ["book" => $item["id"]]) : route("shoes.show", ["shoe" => $item["id"]])
          }}">
            <i class="fas fa-eye"></i>
          </a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div class="buttons">
    <a class="btn btn-secondary btn-lg" href="{{ route("home") }}">Indietro</a>
  </div>
@endsection
