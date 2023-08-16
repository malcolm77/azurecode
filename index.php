<?php 

echo "Hello World<br>"; 
echo "this is a simple test<br>";

echo (rand(1,178000) . "<br>");

/* to test
  
  if ($stream = fopen('https://wordsstorageaccount.blob.core.windows.net/words/words.txt?sp=r&st=2023-08-16T04:11:14Z&se=2024-08-16T12:11:14Z&spr=https&sv=2022-11-02&sr=b&sig=aGpaCu%2BOruwSG%2FsR44USI56glX%2BlK26KdiBiIdJB%2B2s%3D', 'r')) {
    // print the first 50 bytes
    echo stream_get_contents($stream, 50);

    fclose($stream);
}
*/

?>
