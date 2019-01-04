<?php
$conn = new mysqli("localhost","root","senha","banco");

if($conn->connect_error){
    echo "ERROR: " . $conn->connect_error;
}

$result = $conn->query("select * from tb_usuarios order by deslogin");
$data = array();
//enquanto existir um dado ele retorna o dado para row
//caso queiramos dar o var dump sem o indice usamos o mysqli_assoc como
//  paramentro da fetch array ou ussamos a funcao fecth_assoc()

while($row = $result->fetch_assoc()){
    array_push($data,$row);
    // var_dump($row);
}
echo json_encode($data);
