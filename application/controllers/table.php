<?php

class Table extends DB
{
	function __construct()
	{
		application::load("application/models/mtable.php");

		
		
		
		parent::__construct();
	}
	function view($name)
	{
		
		list($database,$name) = explode(".", $name,2);
		$table = new MTable($database, $name);
		
		
		echo "h";
	}
	
	function  drop ($name)
	{
				
		list($database,$name) = explode(".", $name,2);
		$table = new MTable($database, $name);
		
		$table->Drop();
	}
}
