

<?php
$link = mysql_connect('localhost','x14331851','');
if ($link){
    die('Not Connected : ' . mysql_error()); 
}
    
$db_selected = mysql_select_db('nciblog', $link);
if ($db_selected) {
    die ('Can\'t use nciblog : ' . msql_error());
}
?>
