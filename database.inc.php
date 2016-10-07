<?php
require_once '/var/www/projekt/phpPasswordHashingLib/passwordLib.php';
/*
 * Class Database: interface to the movie database from PHP.
 *
 * You must:
 *
 * 1) Change the function userExists so the SQL query is appropriate for your tables.
 * 2) Write more functions.
 *
 */
class Database {
	private $host;
	private $userName;
	private $password;
	private $database;
	private $conn;

	/**
	 * Constructs a database object for the specified user.
	 */
	public function __construct($host, $userName, $password, $database) {
		$this->host = $host;
		$this->userName = $userName;
		$this->password = $password;
		$this->database = $database;
	}

	/**
	 * Opens a connection to the database, using the earlier specified user
	 * name and password.
	 *
	 * @return true if the connection succeeded, false if the connection
	 * couldn't be opened or the supplied user name and password were not
	 * recognized.
	 */
	public function openConnection() {
		try {
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->database",
					$this->userName,  $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			$error = "Connection error: " . $e->getMessage();
			print $error . "<p>";
			unset($this->conn);
			return false;
		}
		return true;
	}

	/**
	 * Closes the connection to the database.
	 */
	public function closeConnection() {
		$this->conn = null;
		unset($this->conn);
	}

	/**
	 * Checks if the connection to the database has been established.
	 *
	 * @return true if the connection has been established
	 */
	public function isConnected() {
		return isset($this->conn);
	}

	/**
	 * Execute a database query (select).
	 *
	 * @param $query The query string (SQL), with ? placeholders for parameters
	 * @param $param Array with parameters
	 * @return The result set
	 */
	private function executeQuery($query, $param = null) {
		try {
			$stmt = $this->conn->prepare($query);
			$stmt->execute($param);
			$result = $stmt->fetchAll();
		} catch (PDOException $e) {
			$error = "*** Internal error: " . $e->getMessage() . "<p>" . $query;
			die($error);
		}

		return $result;
	}

	/**
	 * Execute a database update (insert/delete/update).
	 *
	 * @param $query The query string (SQL), with ? placeholders for parameters
	 * @param $param Array with parameters
	 * @return The number of affected rows
	 */
	private function executeUpdate($query, $param = null) {
		try {
			$stmt = $this->conn->prepare($query);
			$stmt->execute($param);
			$result = $stmt->rowCount();
		} catch (PDOException $e) {
			$error = "*** Internal error: " . $e->getMessage() . "<p>" . $query;
			die($error);
		}
		return $result;
	}

	private function execute($query, $param = null){
		try{
		$stmt = $this->conn->prepare($query);
		$stmt->execute($param);
		} catch (PDOException $e){
			$error = "*** Internal error: " . $e->getMessage() . "<p>" . $query;
			die($error);
		}
	}

	public function correctUser($username, $password) {
		$sql = "select password from users where username = ?";
		$result = $this->executeQuery($sql, array($username));
		$hash = "hash";
		foreach($result as $row){
			$hash =$row['password'];
		}
		if(password_verify($password, $hash)){
			return true;
		}
			return false;
	}

	public function resetCounter($username){
		$sql = "update users set counter=0 where username = ?";
		$result = $this->executeUpdate($sql, array($username));

	}

	public function blockedPassword($username){
		$sql = "select counter from users where username = ? and counter>2";
		$result = $this->executeQuery($sql, array($username));
		return count($result) !=0;
	}

	public function increaseCount($username){
		$sql = "update users set counter=counter+1 where username = ?";
		$result = $this->executeUpdate($sql, array($username));

	}

	public function createUser($username, $password, $address){
		$sql1 = "select username from users where username = ?";
		$result = $this->executeQuery($sql1, array($username));
		if(count($result) == 0){
			$sql = "insert into users (username, password, address) values (?, ?, ?)";

			$count= $this->executeUpdate($sql, array($username, $password, $address));

			return $count != 0;
		}
		return false;
	}
	
	public function createComment($username, $comment){
		// insert username in username slot in the database table
		// insert comment in comment slot in the database table
	}
	
		public function addComment($name, $comment){
			$sql = "insert into comments (name, comment) values (?, ?)";
			$result = $this->executeUpdate($sql, array($name, $comment));
	}

	public function getAllCommentIDs(){
		$sql = "select commentID from comments ORDER BY commentID DESC";
		$result = $this->executeQuery($sql, null);

		$commentIDs = array();
		foreach($result as $row){
				$comment=$row['commentID'];
				$commentIDs[$comment]=$row['commentID'];
		}
		return $commentIDs;
	}

	public function getComment($commentID){
		$sql = "select comment from comments where commentID=?";
		$result = $this->executeQuery($sql, array($commentID));
		$comment = "";
		foreach($result as $row){
			$comment=$row['comment'];
		}
		return $comment;
	}
	public function getCommentName($commentID){
		$sql = "select name from comments where commentID=?";
		$result = $this->executeQuery($sql, array($commentID));
		$commentName = "";
		foreach($result as $row){
			$commentName=$row['name'];
		}
		return $commentName;
	}
	public function putCookie($login_cookie, $username){
		//$sql = "update users set login_cookie=? where username=?";
		  //$result = $this->executeUpdate($sql, array($login_cookie, $username));
		$sql = "update users set login_cookie=? where username = ?";
		$result = $this->executeUpdate($sql, array($login_cookie, $username));
	}	

	public function compareCookie($login_cookie, $username){
		$sql = "select login_cookie from users where username=?";
		$result = $this->executeQuery($sql, array($username));
        $log_cook = "";
		foreach($result as $row){
			$log_cook=$row['login_cookie'];
        }
		if($log_cook == $login_cookie){ //TODO if both are NULL
			return true;
		} else {
			return false;
		}
	}
}
?>
