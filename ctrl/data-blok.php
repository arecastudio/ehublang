<?php
require_once('Connection.php');
$connection=new Connection();
$con=$connection->con;


if(isset($_GET['gif']) && $_GET['gif']!=''){
	switch($_GET['gif']){
		case 'tabel':
			//
			$sql="SELECT kode_blok,ket_blok,kode_cabang,kode_wilayah FROM blok WHERE 1 ORDER BY kode_blok ASC;";
			$i=0;
			$rs=$con->query($sql);
			if($rs){
				while($row=$rs->fetch_row()){
				$i++;
echo"
<tr>
	<td class=\"tengah\">$i</td>
	<td class=\"tengah\">$row[0]</td>
	<td>$row[1]</td>
	<td class=\"tengah\">$row[2]</td>
	<td class=\"tengah\">$row[3]</td>
	<td class=\"tengah\"><a href=\"#\"><img src=\"static/icon/sampah.png\" class=\"icon-sm\"/></a></td>
	<td class=\"tengah\"><a href=\"#\"><img src=\"static/icon/pensil.png\" class=\"icon-sm\"/></a></td>
</tr>
";
				}
			}
			break;
		default:
	}
}
