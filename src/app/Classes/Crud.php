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
			echo "<script>alert('Cadastrado efetuado com sucesso!');window.history.back()</script>";
		} else {
			echo "<script>alert('Falha ao realizar cadastro, contate o administrador!');window.history.back()'</script>";
		}
	}
	public function index($tabela, $column, $restriction) {
		$sql = "SELECT DISTINCT $column FROM $tabela $restriction";
		return parent::executarFetchAll($sql, null);
	}
	public function show($tabela, $column, $restriction, $values) {
		$sql = "SELECT DISTINCT $column FROM $tabela $restriction";
		return parent::executarFetchAll($sql, $values);
	}
	public function update($tabela, $setters, $values) {
		$sql = "UPDATE $tabela SET $setters";
		if (parent::executarSql($sql, $values)) {
			echo "<script>alert('Update efetuado com sucesso!');window.history.back()</script>";
		} else {
			echo "<script>alert('Falha ao realizar update, contate o administrador!');window.history.back()'</script>";
		}

	}
	public function excluir($tabela, $restriction, $values) {
		$sql = "DELETE FROM $tabela $restriction";
		if (parent::executarSql($sql, $values)) {
			echo "<script>alert('Exclusão efetuada com sucesso!');window.location.href='http://lucronaweb.com/produtos.php'</script>";
			echo "<script>alert('Exclusão efetuada com sucesso!');window.location.href='http://lucronaweb.com/produtos.php'</script>";
		} else {
			echo "<script>alert('Falha ao realizar exclusão, contate o administrador!');window.history.back()'</script>";
		}
	}
}
?>