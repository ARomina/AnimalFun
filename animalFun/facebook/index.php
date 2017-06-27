<?php
/**
 * Created by PhpStorm.
 * User: fdaranno
 * Date: 29/5/17
 * Time: 20:59
 */
session_start();
require_once  __DIR__ . '/helper/facebookLogin/FacebookLogin.php';

$facebookLogin = new FacebookLogin();

echo '<a href="' . $facebookLogin->getLoginUrl() . '">Ingresar con Facebook!</a>';