<?php
    session_start();

	class Database {
		private $host;
		private $port;
		private $db;
		private $db_usr;
		private $db_pwd;
		private $db_enc;

		private $conn;

		public function __construct() {
			$conf = parse_ini_file("Database.ini");
			$this->host = $conf["host"];
			$this->port = $conf["port"];
			$this->db = $conf["db"];
			$this->db_usr = $conf["db_usr"];
			$this->db_pwd = $conf["db_pwd"];
			$this->db_enc = $conf["db_enc"];
		}

		private function getDb() {
			 $this->conn = new PDO(
				"mysql:host=$this->host;
				port=$this->port;
				dbname=$this->db;
				charset=$this->db_enc",
				$this->db_usr,
				$this->db_pwd,
			 );
			 return $this->conn;
		}
		public function set($qry,$parm = array()){
			$rslt = $this->getDb()->prepare($qry); 
			return $rslt->execute((array)$parm);
		}
		public function getAll($qry,$parm = array()){
			$rslt = $this->getDb()->prepare($qry); 
			$rslt->execute((array)$parm);
			return $rslt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function InsertData($qry, $parm = array()) {
			$rslt = $this->getDb()->prepare($qry);
			$rslt->execute((array)$parm);
			}

		public function getRow($qry, $parm = array()) {
			$rslt = $this->getDb()->prepare($qry);
			$rslt->execute((array)$parm);
			return $rslt->fetch(PDO::FETCH_ASSOC);
			}
}
?>