<?php 

require_once("config.php");

#$sql = new Sql();
#$usuarios = $sql->select("SELECT * FROM tb_usuarios");
#echo json_encode($usuarios);

//Carrega um usuario especifico pelo ID
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega uma lista com todos os usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);


//carrega o usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","!@#$");
echo $usuario;

?>