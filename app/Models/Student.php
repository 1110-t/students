<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // ブラックリスト
    protected $guarded = ['id', 'created_at', 'updated_at'];
    // 保存する
    public function store($request){
        $this->fill($request->all())->save();
    }
}
