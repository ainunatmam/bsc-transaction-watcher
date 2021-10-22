<?php
$cukong_address = '0x4d3890dffa5568da1ca00402792c4ec45e87f2b6';
$sumber = "https://api.bscscan.com/api?module=account&action=txlist&address={$cukong_address}&startblock=1&endblock=99999999&page=1&offset=6&sort=desc&tag=latest&apikey=HKSINPJWQX9BAYQCTJSII62JK5KXVTKG83";
 $data_api = file_get_contents($sumber);
 $data = json_decode($data_api, true);
 // $hasil = $data->result;


   $link_hash = 'https://bscscan.com/tx/';
   $link_address = 'https://bscscan.com/address/';
   $link_pancake = 'https://exchange.pancakeswap.finance/#/swap?outputCurrency=';
   $now = new DateTime(null, new DateTimeZone('UTC'));
   if ($data['result'] && (gettype($data['result'])=='array' || gettype($data['result'] )=='object')) {
     foreach ($data['result'] as $bsc) {
         $waktu_tx = new DateTime('@' . $bsc['timeStamp']);
         $selisih_waktu = $waktu_tx->diff($now)->format('%a');
         if ($waktu_tx->diff($now)->format('%a%H') < 001) {
            echo "<p class=\"bg-danger text-white\">".gmdate('Y-m-d H:i:s', $bsc['timeStamp'])." GMT </p>";
          }else{
            echo "<p class=\"bg-white\">".gmdate('Y-m-d H:i:s', $bsc['timeStamp'])." GMT </p>";
          };
         echo "Hash : <a href=".$link_hash.$bsc['hash']." target=\"_blank\">".substr($bsc['hash'], 0, 5).".....".substr($bsc['hash'], -5)."</a> <br>";
         echo "From : ".substr($bsc['from'], 0, 5).".....".substr($bsc['from'], -5)."<br>";
         if ($bsc['to'] == '0x10ed43c718714eb63d5aa57b78b54704e256024e') {
           echo "To : <a href=".$link_address.$bsc['to']." target=\"_blank\">(Pancake Router V2)</a> <br>";
         }else{
           echo "To : <a href=".$link_pancake.$bsc['to']." target=\"_blank\">".substr($bsc['to'], 0, 5).".....".substr($bsc['to'], -5)."</a> <br>";
         };
         if ($bsc['isError'] == 0) {
           echo "<p style=\"background-color: lightgreen\">Status : Success</p>";
         }else{
           echo "<p style=\"background-color: red; color: white\">Status : Error</p>";
         };
         echo "<br>";
         echo "<hr>";
       }  
    }
     
?>