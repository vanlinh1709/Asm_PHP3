<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function loadList() {
        $fillable = ['id','name', 'email', 'avatar', 'role_id'];
        $query = DB::table($this->table)
            ->select($fillable);
        $res = $query->get();
        return $res;
    }
    public function loadListWithPaginate($params=[]) {
        $fillable = ['id','name', 'email', 'avatar', 'role_id'];
        $query = DB::table($this->table)
            ->select($fillable)
             ->paginate(5);
        $res = $query;
        return $res;
    }

    public function loadOne($id) {
        $fillable = ['id','name', 'email', 'avatar', 'role_id'];
        $query = DB::table($this->table)
            ->select($fillable)
            ->where('id', '=', $id);
        $res = $query->first();
        return $res;
    }
    public function saveNew($params) {
        //
        $data = array_merge($params['cols'], [
            'password' => Hash::make($params['cols']['password']),
        ]);
        $res = DB::table($this->table)->insertGetId($data);
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
    public function getIdbyEmail($email) {
        $query = DB::table($this->table)
            ->select('id')
            ->where('email', '=' , $email);
        $res = $query->first();
        return $res;
    }
}
