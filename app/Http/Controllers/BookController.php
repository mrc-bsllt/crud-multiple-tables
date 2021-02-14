<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    private $destinationRouteShow = "books.show";
    private $destinationRouteIndex = "books.index";
    private $destinationRouteCreate = "books.create";
    private $destinationRouteEdit = "books.edit";
    private $paramName = "book";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = Book::all();
      $destinationRouteShow = $this->destinationRouteShow;
      $destinationRouteCreate = $this->destinationRouteCreate;
      $destinationRouteEdit = $this->destinationRouteEdit;
      $paramName = $this->paramName;

      return view("products.index", compact("items", "destinationRouteShow", "destinationRouteCreate", "destinationRouteEdit", "paramName"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("products.create-books");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();

      $newItem = new Book();
      $newItem->fill($data);

      $newItem->save();

      return redirect()->route("books.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $item = Book::findOrFail($id);
      $destinationRouteIndex = $this->destinationRouteIndex;

      return view("products.show", compact("item", "destinationRouteIndex"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $item = Book::findOrFail($id);

      return view("products.edit-books", compact("item"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = $request->all();

      $newItem = Book::findOrFail($id);

      $newItem->update($data);

      return redirect()->route("books.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
