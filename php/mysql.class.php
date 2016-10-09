<?php
class Mysql{
	private static $obj=null;
	private $pdo;
	private function __construct(){
		$dsn = "mysql:dbname=shopping;host=localhost";
		$this->pdo = new PDO($dsn, "root", "");
		$this->exec("SET NAMES utf8");
	}
	
	public static function createMysql(){
		if(!self::$obj){
			self::$obj=new Mysql();
		}
		return self::$obj;
	}
	
	public function exec($sql,$para=array()){
		$sta=$this->pdo->prepare($sql);
		$res=$sta->execute($para);
		
		$arr=array();
		if(substr(strtolower(trim($sql)),0,6)=="select" ){
			while($row=$sta->fetch(PDO::FETCH_ASSOC)){
				$arr[]=$row;
			}
			return $arr;
		}else {
			return $res;
		}
	}
}