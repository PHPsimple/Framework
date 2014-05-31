<?php

    class Header
    {
        public $type = 'text';
        public $image_source = 'https://signup.leagueoflegends.com/theme/signup_theme/img/signup_logo2.png';
        public $image_width = '300';
        public $heading_text = 'LoL Player';
        
        public function header()
        {
            if($this->type == 'image')
            {
                return '<img src="'.$this->image_source.'" width="'.$this->image_width.'" />';
            }elseif($this->type == 'text')
            {
                return '<h1>' . $this->heading_text . '</h1>';
            }else
            {
                exit("Unknown header type");
            }
        }
    }