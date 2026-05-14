<?php 
include("Global/Global_Func.php");
include("Global/Global_Connection.php");

$link = '';
$system_user_access = array();
$link .= $_SERVER['HTTP_HOST'];
$link .= $_SERVER['REQUEST_URI']; // default  == localhost/FM/
$current_path = $_SERVER['REQUEST_URI']; // == /FM/
$current_path2 = $_SERVER['REQUEST_URI']; // == /FM/
$system_user_access['url'] = $link;
$system_user_access['base_url'] = base_url();

$explode_url = explode ("http://localhost/FM/",$system_user_access['base_url']);
$argv = $explode_url[1]; // ambil buntutnya.
$URLexplode = explode("/",$current_path);
$argv2 = end($URLexplode);

## List & Default ------------------------------------------------------- ##
function listitem($link,$current_path,$system_user_access,$argv,$argv2){
    global $current_path2;
    $ax =  base_url();
    $template = new FM_Template();
    $form = 'formlist.php';
  
    if ($current_path == '/FM/') { // default
        $form = $current_path.'formlist.php';
    }elseif($current_path == '/FM/index.php/list') { // ketika sudah klik
        $form = '/FM/formlist.php';
    }
    
    $data = [
    'title' => 'Halaman Utama',
    'content' => 'Selamat datang di situs kami!',
    'default'=>'localhost/FM/'
    ];
    // Render template
    /*=== $current_path.'formlist.php' = /FM/formlist.php ----- file htmlnya dimana dan di arahin ke situ*/ 
    echo $template->addparse($form, $data);
}


## Abbot ---------------------------------------------------------------- ##
function listabbout($link,$current_path,$system_user_access,$argv,$argv2){
    GLOBAL $DBO;
    $ax =  base_url();
    $template = new FM_Template();
    $form = 'formlist.php';
 
    $exbase = explode('http://localhost',base_url());
    $form = $exbase[1].'abbout.php';
    if($current_path == '/FM/index.php/abbout.php') { // ketika sudah klik
        $form = '/FM/abbout.php';
    }elseif($current_path == '/FM/abbout.php') { // ketika sudah klik
        $form = '/FM/abbout.php';
    }
    $fdata = GetDataBio($DBO);
    while (list($k,$v)=@each($fdata)) {
        $x['tdata'] = $v;
       
    }
    while (list($kk,$vv)=@each($x)) {
        $data = $vv;
        
        $data['ttl'] = $vv['lahir'].", ".$vv['tanggal'];
        $data['title'] = 'Halaman Abbout';
    }
    
    // Render template
    /*=== $current_path.'formlist.php' = /FM/formlist.php ----- file htmlnya dimana dan di arahin ke situ*/ 
    echo $template->addparse($form, $data);
}

## Login -------------------------------------------------------------------- ##
function listlogin($link,$current_path,$system_user_access,$argv,$argv2){
    GLOBAL $DBO;
    $ax =  base_url();
    $template = new FM_Template();
    $form = 'login.php';
 
    $exbase = explode('http://localhost',base_url());
    $form = $exbase[1].'login.php';
    if($current_path == '/FM/index.php/login.php') { // ketika sudah klik
        $form = '/FM/login.php';
    }elseif($current_path == '/FM/login.php') { // ketika sudah klik
        $form = '/FM/login.php';
    }

    $data = [
    'title' => 'Halaman Login',
    'content' => 'Selamat datang di situs kami!',
    'default'=>'localhost/FM/'
    ];
    // Render template
    /*=== $current_path.'formlist.php' = /FM/formlist.php ----- file htmlnya dimana dan di arahin ke situ*/ 
    echo $template->addparse($form, $data);
}

## Dashboard ---------------------------------------------------------------- ##
function listdashboard($link,$current_path,$system_user_access,$argv,$argv2){
    GLOBAL $DBO;
    $exbase = explode('http://localhost',base_url());
    $prop['user'] = $_REQUEST['username'];
    $prop['pass'] = $_REQUEST['password'];
    $var_user = GetDataLogin($DBO,$prop);
    
    if ($var_user != NULL) {
        $ax =  base_url();
        $template = new FM_Template();
        $form = '/FM/Admin/dashboard.php';
        $data = [
        'title' => 'Halaman Dashboard',
        'content' => 'Selamat datang di situs kami!',
        'default'=>'localhost/FM/'
        ];
        // Render template
        /*=== $current_path.'formlist.php' = /FM/formlist.php ----- file htmlnya dimana dan di arahin ke situ*/ 
        echo $template->addparse($form, $data);
    }else {
        $form = base_url().'index.php/login';
        echo '<script type="text/javascript">alert("Akun anda tidak terdaftar...!!!");history.go(-1);</script>';
    }
}
## Upload ---------------------------------------------------------------- ##
function listupload($link,$current_path,$system_user_access,$argv,$argv2){
    GLOBAL $DBO;
    $action = isset($_POST['action_submit']) ? $_POST['action_submit'] : '';
    if ($action == 'submit') {

        
        list($var,$ex) =explode(".",$_FILES["files"]["name"]);
        $var = date("YmdHis");
        $_FILES["files"]["name"] = $var.'.'.$ex;
        $target_dir = base_url().'Assets/img/';
        $target_file = $target_dir . basename($_FILES["files"]["name"]);
        // give a name and direction to the image - i changed the name to test.jpg...
        $uploadfile = $_SERVER['DOCUMENT_ROOT'].'/FM/Assets/img/'.$_FILES["files"]["name"];
        move_uploaded_file($_FILES["files"]["tmp_name"], $uploadfile);
        $tbl = 'fm_document';
        $Data['id'] = date('YmdHis');
        $Data['judul'] = $_POST['judul'];
        $Data['file'] = $_FILES["files"]["name"];
        $Data['tanggal'] = date('Y-m-d');
        $result = __Insert_Data($DBO,$tbl,$Data);
        if ($result) {
            echo '<script type="text/javascript">alert("berhasil terupload...!!!");history.go(-1);</script>';
        }
    }
    $exbase = explode('http://localhost',base_url());
    // $prop['user'] = $_REQUEST['username'];
    // $prop['pass'] = $_REQUEST['password'];
    // $var_user = GetDataLogin($DBO,$prop);
 
    // if ($var_user != NULL) {
        $ax =  base_url();
        $template = new FM_Template();
        $form = '/FM/Admin/form_upload.php';
        $data = [
        'title' => 'Halaman Upload',
        'content' => 'Selamat datang di situs kami!',
        'default'=>'localhost/FM/'
        ];
        // Render template
        /*=== $current_path.'formlist.php' = /FM/formlist.php ----- file htmlnya dimana dan di arahin ke situ*/ 
        echo $template->addparse($form, $data);
    // }else {
    //     $form = base_url().'index.php/login';
    //     echo '<script type="text/javascript">alert("Akun anda tidak terdaftar...!!!");history.go(-1);</script>';
    // }
}
## Edit_Upload ---------------------------------------------------------------- ##
function listeditupload($link,$current_path,$system_user_access,$argv,$argv2,$id){
    GLOBAL $DBO;
    $action = isset($_POST['action_submit']) ? $_POST['action_submit'] : '';
    list($a,$id) =explode("id=",$id);  
    if ($action == 'submit') {
        list($var,$ex) =explode(".",$_FILES["files"]["name"]);
        $var = date("YmdHis");
        $_FILES["files"]["name"] = $var.'.'.$ex;
        $target_dir = base_url().'Assets/img/';
        $target_file = $target_dir . basename($_FILES["files"]["name"]);
        // give a name and direction to the image - i changed the name to test.jpg...
        $uploadfile = $_SERVER['DOCUMENT_ROOT'].'/FM/Assets/img/'.$_FILES["files"]["name"];
        move_uploaded_file($_FILES["files"]["tmp_name"], $uploadfile);
        $tbl = 'fm_document';
        // $Data['id'] = hexdec(uniqid());
        $Data['judul'] = $_POST['judul'];
        $Data['file'] = $_FILES["files"]["name"];
        $Data['tanggal'] = date('Y-m-d');
        $Data['status'] = $_POST['status'];
        // $DBO->debug=1;
        // $result = __Insert_Data($DBO,$tbl,$Data);
        $result = __Update_Data($DBO,$tbl,'id',$id,$Data);
        if ($result) {
            echo '<script type="text/javascript">alert("berhasil terupload...!!!");history.go(-1);</script>';
        }
    }
    if ($argv2 == 'edit_upload') {
        $exbase = explode('http://localhost',base_url());
        list($a,$b) =@explode("&id=",$_SERVER['REQUEST_URI']);
        $prop = $b;
        
        $var_doc = GetDataDocument($DBO,$prop);
        $ax =  base_url();
        $template = new FM_Template();
        $form = '/FM/Admin/form_upload.php';
        while (list($k,$v)=@each($var_doc)) {
            $v['file'] = base_url().'Assets/img/'.$v['file'];
            if ($v['status'] == 1) {
                $v['chck'] = 'checked';
            }else {
                $v['chck'] = '';
            }
            if (isset($v['file'])) {
                $v['gambar_file'] = base_url().'Assets/img/Documents-48x48.png';
            }
            $data = [
            'title' => 'Halaman Upload',
            'content' => 'Selamat datang di situs kami!',
            'default'=>'localhost/FM/',
            'data' => $v
            ];
        }
        
    }else {
            $template = new FM_Template();
            $form = '/FM/Admin/form_upload.php';
            $v = array();
            $v['chck'] = '';
            $v['file'] = '';
            $v['gambar_file'] = '';
            $v['judul'] = '';
            $v['status'] = '';
            $data = [
                'title' => 'Halaman Upload',
                'content' => 'Selamat datang di situs kami!',
                'default'=>'localhost/FM/',
                'data' => $v
                ];
        
    }
        // Render template
        /*=== $current_path.'formlist.php' = /FM/formlist.php ----- file htmlnya dimana dan di arahin ke situ*/ 
        echo $template->addparse($form, $data);
}

function listaddupload($link,$current_path,$system_user_access,$argv,$argv2){
    GLOBAL $DBO;
    $action = isset($_POST['action_submit']) ? $_POST['action_submit'] : '';
    if ($action == 'submit') {
        list($var,$ex) =explode(".",$_FILES["files"]["name"]);
        $var = date("YmdHis");
        $_FILES["files"]["name"] = $var.'.'.$ex;
        $target_dir = base_url().'Assets/img/';
        $target_file = $target_dir . basename($_FILES["files"]["name"]);
        // give a name and direction to the image - i changed the name to test.jpg...
        $uploadfile = $_SERVER['DOCUMENT_ROOT'].'/FM/Assets/img/'.$_FILES["files"]["name"];
        move_uploaded_file($_FILES["files"]["tmp_name"], $uploadfile);
        $tbl = 'fm_document';
        $Data['id'] = hexdec(uniqid());
        $Data['judul'] = $_POST['judul'];
        $Data['file'] = $_FILES["files"]["name"];
        $Data['tanggal'] = date('Y-m-d');
        $Data['status'] = $_POST['status'];
        $result = __Insert_Data($DBO,$tbl,$Data);
        if ($result) {
            echo '<script type="text/javascript">alert("berhasil terupload...!!!");history.go(-1);</script>';
        }
    }
    
    $template = new FM_Template();
    $form = '/FM/Admin/form_upload.php';
    $v = array();
    $v['chck'] = '';
    $v['file'] = '';
    $v['gambar_file'] = '';
    $v['judul'] = '';
    $v['status'] = '';
    $data = [
        'title' => 'Halaman Upload',
        'content' => 'Selamat datang di situs kami!',
        'default'=>'localhost/FM/',
        'data' => $v
        ];
    // Render template
    /*=== $current_path.'formlist.php' = /FM/formlist.php ----- file htmlnya dimana dan di arahin ke situ*/ 
    echo $template->addparse($form, $data);
}

## List Upload ---------------------------------------------------------------- ##
function listlistupload($link,$current_path,$system_user_access,$argv,$argv2){
    GLOBAL $DBO;
    
    $exbase = explode('http://localhost',base_url());
    $var = GetDataDocument2($DBO);
    if (!empty($var)) {
        while (list($k,$v)=@each($var)) {
            $a[$v['id']] = $v;
            $data = [
            'title' => 'Halaman Upload',
            'content' => 'Selamat datang di situs kami!',
            'default'=>'localhost/FM/',
            'var' => $a
            ];
        }
    }else {
         $data = [
            'title' => 'Halaman Upload',
            'content' => 'Selamat datang di situs kami!',
            'default'=>'localhost/FM/'
            ];
    }
        $ax =  base_url();
        $template = new FM_Template();
        $form = '/FM/Admin/formlistupload.php';
      
        // Render template
        /*=== $current_path.'formlist.php' = /FM/formlist.php ----- file htmlnya dimana dan di arahin ke situ*/ 
        echo $template->addparse($form, $data);
}


if (preg_match("/&/",$argv2)) { // ini kalo kondisinya ada id di dalam parameter url nya
    list($url,$id) =explode("&",$argv2);
    $argv2 = $url;
}

if (!empty($argv2)) { // kalo ada 
   switch ($argv2) {
        case 'index.php':
            listitem($link,$current_path,$system_user_access,$argv,$argv2);
        break;
        case 'formlist.php':
            listitem($link,$current_path,$system_user_access,$argv,$argv2);
        break;
        case 'abbout':
            listabbout($link,$current_path,$system_user_access,$argv,$argv2);
        break;
        case 'login':
            listlogin($link,$current_path,$system_user_access,$argv,$argv2);
        break;
        case 'dashboard':
            listdashboard($link,$current_path,$system_user_access,$argv,$argv2);
        break;
        case 'upload':
            listupload($link,$current_path,$system_user_access,$argv,$argv2);
        break;
        case 'edit_upload':
            listeditupload($link,$current_path,$system_user_access,$argv,$argv2,$id);
        break;
        case 'add_upload':
            listaddupload($link,$current_path,$system_user_access,$argv,$argv2);
        break;
        case 'list_upload':
            listlistupload($link,$current_path,$system_user_access,$argv,$argv2);
        break;
        default:
            listitem($link,$current_path,$system_user_access,$argv,$argv2);
        break;
    }   
}else {
   
   listitem($link,$current_path,$system_user_access,$argv,$argv2);
}
?>