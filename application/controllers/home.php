<?php

    class Home extends Controller
    {
        public function index()
        {
            $header = $this->model('Header');
            $header = $header->header();
            
        	$this->view('head', ['header' => $header]);
        	$this->view('menu', [], ['Database']);
        	$this->view('home/body');
        	$this->view('footer');
        }
        
        public function test(){}
        
    }