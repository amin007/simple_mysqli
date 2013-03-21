<?php

function dpt_url()
{
	$url = isset($_GET['url']) ? $_GET['url'] : null;
	$url = rtrim($url, '/');
	$url = filter_var($url, FILTER_SANITIZE_URL);
	$url = explode('/', $url);

	return $url;
}

function dpt_senarai($namajadual)
{
	if ($namajadual=='produk')
		$jadual = array('a_someplace',
		'b_someplace',
		'c_someplace');
	elseif ($namajadual=='johor')
		$jadual = array('johor');
	
	
	return $jadual;
}

function pecah_post($_POST)
{
	$papar['pilih'] = isset($_POST['pilih']) ? $_POST['pilih'] : null;
	$papar['cari'] = isset($_POST['cari']) ? $_POST['cari'] : null;
	$papar['fix'] = isset($_POST['fix']) ? $_POST['fix'] : null;
	$papar['atau'] = isset($_POST['atau']) ? $_POST['atau'] : null;
	
	$kira['pilih'] = count($papar['pilih']);
	$kira['cari'] = count($papar['cari']);
	$kira['fix'] = count($papar['fix']);
	$kira['atau'] = count($papar['atau']);
	
	return $kira;
	//echo '<pre>'; print_r($kira) . '</pre>';
}


function kira($kiraan)
{
	// pecahan kepada ratus
	return number_format($kiraan,0,'.',',');
} 

function kira2($dulu,$kini)
{
	// buat bandingan dan pecahan kepada ratus
	return @number_format((($kini-$dulu)/$dulu)*100,0,'.',',');
	//@$kiraan=(($kini-$dulu)/$dulu)*100;
}

function huruf($jenis , $papar) 
{
	/*
	$_POST['mdt_rangka']['respon']=strtoupper($_POST['mdt_rangka']['respon']);
	$_POST['mdt_rangka']['fe']=strtolower($_POST['mdt_rangka']['fe']);
	$_POST['mdt_rangka']['responden']=mb_convert_case($_POST['mdt_rangka']['responden'], MB_CASE_TITLE);
	*/
	
	switch ($jenis) 
	{// mula - pilih $jenis
	case 'BESAR':
		$papar = strtoupper($papar);
		break;
	case 'kecil':
		$papar = strtolower($papar);
		break;
	case 'Depan':
		$papar = ucfrist($papar);
		break;
	case 'Besar_Depan':
		$papar = mb_convert_case($papar, MB_CASE_TITLE);
		break;
	}// tamat - pilih $jenis
	
	return $papar;

}

function bersih($papar) 
{
	# lepas lari aksara khas dalam SQL
	//$papar = mysql_real_escape_string($papar);
	# buang ruang kosong (atau aksara lain) dari mula & akhir 
	$papar = trim($papar);
	
	return $papar;
}


function gambar_latarbelakang($lokasi)
{
	$tmpt = $lokasi . 'bg/bg/';
		//$_SERVER['SERVER_NAME'] . '/private_html/bg/bg/';
		//'../../bg/bg/' ;
		
	foreach(scandir($tmpt) as $gambar) 
	{
		if (substr($gambar,-3) == 'jpg') 
			$papar[]=$gambar;
	}

	$today = rand(0, count($papar)-1); 
	return $papar[$today];
}

function cari_imej($ssm,$strDir)
{
	//require_once ('public/skrip/listfiles2/dir_functions.php');

	if ( isset($ssm) && empty($ssm) )
	{
		$cariImej = null;
	}
	else
	{
		// You can modify this in case you need a different extension
		$strExt = "tif";

		// This is the full match pattern based upon your selections above
		$pattern = "*" . $ssm . "*." . $strExt;
		$cariImej = GetMatchingFiles(GetContents($strDir),$pattern);
	}
	
	//print_r($cariImej);
	return $cariImej;
}
// lisfile2 - mula
function GetMatchingFiles($files, $search) 
{
	// Split to name and filetype
	if(strpos($search,".")) 
	{
		$baseexp=substr($search,0,strpos($search,"."));
		$typeexp=substr($search,strpos($search,".")+1,strlen($search));
	} 
	else 
	{ 
		$baseexp=$search;
		$typeexp="";
	} 
		
	// Escape all regexp Characters 
	$baseexp=preg_quote($baseexp); 
	$typeexp=preg_quote($typeexp); 
		
	// Allow ? and *
	$baseexp=str_replace(array("\*","\?"), array(".*","."), $baseexp);
	$typeexp=str_replace(array("\*","\?"), array(".*","."), $typeexp);
		   
	// Search for Matches
	$i=0;
	$matches=null; // $matches adalah array()
	foreach($files as $file) 
	{
		$filename=basename($file);
			  
		if(strpos($filename,".")) 
		{
			$base=substr($filename,0,strpos($filename,"."));
			$type=substr($filename,strpos($filename,".")+1,strlen($filename));
		} 
		else 
		{ 
			$base=$filename;
			$type="";
		}

		if(preg_match("/^".$baseexp."$/i",$base) && preg_match("/^".$typeexp."$/i",$type))  
		{
			$matches[$i]=$file;
			$i++;
		}
	}
	
	return $matches;
	//return $matches;
}

// Returns all Files contained in given dir, including subdirs
function GetContents($dir,$files=array()) 
{
	if(!($res=opendir($dir))) exit("$dir doesn't exist!");
		while(($file=readdir($res))==TRUE) 
		if($file!="." && $file!="..")
			if(is_dir("$dir/$file")) $files=GetContents("$dir/$file",$files);
				else array_push($files,"$dir/$file");
		 
	closedir($res);
	return $files;
}
// listfile2 - tamat
