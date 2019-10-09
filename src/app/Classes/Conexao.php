<?php
class Conexao {
	private $usuario;
	private $senha;
	private $bd;
	private $servidor;
	private $conexao;

	public function __construct() {
		$this->usuario = "gabzendine";
		$this->senha = "senha";
		$this->bd = "dbezy3d";
		$this->servidor = "localhost";
	}
	
public function conectar() {
		$this->conexao = new PDO(
			"mysql:host=$this->servidor;dbname=$this->bd",
			$this->usuario,
			$this->senha,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	}

	public function executarSql($sql, $valores) {
		$comando = $this->conexao->prepare($sql);
		foreach ($valores as $indice => &$valor) {
			$comando->bindParam($indice, $valor);
		}
		return $comando->execute();
	}

	public function executarFetchAll($sql, $valores) {
		$comando = $this->conexao->prepare($sql);
		if ($valores != null) {
			foreach ($valores as $indice => &$valor) {
				$comando->bindParam($indice, $valor);
			}
		}
		$comando->execute();
		return $comando->fetchAll();
	}
}
?>