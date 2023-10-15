<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponent1() {
        $message = 'メッセージ';
        return view('tests.component-test1', compact('message')); //viewフォルダ名.ファイル名
    }
    public function showComponent2() {
        return view('tests.component-test2'); //viewフォルダ名.ファイル名
    }
}
