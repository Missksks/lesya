
<?php

$out="";
for($i=0;$i<=10;$i++){
	
	$out.="<tr>\n";
	for($j=0;$j<=10;$j++){
		
		$styles = "";
		
		if($i==$j){
			$styles = "background: #5bc75b;color:yellow;";	
		}


		$result= $i*$j;

		if($i==0){
			$result = $j*1;
			$styles = "background: #476df9;color:red;";
		}
		elseif($j==0){
			$result=$i*1;
			$styles = "background: #476df9;color:red;";
		}

		if($result==0){
			$result = '';
			$styles = "background: #476df9;color:red;";
		}

		$out.="<td width='30'  style='".$styles."''>".$result."</td>\n";

		unset($styles);

	}
	$out.="</tr>\n";
	

}
require "maket.tpl";
?>
