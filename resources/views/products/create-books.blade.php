@extends("../layout.layout-main")

@section("head-title")
  Aggiungi
@endsection

@section("header-title")
  AGGIUNGI PRODOTTO
@endsection

@section("main-content")
  <form action="{{ route("books.store") }}" method="post">
    @csrf
    @method("POST")

    <div class="form-group">
      <label for="image">Immagine</label>
      <input type="text" class="form-control" id="image" name="image" placeholder="image">
    </div>

    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="title">
    </div>

    <div class="form-group">
      <label for="author">Autore</label>
      <input type="text" class="form-control" id="author" name="author" placeholder="author">
    </div>

    <div class="form-group">
      <label for="year_pubblication">Anno pubblicazione</label>
      <input type="text" class="form-control" id="year_pubblication" name="year_pubblication" placeholder="year">
    </div>

    <div class="form-group">
      <label for="lang">Lingua</label>
      <input type="text" class="form-control" id="lang" name="lang" placeholder="lang">
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection
