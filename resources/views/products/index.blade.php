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
          <td>
            <a class="btn btn-secondary btn-lg" href="{{ route($destinationRouteShow, [$paramName => $item["id"]] ) }}">
              <i class="fas fa-eye"></i>
            </a>
          </td>
          <td><a class="btn btn-secondary btn-lg" href="{{ route($destinationRouteEdit, [$paramName => $item["id"]]) }}"><i class="fas fa-pencil-alt"></i></a></td>
          <td>
            <form action="{{ route($destinationRouteDestroy, [$paramName => $item["id"]]) }}" method="post">
              @csrf
              @method("DELETE")

              <button class="btn btn-secondary btn-lg" type="submit" name="button"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div class="buttons">
    <a class="btn btn-secondary btn-lg" href="{{ route("home") }}">Indietro</a>
    <a class="btn btn-secondary btn-lg" href="{{ route($destinationRouteCreate) }}"><i class="fas fa-plus"></i></a>
  </div>
@endsection
