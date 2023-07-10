<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    protected $ProductModel;
    protected $CartModel;
    protected $BrandModel;

    public function __construct()
    {
        $this->ProductModel = new Product();
        $this->CartModel = new Cart();
        $this->BrandModel = new Brand();
    }

    public function index()
    {
        $keyword = Request()->keyword;
        if ($keyword) {
            $products = $this->ProductModel->listBySearch($keyword);
        } else {
            $products = $this->ProductModel->list();
        }

        $data = [
            'products' => $products,
            'cart' => Auth::check() ? $this->CartModel->list() : "",
            'brands' => $this->BrandModel->all(),
            'qtyResult' => $products->count(),
        ];

        return view('home', $data);
    }

    public function detail($id)
    {
        $product = $this->ProductModel->getById($id);
        if (!$product) {
            return redirect()->to('/');
        }
        $data = [
            'product' => $product,
            'cart' => Auth::check() ? $this->CartModel->list() : "",
        ];

        return view('detail', $data);
    }

    public function brand($brand_id)
    {
        $brand = $this->BrandModel->getById($brand_id);
        if (!$brand) {
            return redirect()->to('/');
        }
        $products = $this->ProductModel->getByBrandId($brand_id);
        $data = [
            'brands' => $this->BrandModel->all(),
            'products' => $products,
            'brand' => $brand,
            'cart' => Auth::check() ? $this->CartModel->list() : "",
        ];

        return view('brand', $data);
    }
}
