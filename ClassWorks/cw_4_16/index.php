<?php
require 'classes.php';

$uform = new form('uname');
echo $uform->open('POST','other.php');
echo $uform->nl();
echo $uform->input('text','','uname');
echo $uform->nl();
echo $uform->input('number','','age');
echo $uform->nl();
echo $uform->input('password','','psw');
echo $uform->nl();
echo $uform->submit('Pirmyn');
echo $uform->close();

?>