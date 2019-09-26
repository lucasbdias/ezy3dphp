<?php
require_once "Crud.php";
class Admin extends Crud {
	private $tabela;

	public function __construct() {
		parent::__construct();
		$this->tabela = "admin";
	}

	public function index($column, $restriction) {
		return parent::index($column, $this->tabela, $restriction);
    }
    
    public function criarSession($param){
        session_start();
        $_SESSION['god'] = $param;
        header("Location: ../../../index.php");
    }
}
?>