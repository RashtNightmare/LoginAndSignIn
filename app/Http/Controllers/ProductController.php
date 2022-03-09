<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::query()->select([
          'id','slug','description','price'
        ])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'slug'  => 'required',
            'price' => 'required'
       ]);
       return Product::create([
             'slug' => $request->slug,'description' => $request->description
             ,'price' => $request->price
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::query()->select([
            'slug','description','price'
        ])->where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function searchSlug($slug){
     $product = Product::query()->select([
         'slug','description','price'
         ])->where('slug','like','%'.$slug.'%')->get();

         if (!$product) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }

        return $product;
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
        $product = Product::query()->select([
            'slug','description','price'
        ])->where('id',$id)->get();

        if (!$product) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }

        $product->slug=$request->slug;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::query()->where('id', $id)->delete();
        return $this->index();    }
}
