<?php

$conn = new mysqli("localhost","root","meugola12#=","dbphp7");

if($conn->connect_error){
    echo "erro " .  $conn->connect_error;
}


$stmt = $conn->prepare("insert into tb_usuarios(deslogin,dessenha) values(?,?)");
$stmt->bind_param("ss",$value1,$value2);
$value1 = "beatriz";
$value2 = "ela1212#";
$stmt->execute();

$teste =$conn->query("select * from tb_usuarios");
$data =array();

while($row = $teste->fetch_assoc()){
        array_push($data,$row);
}
    
echo json_encode($data);
// $teste = $conn->prepare("delete from tb_usuarios where idusuario = (?)");
// $teste->bind_param("i",$user);
// $user = 2;
