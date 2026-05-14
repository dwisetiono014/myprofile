<?php
include("Global/Global_Connection.php");
class FM_Template {
    private $documentRoot;
   
    public function __construct() {
        $this->documentRoot = $_SERVER['DOCUMENT_ROOT'];
    }
    public function addparse($templateFile, $data = []) {
        // Ekstrak data ke dalam variabel
        extract($data);
        // Menggunakan output buffering untuk menangkap output
        ob_start();
        // include $this->documentRoot . "/templates/" . $templateFile;
        include $this->documentRoot . $templateFile;
        return ob_get_clean();
    }
}

function fetch_array($res, $type=MYSQLI_BOTH, $nr=NULL) { //$nr=NULL //MYSQLI_ASSOC, MYSQLI_NUM, and MYSQLI_BOTH
	return @mysqli_fetch_array($res,$type);
}

function fetch_assoc($res) {
	return @mysqli_fetch_assoc($res);
}

function fetch_row($res, $nr='') {
	return @mysqli_fetch_row($res);
}

function fetch_object($res, $nr='') {
	return @mysqli_fetch_object($res);
}

function free_result($res) {
	if($res == 1) {
		return TRUE;
	} else {
		return @mysqli_free_result($res);
	}
}

function each(&$ary) {
	if(!is_array($ary)) return false;
	$key = key($ary);
	if ($key === null) return false;
	$val = current($ary);
	next($ary);
	return array($key,$val); //-- [1 => $val, 'value' => $val, 0 => $key, 'key' => $key];
}

function __Insert_Data($DBO,$tbl,$row) {
    $a = array();
    $b = array();

    while(list($k,$v) = @each($row)) {
        $a[] = $k;
        $b[] = addslashes($v);
    }
    $fld = join(",",$a);
    $val = "'".join("','",$b)."'";
    $sSQL = "INSERT INTO $tbl ($fld) VALUES ($val)";
    $res = $DBO->query($sSQL);
    if($res) {
        return 1;//$DBO->free_result($res);
    }else{
        return NULL;
    }
}

function URL() {
    // Menentukan protokol (http atau https)
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    
    // Menggabungkan semua bagian untuk membentuk URL lengkap
    $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    return $fullUrl;
}

function Sys($url) {
    // Memecah URL menjadi bagian-bagian
    $parts = explode('/', parse_url($url, PHP_URL_PATH));
    
    // Mengembalikan bagian sistem, misalnya bagian kedua setelah domain
    // echo removeExtension($parts[2]);
    return isset($parts[2]) ? $parts[2] : null;
}
function Subsys($url) {
    // Memecah URL menjadi bagian-bagian
    $parts = explode('&subsys=', parse_url($url, PHP_URL_PATH));
    
    // Mengembalikan bagian sub-sistem, misalnya bagian kedua setelah domain
    return isset($parts[2]) ? $parts[2] : null;
}

function removeExtension($url) {
    return pathinfo($url, PATHINFO_FILENAME);
}


function __Update_Data($DBO,$tbl,$key,$id,$row) {
    if(strlen($key) && strlen($id)) {
        @reset($row);
        $a = array();
        while(list($k,$v) = @each($row)) {
            $a[] = $k . "='" . addslashes($v) . "'";
        }
        $fld = join(",",$a);
        $sSQL = "UPDATE $tbl SET $fld WHERE ".$key."='".$id."'";
        $DBO->debug=1;
        $res = $DBO->query($sSQL);
        if($res) {
            return 1;//$DBO->free_result($res);
        }
    }
    return NULL;
}

function wvd($t) {
  echo "<pre>";
  print_r($t);
  print_r("\n");
  echo "</pre>";

}

if (!function_exists('base_url')) {
    function base_url($path = '') {
        // Menentukan protokol (http atau https)
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
        // Mendapatkan nama host
        $host = $_SERVER['HTTP_HOST'];
        // Mendapatkan direktori aplikasi
        $directory = dirname($_SERVER['SCRIPT_NAME']);
        // Menggabungkan semua bagian untuk membentuk base URL
        $base_url = $protocol . $host . $directory . '/';
        // Mengembalikan base URL dengan path tambahan jika ada
        return rtrim($base_url, '/') . '/' . ltrim($path, '/');
    }
}

function GetDataLogin($koneksi,$prop){ 
    $a = array();
    $user = $prop['user'];
    $pass = md5($prop['pass']);
    $sql = "SELECT * FROM fm_user where role = '2' and username = '$user' and password = '$pass'";
    $res = $koneksi->query($sql);
    if($res) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $a[$rows['id']] = $rows;
        }
    }
    return $a;
}

function GetDataDocument($koneksi,$prop){ 
    $a = array();
    $sql = "SELECT * FROM fm_document where id = '$prop'";
    $res = $koneksi->query($sql);
    if($res) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $a[$rows['id']] = $rows;
        }
    }
    return $a;
}
function GetDataDocument2($koneksi){ 
    $a = array();
    $sql = "SELECT * FROM fm_document where 1=1";
    $res = $koneksi->query($sql);
    if($res) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $a[$rows['id']] = $rows;
        }
    }
    return $a;
}
function GetDataBio($koneksi){ 
    $a = array();
    $sql = "SELECT * FROM fm_biodata where 1=1";
    $res = $koneksi->query($sql);
    if($res) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $a[$rows['id']] = $rows;
        }
    }
    return $a;
}
function getmenu($koneksi){ 
		$a = array();
    $sql = "SELECT * FROM daftar_menu";
		$res = $koneksi->query($sql);
		if($res) {
			while ($rows = mysqli_fetch_assoc($res)) {
				$a[$rows['id']] = $rows;
			}
		}
		return $a;
}
function __getdata($DBO,$id){
	$a = array();
    $sSQL = "SELECT * FROM cat_pesanan where 1=1 and pid = '$id'";
	$res = $DBO->query($sSQL);
	if($res) {
		while($rows = mysqli_fetch_assoc($res)) {
			$a[$rows['pesanan']] = $rows;
		}
	}
	return $a;
}



function __getIDuser(){
  GLOBAL $koneksi,$id;
  $data = array();
  $sSQL = "select * from cat_user where username = '$id'";
  $data = mysqli_query ($koneksi, " select * from cat_user where username = '$id'");
		while($rows = mysqli_fetch_assoc($data)) {
			$a = $rows;
		}
	return $a;
}




?>
