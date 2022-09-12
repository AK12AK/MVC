<?php

session_start();
// $_SESSION["SUser_name"] = "Admin";
// $_SESSION["Spassword"] = "Admin";

  define('usrname','Admin');
  define('usrpassword','Admin');
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', 'password');
  define('DB_NAME', 'employee');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/mvc/');
  // Site Name
  define('SITENAME', 'Employee Manageent System');