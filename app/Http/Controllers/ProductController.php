<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function dodajProizvod(Request $request){
        $data = $request->validate([
            'user_id' => '',
            'category_id' => '',
            'gender_id' => '',
            'name' => '',
            'description' => '',
            'size' => '',
            'price' => '',
            'image' => ''
        ]);

        $data['user_id'] = auth()->id();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }

        DB::table('products')->insert($data);
        return response()->json(['message' => 'Uspjesno dodano'], 201);
    }

    public function dohvatiProizvode(){
        $product = Product::with('user','category','gender')->get();
        return response()->json(['product' => $product]);
    }

    public function izbrisiProizvod($id){
        $product = Product::find($id);
        $product->delete();
        return response()->json(['message' => 'Uspjesno ste izbrisali proizvod!']);
    }
}
