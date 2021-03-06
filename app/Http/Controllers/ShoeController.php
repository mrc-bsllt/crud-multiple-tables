<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoe;

class ShoeController extends Controller
{
    private $destinationRouteShow = "shoes.show";
    private $destinationRouteIndex = "shoes.index";
    private $destinationRouteCreate = "shoes.create";
    private $destinationRouteEdit = "shoes.edit";
    private $destinationRouteDestroy = "shoes.destroy";
    private $paramName = "shoe";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = Shoe::all();
      $destinationRouteShow = $this->destinationRouteShow;
      $destinationRouteCreate = $this->destinationRouteCreate;
      $destinationRouteEdit = $this->destinationRouteEdit;
      $destinationRouteDestroy = $this->destinationRouteDestroy;
      $paramName = $this->paramName;

      return view("products.index", compact(
        "items",
        "destinationRouteShow",
        "destinationRouteCreate",
        "destinationRouteEdit",
        "destinationRouteDestroy",
        "paramName"
      ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("products.create-shoes");
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

      $newItem = new Shoe();
      $newItem->fill($data)->save();

      return redirect()->route("shoes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $shoe)
    {
      $item = $shoe;
      $destinationRouteIndex = $this->destinationRouteIndex;

      return view("products.show", compact("item", "destinationRouteIndex"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoe $shoe)
    {
      $item = $shoe;

      return view("products.edit-shoes", compact("item"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoe $shoe)
    {
      $data = $request->all();

      $newItem = $shoe;

      $newItem->update($data);

      return redirect()->route("shoes.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoe $shoe)
    {
      $item = $shoe;

      $item->delete();

      return redirect()->route("shoes.index");

    }
}
