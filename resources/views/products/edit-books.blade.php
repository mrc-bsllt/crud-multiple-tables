@extends("../layout.layout-main")

@section("head-title")
  Aggiungi
@endsection

@section("header-title")
  AGGIUNGI PRODOTTO
@endsection

@section("main-content")
  <form action="{{ route("books.update", ["book" => $item->id]) }}" method="post">
    @csrf
    @method("PUT")

    <div class="form-group">
      <label for="image">Immagine</label>
      <input type="text" class="form-control" id="image" name="image" placeholder="image" value="{{ $item->image }}">
    </div>

    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ $item->title }}">
    </div>

    <div class="form-group">
      <label for="author">Autore</label>
      <input type="text" class="form-control" id="author" name="author" placeholder="author" value="{{ $item->author }}">
    </div>

    <div class="form-group">
      <label for="year_pubblication">Anno pubblicazione</label>
      <input type="text" class="form-control" id="year_pubblication" name="year_pubblication" placeholder="year" value="{{ $item->year_pubblication }}">
    </div>

    <div class="form-group">
      <label for="lang">Lingua</label>
      <input type="text" class="form-control" id="lang" name="lang" placeholder="lang" value="{{ $item->lang }}">
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection
