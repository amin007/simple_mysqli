<?php

class Sesat extends Kawal 
{

	function __construct() 
	{
		parent::__construct();
	}
	
	function index() 
	{
		// pergi papar kandungan
		$this->lihat->mesej = 'Halaman ini tidak wujud';
		$this->lihat->baca('sesat/index');
	}

}
