<?php

class Ruangtamu extends Kawal 
{

	function __construct() 
	{
		parent::__construct();
		
	}
	
	function index() 
	{	
		// pergi papar kandungan
		$this->lihat->baca('ruangtamu/index');
	}
	
	function logout()
	{
		Sesi::destroy();
		header('location: ' . URL);
		exit;
	}
	
}
