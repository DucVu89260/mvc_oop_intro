<?php

require 'controller/CourseController.php';
	
$action = $_GET['action'] ?? 'index';

switch ($action) {
	case 'index':
		(new CourseController())->index();
		break;
	
	case 'create':
		(new CourseController())->create();
		break;

	case 'store':
		(new CourseController())->store();
		break;

	case 'edit':
		(new CourseController())->edit();
		break;
	case 'update':
		(new CourseController())->update();
		break;
	case 'delete':
		(new CourseController())->delete();
		break;

	default:
		echo 'Action failed';
		break;
}