<?php

	class Form
	{
		public function __construct(){}
		
		public function form_start($action, $method, $enctype)
		{
		    $form = '<form action="'.$action.'" method="'.$method.'" ';
		    $form .= 'enctype="'.$enctype.'" ';
		    $form .= '>';
		    
		    return $form;
		}
		
		public function form_end()
		{
		    $form = '</form>';
		    
		    return $form;
		}

		public function input($type, $name, $class = '', $id = '', $required = '')
		{
		    $input = '<input type="'.$type.'" ';
		    $input .= 'name="'.$name.'" ';
		    if($class != ''){$input .= 'class="'.$class.'" ';}
		    if($id != ''){$input .= 'id="'.$id.'" ';}
		    if($required == 1){$input .= 'required ';}
		    $input .= '/>';
		    
		    return $input;
		}
	}