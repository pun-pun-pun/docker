<?php
echo date('His');
echo "\n";
require_once("../php/import.php");
echo "ccc\n";
?>
aaa

<?php
require_once('../php/Statics.php');
Statics::putEnvironment();

echo "hogehoge[";
echo getenv('hogehoge');
echo "]\n";
echo "environment[";
echo getenv('environment');
echo "]\n";
?>
aaa
