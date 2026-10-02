<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_francisco_zeth');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>