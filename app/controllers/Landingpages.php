<?php

class Landingpages extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $sumText = "Wist je dat 45 + 6 gelijk is aan: " . $this->add(45, 6);
        $data = [
            'title' => "<h1 style='text-align: center;'>Bowlingcenter Brooklyn</h1>",
            'sumtext' => $sumText
         ];
         $this->view('landingpages/index', $data);
        
    }

    public function add($number1, $number2)
    {
       $sum = $number1 + $number2;
       return $sum;
    }
}