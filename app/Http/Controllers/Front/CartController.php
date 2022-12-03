<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function index()
    {
        $this->v['_title'] = 'Trang giỏ hàng';
        //
        $modelCategory = new Category();
        $this->v['listCate'] = $modelCategory->loadList();
        return view('front.cart', $this->v);
    }

    public function add($id)
    {
//        dd($id);
        $modelProduct = new Product();
        $product = $modelProduct->LoadOne($id);
        //
        $data = [
            'id' => $product->id,
            'name' => $product->product_name,
            'qty' => 1,
            'price' => $product->promo_price,
            'weight' => 0,
            'options' => ['image' =>  $product->product_image]
        ];
//        dd($data);
        Cart::add($data);
    }
    public function update(Request $request, $rowId)
    {
//        dd(1);
        Cart::update($rowId, $request->input('update_qty'));

        return redirect()->back();
    }
    public function delete($rowId)
    {
        Cart::remove($rowId);

        return redirect()->back();
    }
}
