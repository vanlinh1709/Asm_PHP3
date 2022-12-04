<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';

    public function saveNew($params) {
        $res = DB::table($this->table)->insertGetId($params['cols']);
        return $res;
    }
}
