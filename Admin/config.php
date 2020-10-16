<?php


/**
 * Template File Doc Comment
 * 
 * PHP version 7
 * 
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/license/MIT MIT License
 * @link     https://localhost/ 
 */

$siteurl = "http://localhost/php%20task/Php%20My%20sql/code/";
$sitename ="PHP project";

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "admin";
// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        // Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
} 

?>
