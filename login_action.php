<?php
session_start();
$action=@$_REQUEST['action'];
if($action=='login') $_SESSION['authenticated']=true;
else if($action=='logout') $_SESSION['authenticated']=false;
