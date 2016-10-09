<?php
class Home{ 
	private $pdo;
	private $smarty;
	public function __construct(){
		session_start();
		$this->pdo=Mysql::createMysql();
		$this->smarty=new Smarty();
		$this->smarty->template_dir ="/smarty/templates";
		$this->smarty->compile_dir ="/smarty/templates_c";
		$this->smarty->cache_dir ="/smarty/cache";
		$this->smarty->left_delimiter = "<{";
		$this->smarty->right_delimiter = "}>";
	}
	public function loadHome() {			
		$goods=$this->pdo->exec("select * from goods");
		$this->smarty->assign("goods",$goods);
		$this->smarty->display("home.html");
		$_SESSION["gid"]=array();
	}
	public function addList() {
		$gid = $_GET["gid"];
		$_SESSION["gid"][]=$gid;
		echo count( $_SESSION["gid"] );
	}
}
