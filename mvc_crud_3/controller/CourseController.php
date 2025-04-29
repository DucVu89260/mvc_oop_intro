<?php

class CourseController
{
	public function index()
	{
		require 'model/Course.php';
		$array = (new Course())-> select_all();

		require 'view/course/index.php';
	}

	public function create()
	{
		require 'view/course/create.php';
	}

	public function store()
	{	
		$name=$_POST['name'];
		$major=$_POST['major'];
		require 'model/Course.php';
		(new Course())->insert($name,$major);
	}

	public function edit()
	{	
		$id=$_GET['id'];

		require 'model/Course.php';
		$each = (new Course())->find($id);
		require 'view/course/edit.php';
	}

	public function update()
	{	
		$id=$_POST['id'];
		$name=$_POST['name'];
		$major=$_POST['major'];

		require 'model/Course.php';
		(new Course())->update($id,$name,$major);
	}

	public function delete()
	{	
		$id=$_GET['id'];

		require 'model/Course.php';
		(new Course())->destroy($id);
	}
}