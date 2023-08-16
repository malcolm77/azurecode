<?php echo "Hello World"; 

$myFile = "https://wordsstorageaccount.blob.core.windows.net/words/words.txt?sp=r&st=2023-08-16T04:11:14Z&se=2024-08-16T12:11:14Z&spr=https&sv=2022-11-02&sr=b&sig=aGpaCu%2BOruwSG%2FsR44USI56glX%2BlK26KdiBiIdJB%2B2s%3D";
$lines = file($myFile);//file in to an array
echo "Todays word is: $lines[1]; //line 2

?>
