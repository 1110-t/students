<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    private $student;
    // モデルの呼び出し
    public function __construct(){
        $this->student = new Student();
    }

    // 保存する
    public function store(StudentRequest $request){
        // 保存
        $this->student->store($request);
        // 入力画面を返す
        return view('input');
    }
}
