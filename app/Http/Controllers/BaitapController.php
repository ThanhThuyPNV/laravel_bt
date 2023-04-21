<?php
// Nơi lưu trữ
namespace App\Http\Controllers;
//Khai báo thư viện
use Illuminate\Http\Request;

class BaitapController extends Controller
{
    //bai tap
    // public function hello(){
    //     // echo '<h1>Chào mừng các bạn đến với chanel của chúng tôi!!!</h1>';
    //     // $title = "Đây là biến";
    //     // return view('test')->with('title', $title); // with là lưu 1 biến trả về
    //     // lưu biến và truyền biến qua view

    //     // tạo mảng
    //     $name = "Thanh Thuý";
    //     $age = "21";
    //     $class = "PNV24";
    //     $arr = ['name' => $name,'age' => $age, 'class' => $class];
    //     return view('test')->with('student', $arr);
    // }
    public function sum(){
        return $a + $b;
    }
    public function tinhtong(Request $request){
        $sum = $request->soA + $request->soB;
        return view('sum', compact('sum'));
    }
}
