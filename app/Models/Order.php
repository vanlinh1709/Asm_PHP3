<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';

    public function saveNew($params) {
        $res = DB::table($this->table)->insertGetId($params['cols']);
        return $res;
    }
    public function loadListWithPaginate($params=[]) {
        $list = DB::table($this->table)
            ->select()
            ->paginate(5);;
        return $list;
    }
    public function loadOne($id, $params = []) {
        $query = DB::table($this->table)
            ->select()
            ->where('id','=',$id);
        $obj = $query->first();
        return $obj;
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
