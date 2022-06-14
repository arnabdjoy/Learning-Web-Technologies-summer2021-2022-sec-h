<?php
session_start();
$name=_$REQUEST'username'];
if($name!=null){
	if(strlen($name)>=2)
	{
		if(ctype_alpha($name) || strpos($name,".")==true || strpos ($name, "-")==true)
		{
			echo "successful";
		}
	}
	else { 
		echo "invalid request";
	}
}
else{

}

?>
