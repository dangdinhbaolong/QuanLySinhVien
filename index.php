<?php 
require 'data/db.php';
require 'lib/template.php';
get_header();
?>
<?php 

$page =!empty($_GET['page'])?$_GET['page']:'home';
$path = "page/{$page}.php";

if(file_exists($path)){
    require $path;
}else{
    
 require "inc/404.php";
}
?>
<?php  
get_footer();
?>