<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
}
