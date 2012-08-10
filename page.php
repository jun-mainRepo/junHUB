<?php

  $id = $_POST['selecionar'];
if ($id != null) {
For($i=0;$i < count($id);$i++)
{
mysql_query("DELETE from table WHERE cod_id = '$id[$i]'");
}

?>