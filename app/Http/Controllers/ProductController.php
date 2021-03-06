<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;
class ProductController extends Controller
{
    public function index() {
        $data = Product::all();
        return view('product', ['product' => $data]);
    }

    public function view($id) {
        $data = Product::find($id);
        return view('detaild', ['product' => $data]);
    }

    function addToCart(Request $request) {
        if ($request->session()->has('user'))
        {
            $cart = new Cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/product/'.$request->product_id);
        }
        else {
            return redirect('/login');
        }
    }

    static function cartItem() {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList() {
        $userId = Session::get('user')['id'];
        $product = DB::table('cart')
                    ->join('products','cart.product_id','=','products.id')
                    ->where('cart.user_id', $userId)
                    ->select('products.*')
                    ->get();

        return view('cartList', ['product' => $product]);
    }
}
