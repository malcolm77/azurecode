<?php
 echo "<html><head><style>h1 { color: red } td { font-size: 120px; } a { font-size: 120px; }</style></head><body>";

  if ($stream = fopen('https://wordsstorageaccount.blob.core.windows.net/words/words.txt?sp=r&st=2023-08-16T04:11:14Z&se=2024-08-16T12:11:14Z&spr=https&sv=2022-11-02&sr=b&sig=aGpaCu%2BOruwSG%2FsR44USI56glX%2BlK26KdiBiIdJB%2B2s%3D', 'r')) {
    $wordlist = stream_get_contents($stream);
  }

  $words = explode("\n", $wordlist);

  for ($x = 0; $x <= 20; $x++) {
    $line = rand(1,178000);
    echo "<a href='http://www.bing.com/search?q=$words[$line]'>$x $words[$line]</a><br>";
  }
  # <a href='http://www.bing.com/search?q=business '>10 business </a>

  echo "</body></html>";
?>
