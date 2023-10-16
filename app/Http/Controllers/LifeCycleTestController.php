<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function showServiceContainerTest() {
        // メソッドのなか
        app()->bind('lifeCycleTest', function() {
            return 'ライフサイクル出力テスト';
        });
        
        $test = app()->make('lifeCycleTest');
        dd($test, app());
        
        dd(app());
    }
}
