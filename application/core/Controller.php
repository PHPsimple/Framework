<?php

    class Controller
    {
        public function model($model)
        {
        	if(file_exists('application/models/' . $model . '.php'))
        	{
				require_once 'application/models/' . $model . '.php';
				return new $model;
        	}else{
        		exit("Unknown model");
        	}
        }
        
        public function view($view, $data = [], $helpers = [])
        {
        	if(file_exists('application/views/' . $view .'.php'))
        	{
                if(!empty($helpers))
                {
                    foreach ($helpers as $helper) {
                        $$helper = $this->helper($helper);
                    }
                }
				require_once 'application/views/' . $view .'.php';
        	}else
            {
        		exit("Unknown view");
        	}
        }
        
        public function helper($helper)
        {
            if(file_exists('application/helper/' . $helper .'.php'))
            {
            	require_once 'application/helper/' . $helper .'.php';
            	return new $helper;
            }else
            {
                exit("Unknown helper");
            }
        } 
    }