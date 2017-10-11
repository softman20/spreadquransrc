<style>
b br {display:none;}
</style>
<?php
function getTranslation($soura,$eya,$lang){
	
	include('config.php');
	$cnx=mysql_connect($dbconfig['host'],$dbconfig['user'],$dbconfig['pass']);
	mysql_select_db($dbconfig['db'], $cnx) or die ('La base de données ne peut pas être sélectionnée');	
	$sql="SELECT content FROM ".$lang." where soura=".$soura." and number=".$eya;
	//echo $sql;
	$reponse = mysql_query($sql);
	$donnees=mysql_fetch_array($reponse);
	$tafsir=trim($donnees['content']);
	$tafisr=addslashes($tafsir);
	//$tafsir=str_replace('.','.<br><br>',$tafsir);
//	$tafsir=str_replace('{',' <b style="color:darkRed"><i style="font-size:0">ـ</i>{',$tafsir);
	//$tafsir=str_replace('}','}<i style="font-size:0">ـ</i></b> ',$tafsir);
	//$tafsir=str_replace('[',' <i style="color:green">[',$tafsir);
	//$tafsir=str_replace(']',']</i> ',$tafsir);

    mysql_close();	
	return $tafsir;
}


$soura=$_POST['soura'];
$eya=$_POST['eya'];
$lang=$_POST['lang'];
$hidden=$_POST['hidden'];

$translation= getTranslation($soura,$eya,$lang);
$translationHid="";
if($translation=="" || $translation=="لا يوجد"){
 $translation='<span style="text-align: center; font-size: 20px; color: green;">غير متوفر حالياً</span>';
 }else $translationHid =$translation;
?>
<?= $translation ?>
<input type="hidden" id="hidTranslation" value="<?= $translationHid ?>" />



