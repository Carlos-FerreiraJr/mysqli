<?php


//conectando com mysqli 
$conn = new mysqli("hostname","usuario","senha","dbname");

//verificando erro

if($conn->connect_error){
    echo "error: " . $conn->connect_error;
}

// inserindo valores no database mysql

$stmt = $conn->prepare("insert into <tabela>(<coluna>) values(?,?)");
$stmt->bind_param("ii",$valor1,$valor2);
$valor1 = 1234;
$valor2 = 5678;

$stmt->execute();


