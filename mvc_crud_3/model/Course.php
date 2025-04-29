<?php

require_once 'model/Connect.php';

class Course
{	
	private int $id;
	private string $name;
	private string $major;

	public function get_id()
	{
		return $this -> id;
	}
	public function set_id($var)
	{
		$this-> id = $var;
	}

	public function get_name()
	{
		return $this -> name;
	}
	public function set_name($var)
	{
		$this-> name = $var;
	}

	public function get_major()
	{
		return $this -> major;
	}
	public function set_major($var)
	{
		$this-> major = $var;
	}

	public function select_all()
	{
		$sql="select * from courses";
		$result = (new Connect())->sql_select($sql);

		$array = [];
		foreach ($result as $row) {
			$object = new self();
			$object -> set_id($row['id']);
			$object -> set_name($row['name']);
			$object -> set_major($row['major']);

			$array[] = $object;
		}

		return $array;
	}

	public function insert($name,$major)
	{
		$object = new self();
		$object -> set_name($name);
		$object -> set_major($major);

		$sql="insert into courses(name,major)
		values('{$object->get_name()}','{$object->get_major()}')";

		(new Connect())->sql_exe($sql);
	}

	public function find($id)
	{
		$sql="select * from courses where id='$id'";
		$result = (new Connect())->sql_select($sql);
		$row=mysqli_fetch_array($result);
		
		$object = new self();
		$object -> set_id($row['id']);
		$object -> set_name($row['name']);
		$object -> set_major($row['major']);

		return $object;
	}

	public function update($id,$name,$major)
	{
		$object = new self();
		$object -> set_id($id);
		$object -> set_name($name);
		$object -> set_major($major);

		$sql="update courses
		set
		name = '{$object -> name}',
		major = '{$object -> major}'
		where
		id = '{$object -> id}'";

		(new Connect())->sql_exe($sql);
	}

	public function destroy($id)
	{
		$object = new self();
		$object -> set_id($id);
		
		$sql="delete from courses
		where
		id='{$object->id}'";

		(new Connect())->sql_exe($sql);
	}
}