<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($text){ /// ・・・①
        $item = [
            'content' => 'パラメータを渡す',
            'param' => $text  /// ・・・②
        ];
        return view('index', $item);
    }
}