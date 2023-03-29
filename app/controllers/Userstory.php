<?php

class Userstory extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {

         $this->view('userstory/index');
        
    }


}