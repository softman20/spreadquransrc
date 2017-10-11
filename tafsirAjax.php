<style>
b br {display:none;}
</style>
<?php
function getTafsir($soura,$eya,$imam){
	
	include('config.php');
	$cnx=mysql_connect($dbconfig['host'],$dbconfig['user'],$dbconfig['pass']);
	mysql_select_db($dbconfig['db'], $cnx) or die ('La base de données ne peut pas être sélectionnée');	
	$sql="SELECT content FROM ".$imam." where soura=".$soura." and number=".$eya;
	//echo $sql;
	$reponse = mysql_query($sql);
	$donnees=mysql_fetch_array($reponse);
	$tafsir=trim($donnees['content']);
	$tafsir=str_replace('.','.<br><br>',$tafsir);
	$tafsir=str_replace('{',' <b style="color:darkRed"><i style="font-size:0">ـ</i>{',$tafsir);
	$tafsir=str_replace('}','}<i style="font-size:0">ـ</i></b> ',$tafsir);
	$tafsir=str_replace('[',' <i style="color:green"><i style="font-size:0">ـ</i>[',$tafsir);
	$tafsir=str_replace(']',']<i style="font-size:0">ـ</i></i> ',$tafsir);

    mysql_close();	
	return $tafsir;
}


$soura=$_POST['soura'];
$eya=$_POST['eya'];
$imam=$_POST['imam'];
$hidden=$_POST['hidden'];

$tafsir= getTafsir($soura,$eya,$imam);
$tafsirHid="";
if($tafsir=="" || $tafsir=="لا يوجد"){
 $tafsir='<span style="text-align: center; font-size: 20px; color: green;">غير متوفر حالياً</span>';
 }else $tafsirHid =$tafsir;
?>
<?= $tafsir ?>
<input type='hidden' id='hidTafsir' value='<?= $tafsirHid ?>' />



