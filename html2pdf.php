<?php

echo "
  _  _ _____ __  __ _       
 | || |_   _|  \/  | |        Author : MarsHall
 | __ | | | | |\/| | |__      Team   : Xai Syndicate
 |_||_| |_| |_|__|_|____|__ 
 |_   _/ _ \  | _ \   \| __|
   | || (_) | |  _/ |) | _| 
   |_| \___/  |_| |___/|_|  
                            
";
echo "[+] Url : "; $url = trim(fgets(STDIN));
echo "[+] Name Save : "; $name = trim(fgets(STDIN));

$apikey = '3db58237-ed08-4b56-9834-45ff9414ad0b';
$hasil = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($url));
file_put_contents("$name.pdf", $hasil);

if ( $hasil ) {
   echo "[+] File Tersave : $name.pdf\n";
} else {
   echo "[×] Gagal Save \n";
}

?>
