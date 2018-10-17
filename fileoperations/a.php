<?php if(isset($_POST['remove'])){
	unlink("files/".$_POST['checks']);
}?>


<?php
	if(isset($_POST['search'])){
$myfile = fopen("files/".$_POST['checks'], "r");
$txt=$_POST['content'];
$i=0;
$valid=false;
$buffer="dmd";
while (($buffer = fgets($myfile)) !== false) {
	if (strpos($buffer, $txt) !== false) {
        $valid = TRUE;
        break; 
    }
    $i = $i+1;



}
if($valid){
echo "@line number".$i."@index\n";
	echo strpos($buffer,$txt);
}
else
{
	echo "not found";
}
}
?>



<?php
	if(isset($_POST['append'])){
$myfile = fopen("files/".$_POST['checks'], "a");
fwrite($myfile,$_POST['content']);
fclose($myfile);
}
?>
<?php
if(isset($_POST['edit'])){
$myfile = fopen("files/".$_POST['checks'], "w");
fwrite($myfile,$_POST['content']);
fclose($myfile);
echo "<script>alert('File Successfully Edited')</script>";
}
?>
<?php  header("Location: assi41.php");?>