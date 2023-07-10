<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected $CartModel;

    public function __construct()
    {
        $this->CartModel = new Cart();
    }

    public function addToCart()
    {
        $isCartExist = $this->CartModel->getByProductId(Request()->product_id);

        $cart = $isCartExist ?? new Cart;
        $cart->product_id = Request()->product_id;
        $cart->user_id = Auth::user()->id;
        $cart->price = Request()->price;
        $cart->qty = $isCartExist ? $isCartExist->qty + 1 : 1;

        $cart->save();

        return redirect()->to(Request()->redirect)->with('pesan', 'Berhasil ditambahkan.');
    }

    public function buy()
    {
        $isCartExist = $this->CartModel->getByProductId(Request()->product_id);

        $cart = $isCartExist ?? new Cart;
        $cart->product_id = Request()->product_id;
        $cart->user_id = Auth::user()->id;
        $cart->price = Request()->price;
        $cart->qty = $isCartExist ? $isCartExist->qty + 1 : Request()->qty;

        $cart->save();

        return redirect()->to('/cart')->with('pesan', 'Berhasil ditambahkan.');
    }

    public function cart()
    {
        $cart = $this->CartModel->list();
        $totalcart = 0;
        $totalprice = 0;
        $totalcoupon = 0;
        foreach ($cart as $c) {
            $totalcart += $c->qty;
            $totalprice += $c->price * $c->qty;
            if ($c->price > 50000) {
                $totalcoupon += $c->qty;
            }
        }
        if ($totalprice >= 100000) {
            $totalcoupon += intval($totalprice / 100000);
        }
        $data = [
            'cart' => $cart,
            'totalcart' => $totalcart,
            'totalprice' => $totalprice,
            'totalcoupon' => $totalcoupon
        ];
        return view('cart', $data);
    }

    public function updateCart()
    {
        $cart = $this->CartModel->getById(Request()->cart_id);
        $cart->qty = Request()->qty;

        $cart->save();

        return redirect()->to('/cart')->with('pesan', 'Berhasil diperbarui.');
    }

    public function deleteCart($cart_id)
    {
        $cart = $this->CartModel->getById($cart_id);

        $cart->delete();
    }
}
