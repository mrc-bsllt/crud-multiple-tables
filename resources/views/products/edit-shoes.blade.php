@extends("../layout.layout-main")

@section("head-title")
  Aggiungi
@endsection

@section("header-title")
  AGGIUNGI PRODOTTO
@endsection

@section("main-content")
  <form action="{{ route("shoes.update", ["shoe" => $item->id]) }}" method="post">
    @csrf
    @method("PUT")

    <div class="form-group">
      <label for="image">Immagine</label>
      <input type="text" class="form-control" id="image" name="image" placeholder="image" value="{{ $item->image }}">
    </div>

    <div class="form-group">
      <label for="brand">Marca</label>
      <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand" value="{{ $item->brand }}">
    </div>

    <div class="form-group">
      <label for="model">Modello</label>
      <input type="text" class="form-control" id="model" name="model" placeholder="model" value="{{ $item->model }}">
    </div>

    <div class="form-group">
      <label for="color">Colore</label>
      <input type="text" class="form-control" id="color" name="color" placeholder="color" value="{{ $item->color }}">
    </div>

    <div class="form-group">
      <label for="size">Taglia</label>
      <input type="text" class="form-control" id="size" name="size" placeholder="size" value="{{ $item->size }}">
    </div>

    <div class="form-group">
      <label for="style">Stile</label>
      <input type="text" class="form-control" id="style" name="style" placeholder="style" value="{{ $item->style }}">
    </div>

    <div class="form-group">
      <label for="price">Prezzo</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="price" value="{{ $item->price }}">
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection
