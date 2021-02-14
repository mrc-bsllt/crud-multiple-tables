@extends("../layout.layout-main")

@section("head-title")
  Aggiungi
@endsection

@section("header-title")
  AGGIUNGI PRODOTTO
@endsection

@section("main-content")
  <form action="{{ route("shoes.store") }}" method="post">
    @csrf
    @method("POST")

    <div class="form-group">
      <label for="image">Immagine</label>
      <input type="text" class="form-control" id="image" name="image" placeholder="image">
    </div>

    <div class="form-group">
      <label for="brand">Marca</label>
      <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand">
    </div>

    <div class="form-group">
      <label for="model">Modello</label>
      <input type="text" class="form-control" id="model" name="model" placeholder="model">
    </div>

    <div class="form-group">
      <label for="color">Colore</label>
      <input type="text" class="form-control" id="color" name="color" placeholder="color">
    </div>

    <div class="form-group">
      <label for="size">Taglia</label>
      <input type="text" class="form-control" id="size" name="size" placeholder="size">
    </div>

    <div class="form-group">
      <label for="style">Stile</label>
      <input type="text" class="form-control" id="style" name="style" placeholder="style">
    </div>

    <div class="form-group">
      <label for="price">Prezzo</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="price">
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection
