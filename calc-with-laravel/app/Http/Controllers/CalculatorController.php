<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index() {
        return view('layout.header');
    }

    public function sum($a, $b) {
        $rez = $a + $b;
        return view('calculator.rez', ['a' => $a, 'sign' => '+', 'b' => $b, 'rez' => $rez]);
    }

    public function subtract($a, $b) {
        $rez = $a - $b;
        return view('calculator.rez', ['a' => $a, 'sign' => '-', 'b' => $b, 'rez' => $rez]);
    }

    public function multiply($a, $b) {
        $rez = $a * $b;
        return view('calculator.rez', ['a' => $a, 'sign' => 'x', 'b' => $b, 'rez' => $rez]);
    }

    public function divide($a, $b) {
        $rez = $a / $b;
        return view('calculator.rez', ['a' => $a, 'sign' => '/', 'b' => $b, 'rez' => $rez]);
    }
}
