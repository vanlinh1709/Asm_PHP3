<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['product.id', 'product.category_id', 'product.product_name'
        , 'product.product_price', 'product.promo_price', 'product.product_image', 'product.product_des',
        'product.category_id', 'category.cate_name', 'product.number', 'product.status', 'product.created_at'
        ];
    public function loadListWithPaginate($params=[]) {
        $list = DB::table($this->table)
            ->select($this->fillable)
            ->join('category', 'product.category_id', '=', 'category.id')
            ->paginate(5);;
        return $list;
    }
    public function loadList($params=[]) {
        $list = DB::table($this->table)
                ->select()
                ->join('category', 'category.id', '=', 'product.category_id')
                ->get();
        return $list;
    }
    public function loadListWithCate_id($cate_id) {
        $list = DB::table($this->table)
            ->select($this->fillable)
            ->join('category', 'category.id', '=', 'product.category_id')
            ->where('category.id', '=', $cate_id)
            ->get();
        return $list;
    }
    public function LoadOne($id, $params = []) {
        $query = DB::table($this->table)
            ->select()
            ->where('id','=',$id);
        $obj = $query->first();
        return $obj;
    }

    //
    public function saveNew($params) {
        $res = DB::table($this->table)->insertGetId($params['cols']);
        return $res;
    }
    public function del($id) {
        $query = DB::table($this->table)
            ->delete($id);
        $res = $query;
        return $res;
    }
    public function saveUpdate($params) {
        if (empty($params['cols']['id'])) {
            Session::push('errors', 'Khong xac dinh ban ghi can cap nhap');
        }
//        dd($params['cols']);
        $dataUpdate = [];
        foreach ($params['cols'] as $col => $value) {
            if($col == 'id') continue;
            $dataUpdate[$col] = (strlen($value) == 0) ? null:$value;
        }
        $res = DB::table($this->table)
            ->where('id', '=', $params['cols']['id'])
            ->update($dataUpdate);
        return $res;
    }
}
