<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("localhost", "root", "0123");

//selecionando o banco de dados 
$db = mysqli_select_db($cx, "MEDIA");

//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM NOTAS") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);

//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  echo "Nome:".$aux["NOME"]."<br />"; 
  echo "Nota:".$aux["NOTA"]."<br />"; 
}

?>