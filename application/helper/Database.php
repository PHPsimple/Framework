<?php

    class Database
    {
    	public $connected;

        public function __construct()
        {
            $mysqli = new mysqli('127.0.0.1', 'root', 'MacTavish@1995', 'lol');
            $this->connected = $mysqli;
        }
    }