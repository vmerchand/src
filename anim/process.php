<html>
<body>
 
 <table>
<?php
echo "AQUI";
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("unodc", $con);



	if ($_POST['SexoMasc']=="on"){
	$_POST['sexo']="masculino";
	}
	if ($_POST['SexoFem']=="on"){
		$_POST['sexo']="femenino";
	}

 
/*foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }*/
 
$sql="INSERT INTO principal (apellidos, nombre, sexo)
VALUES
('$_POST[apellidos]','$_POST[nombre]', '$_POST[sexo]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</body>
</table>
</html>