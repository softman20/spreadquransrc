<?php
$souraNbr=$_POST['souraNbr'];
$souraName=$_POST['souraName'];
$reader=$_POST['reader'];
$readerName=$_POST['readerName'];

if($reader=="muaiqli") {
?>
<fb:mp3 width="200px" src="http://quran.sarkosa.com/media/Maher-Almuaiqli/<?= $souraNbr ?>.mp3" title="سورة <?= $souraName ?>" artist="ماهر المعيقلي" album="القرآن الكريم" />
<?php } else { ?>
<fb:mp3 width="200px" src="http://prayers.jfntechnologie.com/audio/surah/<?= $reader ?>/<?= $souraNbr ?>.mp3" title="سورة <?= $souraName ?>" artist="<?= $readerName ?>" album="القرآن الكريم" />

<?php } ?>
