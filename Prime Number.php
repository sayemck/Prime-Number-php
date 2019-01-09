<?php
if(isset($_GET['submit'])){
	function IsPrime($n){
		for($x=2; $x<$n; $x++){
			if($n%$x==0){
			  return 0;	
			}
		}
		return 1;
	 }
	 $a = IsPrime($_GET['num']);
	 if($a==0)
	 echo "This is not a prime Number:...... "."\n";
	 else
	 echo "This is a prime Number:...... "."\n";
}
?>
<form action="" method="get">
     Enter Number: <input type="text" name="num"/>
                   <input type="submit" name="submit" value="Prime"/>
</form>