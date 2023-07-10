<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function list()
    {
        return Product::with('brand')->get();
    }

    public function listBySearch($keyword)
    {
        return Product::query()->where('name', 'like', '%' . $keyword . '%')->orwhere('price', 'like', '%' . $keyword . '%')->orwhere('description', 'like', '%' . $keyword . '%')->get();
    }

    public function getById($id)
    {
        return Product::with('brand')->find($id);
    }

    public function getByBrandId($brand_id)
    {
        return Product::query()->where('brand_id', $brand_id)->get();
    }
}
