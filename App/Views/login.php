
<?php 
error_reporting(E_ALL); 
include "header.php";
?>
<h1><?php echo $title?></h1>


<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="bsuser" placehoder="Username"/>
    <input type="password" name="bspass" placeholder="Password">
    <input type="submit" value="login">
</form>

<?php 
include "footer.php";
?>