<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function list()
    {
        return Cart::with('product')->where('user_id', Auth::user()->id)->get();
    }

    public function getByProductId($product_id)
    {
        return Cart::query()->where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
    }

    public function getById($id)
    {
        return Cart::query()->find($id);
    }

    public function delete()
    {
        Cart::query()->where('user_id', Auth::user()->id)->delete();
    }
}
