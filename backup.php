<?php include("include/session.php");?>
<?php include("include/function.php");?>
<?php include("include/dbconnection.php");?>
<?php

if($_SESSION["sid"] == ""){
		redirect_to("login.php");
	}

backup_tables('localhost','root','','db_sms');

/* backup the db OR just a table */
$host='localhost';
$user='root';
$pass='';
$name='db_sms';
function backup_tables($host,$user,$pass,$name,$tables = '*')
{

$link = mysql_connect($host,$user,$pass);
mysql_select_db($name,$link);

//get all of the tables
if($tables == '*')
{
$tables = array();
$result = mysql_query('SHOW TABLES');
while($row = mysql_fetch_row($result))
{
$tables[] = $row[0];
}
}
else
{
$tables = is_array($tables) ? $tables : explode(',',$tables);
}

$return = "";
foreach($tables as $table)
{
$result = mysql_query("SELECT * FROM $table");
$num_fields = mysql_num_fields($result);

$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
$return.= "\n\n".$row2[1].";\n\n";

for ($i = 0; $i < $num_fields; $i++)
{
while($row = mysql_fetch_row($result))
{
$return.= 'INSERT INTO '.$table.' VALUES(';
for($j=0; $j<$num_fields; $j++)
{
$row[$j] = addslashes($row[$j]);
if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
if ($j<($num_fields-1)) { $return.= ','; }
}
$return.= ");\n";
}
}
$return.="\n\n\n";
}

//save file
$data=date("F j, Y, g-i a");
$handle = fopen('backup/'.'db-backup-'.$data.'-'.$name.'.sql','w+');
$filepath = 'backup/'.'db-backup-'.$data.'-'.$name.'.sql';
fwrite($handle,$return);
fclose($handle);

$sid = $_SESSION["sid"];
if(takebackup($sid,$filepath)){
	echo "<script type='text/javascript'>alert('Data Successfully Backup!');</script>";
   			    echo "<script>document.location='backuplist.php'</script>";
}else{
echo "<script type='text/javascript'>alert('Data Successfully Backup But File Not Saved.!');</script>";
   			    echo "<script>document.location='backuplist.php'</script>";
}
}
//mysql_query("INSERT INTO `studentpermanentrecord`.`database` (`date`) VALUES (now())") or die(mysql_error());


?>
