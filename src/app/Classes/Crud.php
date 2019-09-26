<?php
require_once "Conexao.php";
class Crud extends Conexao {

	public function __construct() {
		parent::__construct();
		parent::conectar();
	}

	public function store($tabela, $params, $values) {
		$sql = "INSERT INTO $tabela VALUES($params)";
		if (parent::executarSql($sql, $values)) {
			echo "<script>alert('Cadastrado com sucesso!');window.location.href='../../../addproduto.php'</script>";
		} else {
			echo "<script>alert('Falha ao cadastrar, contate o administrador!');window.location.href='../../../addproduto.php'</script>";
		}
	}
	public function index($column, $tabela, $restriction) {
		$sql = "SELECT DISTINCT $column FROM $tabela $restriction";
		return parent::executarFetchAll($sql, $restriction);
	}
	public function show($column, $tabela, $restriction) {
		$sql = "SELECT DISTINCT $column FROM $tabela $restriction";
		return parent::executarFetchAll($sql, $restriction);
	}
	public function update($tabela, $setters, $values) {
		$sql = "UPDATE $tabela SET $setters";
		if (parent::executarSql($sql, $values)) {
			echo "<script>alert('Update realizado com sucesso!!');window.location.href='http://localhost/ezy3dphp'</script>";
		} else {
			echo "<script>alert('Falha ao realizar update, contate o administrador!');window.location.href='http://localhost/ezy3dphp'</script>";
		}

	}
	public function excluir($tabela, $restriction, $values) {
		$sql = "DELETE FROM $tabela $restriction";
		if (parent::executarSql($sql, $values)) {
			echo "Exclusão efetuada com sucesso!";
		} else {
			echo "Falha ao realizar exclusão!";
		}
	}
}
?>