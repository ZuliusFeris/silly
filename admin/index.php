<?php
session_start();
require_once('../connection.php');
require_once('../models/role.php');
require_once('../models/grouprole.php');

if (isset($_GET['controller'])) {
  $controller = $_GET['controller'];
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = 'index';
  }
} else {
  $controller = 'pages';
  $action = 'home';
}
if (!isset($_SESSION["member"]) && $controller != "members" && $action != "login") {
  header("Location: index.php?controller=members&action=login");
}
if (isset($_SESSION["member"])) {
  //kiem tra quyen
  $member = $_SESSION["member"];
  $role = Role::getRole($controller, $action);
  if ($role != false) {
    $grouprole = GroupRole::check($member->groupid, $role->id);
    if ($grouprole == false)
      header("Location: index.php?controller=pages&action=error");
  }
}
require_once('routes.php');

?>