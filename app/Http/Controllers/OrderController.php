<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\DetailOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    protected $CartModel;
    protected $OrderModel;
    protected $DetailOrderModel;
    
    public function __construct()
    {
        $this->CartModel = new Cart();
        $this->OrderModel = new Order();
        $this->DetailOrderModel = new DetailOrder();
    }

    public function checkout()
    {
        $code = 'ORD' . strtoupper(substr(str_shuffle(md5(Auth::user()->email . time())), 0, 9));

        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->code_order = $code;
        $order->destination = Request()->destination;

        $order->save();

        $cart = $this->CartModel->list();
        foreach ($cart as $c) {
            $detail_order = new DetailOrder;
            $detail_order->order_id = $order->id;
            $detail_order->product_id = $c->product_id;
            $detail_order->price = $c->price;
            $detail_order->qty = $c->qty;
            $detail_order->total = $c->price * $c->qty;

            $detail_order->save();
        }

        $this->CartModel->delete();

        return redirect()->to('/history')->with('pesan', 'Berhasil dipesan.');
    }

    public function history()
    {
        $data['history'] = [];
        $orders = $this->OrderModel->list();
        foreach ($orders as $order) {
            $details = $this->DetailOrderModel->list($order->id);

            // status = if diff date now and date order > 3 hours then 'Closed' else 'Open'
            $status = 'Open';
            $date_order = strtotime($order->created_at);
            $date_now = strtotime(date('Y-m-d H:i:s'));
            $diff = $date_now - $date_order;
            if ($diff > 10800) { // 10800 = 3 hours
                $status = 'Closed';
            }
            $data['history'][$order->code_order] = [
                'id' => $order->id,
                'date_order' => $order->created_at,
                'destination' => $order->destination,
                'status' => $status,
            ];

            $data['history'][$order->code_order]['detail'] = [];
            foreach ($details as $detail) {
                array_push(
                    $data['history'][$order->code_order]['detail'],
                    [
                        'name' => $detail->product->name,
                        'price' => $detail->price,
                        'qty' => $detail->qty,
                        'total' => $detail->total,
                    ]
                );
            }
        }

        $data['cart'] = $this->CartModel->list();
        $data['total'] = $this->OrderModel->count();

        return view('history', $data);
    }
}
