<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addCart($id){

        $user = Auth::user();
        $existingCartItem = Cart::where('user_id', $user->id)
                                 ->where('product_id', $id)
                                 ->first();
        if ($existingCartItem) {
            return response()->json(['message' => 'Proizvod je već dodat u korpu!'], 400);
        }
        $cart = Cart::create([
            'product_id' => $id,
            'user_id' => $user->id
        ]);

        return response()->json(['message' => 'Uspješno dodano u korpu!']);
    }

    public function getCountInCart() {
        $user = Auth::user();
        $numberOfItems = Cart::where('user_id', $user->id)->count();

        return response()->json(['numberOfItems' => $numberOfItems]);
    }
}
