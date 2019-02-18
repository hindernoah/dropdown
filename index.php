<?php
session_start();
if(isset($_SESSION['id_user_control_center'])){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Livgo - Live Systems</title>

	<!-- ...  Charset ... -->
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

	<!-- ... CSS include ... -->
	<link type="text/css" href="../layout/stylesheets/container.css" rel="stylesheet"/>	
	<link type="text/css" href="../layout/stylesheets/style.css" rel="stylesheet"/>
    <link type="text/css" href="../layout/stylesheets/navigation.css" rel="stylesheet"/>  
    
        		
</head>

<body>
        

			<div class="container_header"><img src="../layout/images/header_control_center.png" width="737" height="142" alt=""/></div>
		
		
			<div class="container_navigation">
			  <?php include('navigation.php');?>
</div>

<div class="container_body">
    
    <?php 
    if(isset($_GET['page'])){
    $page = $_GET['page'];
    }else{
    $page = 'overview.php';
    }
    include $page; 
    ?>


</div>



	<div class="container_footer">
		<?php 
		 // Footer mit aktuellem Jahr 
		 $timestamp_copyright = time();
		 $year_copyright = date("Y",$timestamp_copyright);
		 echo '<font id="copyright">© Livgo ' . $year_copyright .' 
         <br>Alle Rechte vorbehalten<br>
         <a href="#">Impressum</a></font>';
		 ?>

	</div>
    
    
    <br>
    <br>


</body>

</html>

<?php
}else{
header('Location: ../index.php');
}
?>