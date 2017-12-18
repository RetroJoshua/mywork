<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$id = $_POST['id'];
$pwd = $_POST['pwd'];
echo $id,"<br>";
echo $pwd,"<br>";
}else{
echo "Error occured";
}

$xml=simplexml_load_file("users.xml") or die("Error: Cannot create object");
/*echo $xml->Users[0]->UserId . "<br>";
echo $xml->Users[0]->UserPwd . "<br>";
echo $xml->Users[1]->UserId . "<br>"; 
echo $xml->Users[1]->UserPwd . "<br>" ;
*/ 

foreach($xml->children() as $users) {
	if($id==$users->UserId & $pwd==$users->UserPwd){
      echo "authentication successful";
		exit;
	}
} 

?>