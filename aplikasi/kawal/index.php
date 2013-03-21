<?php

class Index extends Kawal 
{

	function __construct() 
	{
		parent::__construct();
	}
	
	function index() 
	{

		// Set pemboleubah utama
		$this->lihat->Tajuk_Muka_Surat='SEMAK';
		//$this->lihat->gambar=gambar_latarbelakang('../../');
		
		// pergi papar kandungan
		$this->lihat->baca('index/index');
	}
	
}
