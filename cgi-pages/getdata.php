<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$data = file_get_contents("http://jkula/cgi-pages/contactme.php");
error_log(json_decode($data));