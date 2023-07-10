<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory;

    public function list()
    {
        return Order::query()->where('user_id', Auth::user()->id)->get();
    }

    public function count()
    {
        return Order::query()->where('user_id', Auth::user()->id)->get()->count();
    }
}
