<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = "Nguyen Van Anh Duc";
        $age = 20;
        $school = "Đại học CNTT";

        return view('welcome', compact('name', 'age', 'school'));
    }
    public function multiplication($n)
    {
    if (!is_numeric($n)) {
        return view('bang-cuu-chuong', ['error' => 'Vui lòng nhập số hợp lệ']);
    }

    return view('bang-cuu-chuong', compact('n'));
    }
}