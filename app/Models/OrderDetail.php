<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_product';

    public function saveNew($params) {
        $res = DB::table($this->table)->insertGetId($params['cols']);
        return $res;
    }
    public function loadList($id) {
        $res = DB::table($this->table)
            ->select()
            ->where('order_id', '=', $id)
            ->get();
        return $res;
}
}
