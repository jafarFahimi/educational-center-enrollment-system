<?php
// since there is only php, we don't need to close the php tag
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();

if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'save_settings'){
	$save = $crud->save_settings();
	if($save)
		echo $save;
}
if($action == 'save_enroll'){
	$save = $crud->save_enroll();
	if($save)
		echo $save;
}
if($action == 'save_class_section'){
	$save = $crud->save_class_section();
	if($save)
		echo $save;
}
if($action == 'save_teacher'){
	$save = $crud->save_teacher();
	if($save)
		echo $save;
}
if($action == 'save_student'){
	$save = $crud->save_student();
	if($save)
		echo $save;
}
if($action == 'save_school_year'){
	$save = $crud->save_school_year();
	if($save)
		echo $save;
}

if($action == 'load_teacher'){
	$list = $crud->load_teacher();
	if($list)
		echo $list;
}
if($action == 'switch_year'){
	$switch = $crud->switch_year();
	if($switch)
		echo $switch;
}
if($action == 'load_student'){
	$list = $crud->load_student();
	if($list)
		echo $list;
}
if($action == 'load_class_section'){
	$list = $crud->load_class_section();
	if($list)
		echo $list;
}
if($action == 'load_school_year'){
	$list = $crud->load_school_year();
	if($list)
		echo $list;
}

if($action == 'remove_class_section'){
	$remove = $crud->remove_class_section();
	if($remove)
		echo $remove;
}
if($action == 'remove_teacher'){
	$remove = $crud->remove_teacher();
	if($remove)
		echo $remove;
}
if($action == 'remove_enroll'){
	$remove = $crud->remove_enroll();
	if($remove)
		echo $remove;
}
if($action == 'remove_school_year'){
	$remove = $crud->remove_school_year();
	if($remove)
		echo $remove;
}
if($action == 'publish_post'){
	$published = $crud->publish_post();
	if($published)
		echo $published;
}
if($action == 'remove_post'){
	$remove = $crud->remove_post();
	if($remove)
		echo $remove;
}
if($action == 'save_post'){
	$save = $crud->save_post();
	if($save)
		echo $save;
}