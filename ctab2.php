<?php
$biru="\033[1;34m";
$turkis="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$green="\033[0;32m";
$gr="\033[1;32m";

date_default_timezone_set("Asia/Bangkok");
error_reporting(0);

function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,($str[1]));
	return $str[0];
}
$cLogo = "$pink


$green================================================
╔═══╗╔═══╗╔╗──╔╗╔═══╗╔════╗╔═══╗╔════╗╔═══╗╔══╗─
║╔═╗║║╔═╗║║╚╗╔╝║║╔═╗║║╔╗╔╗║║╔═╗║║╔╗╔╗║║╔═╗║║╔╗║─
║║─╚╝║╚═╝║╚╗╚╝╔╝║╚═╝║╚╝║║╚╝║║─║║╚╝║║╚╝║║─║║║╚╝╚╗
║║─╔╗║╔╗╔╝─╚╗╔╝─║╔══╝──║║──║║─║║──║║──║╚═╝║║╔═╗║
║╚═╝║║║║╚╗──║║──║║─────║║──║╚═╝║──║║──║╔═╗║║╚═╝║
╚═══╝╚╝╚═╝──╚╝──╚╝─────╚╝──╚═══╝──╚╝──╚╝─╚╝╚═══╝v1
 $red Cr: @ndhyehzn
";




echo $cLogo;

echo "\033[1;32mEmail\033[1;31m :\033[1;0m ";
$em = trim(fgets(STDIN));
function random($length)
{
    $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
    $string = '';
    for($i = 0; $i < $length; $i++) {
        $pos = rand(0, strlen($data)-1);
        $string .= $data{$pos};
    }
    return $string;
}
system("clear");

$urlx = "https://cryptobrowser.site/api/android/stats/?av=1.0.0&v=3.0.39&bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d";
$headers = array (
"Host: cryptobrowser.site",
"content-length: 364",
"accept: application/json, text/plain, */*",
"origin: https://cryptobrowser.site",
"authorization: Bearer gAAAAABeIUZb2c4mI_XIYGKjYT1gQzrs-MdSLoaioQ1NR8BzHEkYmzo6ByU5gpiEgHs_3uzv7_glG1zvqxtNjzgPrS3QC5kw-A==",
"user-agent: Mozilla/5.0 (Linux; Android 9; vivo 1915) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.73 Mobile Safari/537.36",
"sec-fetch-mode: cors",
"content-type: application/json",
"x-cba-data: CKy1yQEIh7bJAQijtskBCKmdygEI4qjKAQjKr8oBCKuxygEI97TKAQ==",
"sec-fetch-site: same-origin",
"referer: https://cryptobrowser.site/cdn/mobile-app/master/48/a20d938/mobile/android/?manual_select_cryptotab_as_default_browser=&referrer=utm_source%3Dgoogle-play%26utm_medium%3Dorganic&v=3.0.39&device=phone&bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d",
"accept-encoding: gzip, deflate, br",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: _ct_ob=a",
"cookie: _ct_bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d",
"cookie: _ct_v=3.0.39",
"cookie: _ct_av=1.0.0",
"cookie: _gid=GA1.2.376401430.1578952118",
"cookie: _ctt_id=5fd99fac-5ee3-45db-acb4-9062c743ef59",
"cookie: _ga=GA1.2.5fd99fac-5ee3-45db-acb4-9062c743ef59",
"cookie: __cfduid=d49a6c2a695fd18424167b5db590f818c1579041007",
"cookie: csrftoken=TqOtw83UdweGKIiGpm2038ltV0RX9RWuMG7JDbazQOwUfU9dabg93eIvuwVJJZzk",
"cookie: session_ctb=6wzffcy1flvnoek58fza5gcfq7ggsthh"
);
$b = "bethigh=1&winchance=50&cryptomultiply=0.00000200";

$cofigg = array(
  "platform" => "browser_android",
  "hardwareConcurrency" => 8,
  "hps" => 30.703508153758385,
  "threads" => 8,
  "ui_speed" => 100,
  "boot_ts" => 1579239002,
  "minimized" => true,
  "device_info" => array(
    "sdk" => "28",
    "manufacturer" => "vivo",
    "device" => "1915",
    "model" => "vivo 1915",
    "product" => "1915",
    "hardware" => "",
    "board" => "k68v1_64",
    "brand" => "vivo"
  ),
  "throttle" => 1,
  "speedRatio" => 8,
  "cpu_load" => 100,
  "hashes" => 2060.193859326734
);
$dta = json_encode($cofigg, true);

echo $cLogo;






echo "\n\n".$red."Memualai ".$putih."Menuyul.....!\n";
while(true){
	
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $urlx);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
  curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $dta);
  $result = curl_exec($ch);
  $de = json_encode($result,true);
  $di = json_decode($result,true);
  $ms = $de['email'];
  $ma = getStr($result,'"email":',',');
  echo $biru."[" .$putih, date("D:m:y"), $biru . "]$green ===>$biru [" .$putih, date("H:i:s"), $biru."]".$red."\n"; 
  echo "# ".$putih."OutPut ".$biru."<=>".$red." [".$pink."".$de."".$red."]\n"; 
  
sleep(10);

}