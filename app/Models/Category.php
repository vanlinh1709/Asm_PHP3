<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['id', 'cate_name'];
    public function loadList() {
        $query = DB::table($this->table)
            ->select($this->fillable)
            ->get();
        $list = $query;
        return $list;
    }
}
