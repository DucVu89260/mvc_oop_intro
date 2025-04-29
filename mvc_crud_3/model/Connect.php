<?php

class Connect
{
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $database = 'mvc_crud_3';

	private function cnt()
	{
		$connect=mysqli_connect($this->host,$this->user,$this->pass,$this->database);
		mysqli_set_charset($connect,'utf8');

		return $connect;
	}

	public function sql_select($sql)
	{
		$connect = $this ->cnt();
		$result=mysqli_query($connect,$sql);

		mysqli_close($connect);

		return $result;
	}

	public function sql_exe($sql)
	{
		$connect = $this ->cnt();
		mysqli_query($connect,$sql);
		
		mysqli_close($connect);
	}
}