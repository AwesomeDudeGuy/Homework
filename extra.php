<html>
<body>




<?php 
$n= $_GET["Skaicius"];
$arr=array($n);
$num = 1;
$k=0;

echo $n."\n";
while ($n!=1){
if($n%2==0){
   $n=$n/2; 
}
else{
    $n=$n*3+1;
}
echo $n ."\n";
$arr[++$k]=$n;
++$num;
}
echo "<br> Iš viso buvo $num skaičiai <br>";

echo (max($arr))." buvo didžiausias" ;
?>

</body>
</html>