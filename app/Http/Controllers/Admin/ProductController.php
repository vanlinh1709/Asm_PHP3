<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UserRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    private $v;
    public function __construct() {
        $this->v = [];
    }
    public function index(Request $request) {
        $this->v['_title'] = 'Trang quản lý sản phẩm';
        $modelProduct = new Product();
        $this->v['extParams'] = $request->all();
        $list = $modelProduct->loadListWithPaginate($this->v['extParams']);
        //
//        dd($list);
        $this->v['list'] = $list;
        return view('admin.product.index', $this->v);
    }
    public function add(ProductRequest $request) {
        $this->v['_title'] = 'Trang thêm sản phẩm';
        $modelCate = new Category();
        $listCate = $modelCate->loadList();
        $this->v['listCate'] = $listCate;
        //post
        if($request->isMethod('post')) {
            //chuan bi data
            $params = [];
            $params['cols'] = $request->post();
            unset($params['cols']['_token']);
            //data file
            if ($request->hasFile('product_image') && $request->file('product_image')->isValid())
            {
                $params['cols']['product_image'] = $this->uploadFile($request->file('product_image'));
            }
//            dd($params['cols']);
            //dua data vao database
            $modelProduct = new Product();
            $modelProduct->saveNew($params);
            return redirect()->route('route_BackEnd_Product_index');
        }//end root-if
        return view('admin.product.add', $this->v);
    }
    public function update($id, ProductRequest $request) {
        $this->v['_title'] = 'Trang cập sản phẩm';
        $modelCate = new Category();
        $listCate = $modelCate->loadList();
        $this->v['listCate'] = $listCate;
//        dd($user);
        if ($request->isMethod('post')) {
            $method_route = 'route_BackEnd_Product_update';
            $params = [];
            $params['cols'] = $request->post();
            $params['cols']['id'] = $id;
            //anh
            if ($request->hasFile('product') && $request->file('product')->isValid())
            {
                $params['cols']['product'] = $this->uploadFile($request->file('product'));
            }
            unset($params['cols']['_token']);
            $modelProduct = new Product();

            $res = $modelProduct->saveUpdate($params);
            if($res == null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Cập nhập thành công sản phẩm');
                return redirect()->route('route_BackEnd_Product_index');
            } else {
                Session::flash('error', 'Loi them moi  sản phẩm');
            }
        }//end root-if
        $modelProduct= new Product();
        $item = $modelProduct->loadOne($id);
        $this->v['item'] = $item;
        return view('admin.product.update', $this->v);
    }
    public function delete($id) {
        $modelProduct = new Product();
        $modelProduct->del($id);
        return redirect()->back();
    }
    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('product',$fileName,'public');
    }
}
