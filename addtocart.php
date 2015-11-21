<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 11/21/2015
 * Time: 6:13 PM
 */
// These lines need to be added to configurator-addtocart script to allow cross domain ajax requests.
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

// Debug Script
foreach ($_POST as $key => $value) {
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $value;
    echo "</td>";
    echo "</tr>";
}