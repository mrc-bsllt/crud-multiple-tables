@extends("../layout.layout-main")

@section("head-title")
  Dettaglio
@endsection

@section("header-title")
  DETTAGLIO
@endsection

@section("main-content")
  <div class="show-content">
    <div class="image">
      <img src="{{ asset("img/$item->image") }}" alt="">
    </div>
    <ul class="no_style_list">
      @foreach ($item->toArray() as $key => $value)
        @if ($key !== "image")
          @if ($key == "price")
            <li><strong>{{ $key }}:</strong> {{ $value }} &#8364;</li>
          @else
            <li><strong>{{ $key }}:</strong> {{ $value }}</li>
          @endif
        @endif
      @endforeach
    </ul>
  </div>

  <a class="btn btn-secondary btn-lg mt-2" href="{{ route($destinationRouteIndex) }}">Indietro</a>
@endsection
