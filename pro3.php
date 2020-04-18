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

echo $cLogo;

function master() {

$urlx = "https://cryptobrowser.site/api/android/stats/?av=1.0.0.98&v=4.0.11&bid=d2cfddba-ded5-41fa-b64f-79e5cf37e0d1";
$headers = array (
"Host: cryptobrowser.site",
"accept: application/json, text/plain, */*",
"authorization: Bearer gAAAAABemdwOxl65pocQu6VH2tQkmUoROUv0QQA5DcAc0dvX17jSZzCqnKPXWvGi2wGTMxay1grnecOaEVuXJ-p9cyZnlsQrwQ==",
"user-agent: Mozilla/5.0 (Linux; Android 9; vivo 1915) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.73 Mobile Safari/537.36",
"content-type: application/json",
"x-cba-data: :",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: csrftoken=wnnNxDg657vZORuQLJT2LxgG7MiMrfqCRHbPxMOaPwb8aaUH1LOJDWabIonMwbEi",
"cookie: session_ctb=kwcq5djzs2rje61w799akynczzopizot",
"cookie: _ct_bid=d2cfddba-ded5-41fa-b64f-79e5cf37e0d1",
);

$cofigg = array(
"platform" => "browser_android",
  "hardwareConcurrency" => 8,
  "hps" => 99934.83132616687845,
  "threads" => 999,
  "ui_speed" => 100,
  "boot_ts" => 1587141645,
  "minimized" => true,
  "device_info" => array(
    "default_browser" => "",
    "v" => "4.0.11",
    "ref" => "'utm_source=google-play&utm_medium=organic'",
    "bid" => "d2cfddba-ded5-41fa-b64f-79e5cf37e0d1",
    "sdk" => "28",
    "manufacturer" => "vivo",
    "device" => "1915",
    "canUseChooser" => "",
    "model" => "vivo 1915",
    "product" => "1915",
    "hardware" => "",
    "board" => "k68v1_64",
    "brand" => "vivo",
    "arm64" => "true"
  ),
  "throttle" => 10,
  "speedRatio" => 100,
  "cpu_load" => 100,
  "hashes" => 999999999992060.193859326734
);
$dta = json_encode($cofigg, true);


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
  curl_close($ch);
return json_encode($result,true);
}

function device1() {

$urlx = "https://cryptobrowser.site/api/android/stats/?av=1.0.0.98&v=4.0.11&bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d";
$headers = array (
"Host: cryptobrowser.site",
"accept: application/json, text/plain, */*",
"authorization: Bearer gAAAAABeHkHjCuQ6Zdj9D3iY31N87J_QSTUPgBUKHwkHYJggzwIkC4GRdltPS4tiJg3YT8w8ZCwf_vZjWhD3EMoU6dbUS6ieCg==",
"user-agent: Mozilla/5.0 (Linux; Android 9; vivo 1915) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.73 Mobile Safari/537.36",
"content-type: application/json",
"x-cba-data: :",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: csrftoken=TqOtw83UdweGKIiGpm2038ltV0RX9RWuMG7JDbazQOwUfU9dabg93eIvuwVJJZzk",
"cookie: session_ctb=6wzffcy1flvnoek58fza5gcfq7ggsthh",
"cookie: _ct_bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d",
);

$cofigg = array(
"platform" => "browser_android",
  "hardwareConcurrency" => 8,
  "hps" => 99934.83132616687845,
  "threads" => 998,
  "ui_speed" => 100,
  "boot_ts" => 1587141645,
  "minimized" => true,
  "device_info" => array(
    "default_browser" => "",
    "v" => "4.0.11",
    "ref" => "'utm_source=google-play&utm_medium=organic'",
    "bid" => "8c8abc4f-08b7-4503-99e0-a71dc9f10a2d",
    "sdk" => "28",
    "manufacturer" => "vivo",
    "device" => "1915",
    "canUseChooser" => "",
    "model" => "vivo 1915",
    "product" => "1915",
    "hardware" => "",
    "board" => "k68v1_64",
    "brand" => "vivo",
    "arm64" => "true"
  ),
  "throttle" => 10,
  "speedRatio" => 100,
  "cpu_load" => 100,
  "hashes" => 999999999992060.193859326734
);
$dta = json_encode($cofigg, true);


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
  curl_close($ch);
return json_encode($result,true);
}

function device2() {
$urlx = "https://cryptobrowser.site/api/android/stats/?av=1.0.0.98&v=4.0.11&bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d";
$headers = array (
"Host: cryptobrowser.site",
"accept: application/json, text/plain, */*",
"authorization: Bearer gAAAAABeIUZb2c4mI_XIYGKjYT1gQzrs-MdSLoaioQ1NR8BzHEkYmzo6ByU5gpiEgHs_3uzv7_glG1zvqxtNjzgPrS3QC5kw-A==",
"user-agent: Mozilla/5.0 (Linux; Android 9; vivo 1915) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.73 Mobile Safari/537.36",
"content-type: application/json",
"x-cba-data: :",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: csrftoken=TqOtw83UdweGKIiGpm2038ltV0RX9RWuMG7JDbazQOwUfU9dabg93eIvuwVJJZzk",
"cookie: session_ctb=6wzffcy1flvnoek58fza5gcfq7ggsthh",
"cookie: _ct_bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d");

$cofigg = array(
"platform" => "browser_android",
  "hardwareConcurrency" => 8,
  "hps" => 99934.83132616687845,
  "threads" => 998,
  "ui_speed" => 100,
  "boot_ts" => 1587141645,
  "minimized" => true,
  "device_info" => array(
    "default_browser" => "",
    "v" => "4.0.11",
    "ref" => "'utm_source=google-play&utm_medium=organic'",
    "bid" => "d2cfddba-ded5-41fa-b64f-79e5cf37e0d1",
    "sdk" => "28",
    "manufacturer" => "vivo",
    "device" => "1915",
    "canUseChooser" => "",
    "model" => "vivo 1915",
    "product" => "1915",
    "hardware" => "",
    "board" => "k68v1_64",
    "brand" => "vivo",
    "arm64" => "true"),
  "throttle" => 10,
  "speedRatio" => 100,
  "cpu_load" => 100,
  "hashes" => 999999999992060.193859326734);
$dta = json_encode($cofigg, true);

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
  curl_close($ch);
return json_encode($result,true);
}

function device3() {
$urlx = "https://cryptobrowser.site/api/android/stats/?av=1.0.0.98&v=4.0.11&bid=d2cfddba-ded5-41fa-b64f-79e5cf37e0d1";
$headers = array (
"Host: cryptobrowser.site",
"accept: application/json, text/plain, */*",
"authorization: Bearer gAAAAABemq12ZflAF2MgIut_gIIjjSG0nwl89HxN-tbPGpMpPh9-l7rgibevWXmaytvAK6waClDjp5mU5jUDTgpPFmYbyDsU5APN7JMOonNF0tbYGSM9YGI=",
"user-agent: Mozilla/5.0 (Linux; Android 9; vivo 1915) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.73 Mobile Safari/537.36",
"content-type: application/json",
"x-cba-data: :",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: csrftoken=Fla6wxnzREI0xDZTL5EuwvGAu9kLdUlCQSeLzU83W3ASmXzwb7AXhIVKBxb7ISvH",
"cookie: session_ctb=ktu68nwv6yxsknhxq1y4bhxvtn2mzbwr",
"cookie: _ct_bid=d2cfddba-ded5-41fa-b64f-79e5cf37e0d1");

$cofigg = array(
"platform" => "browser_android",
  "hardwareConcurrency" => 8,
  "hps" => 99934.83132616687845,
  "threads" => 998,
  "ui_speed" => 100,
  "boot_ts" => 1587141645,
  "minimized" => true,
  "device_info" => array(
    "default_browser" => "",
    "v" => "4.0.11",
    "ref" => "'utm_source=google-play&utm_medium=organic'",
    "bid" => "8c8abc4f-08b7-4503-99e0-a71dc9f10a2d",
    "sdk" => "28",
    "manufacturer" => "vivo",
    "device" => "1915",
    "canUseChooser" => "",
    "model" => "vivo 1915",
    "product" => "1915",
    "hardware" => "",
    "board" => "k68v1_64",
    "brand" => "vivo",
    "arm64" => "true"
),
  "throttle" => 10,
  "speedRatio" => 100,
  "cpu_load" => 100,
  "hashes" => 999999999992060.193859326734
);
$dta = json_encode($cofigg, true);

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
  curl_close($ch);
return json_encode($result,true);
}

/////////#####____For Email____#####////////

function mail0() {
$urlx = "https://cryptobrowser.site/api/user/stats/?av=1.0.0.98&v=4.0.11&bid=d2cfddba-ded5-41fa-b64f-79e5cf37e0d1";
$headers = array (
"Host: cryptobrowser.site",
"accept: application/json, text/plain, */*",
"authorization: Bearer gAAAAABemdwOxl65pocQu6VH2tQkmUoROUv0QQA5DcAc0dvX17jSZzCqnKPXWvGi2wGTMxay1grnecOaEVuXJ-p9cyZnlsQrwQ==",
"user-agent: Mozilla/5.0 (Linux; Android 9; vivo 1915) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.73 Mobile Safari/537.36",
"content-type: application/json",
"x-cba-data: :",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: csrftoken=TqOtw83UdweGKIiGpm2038ltV0RX9RWuMG7JDbazQOwUfU9dabg93eIvuwVJJZzk",
"cookie: session_ctb=6wzffcy1flvnoek58fza5gcfq7ggsthh",
"cookie: _ct_bid=d2cfddba-ded5-41fa-b64f-79e5cf37e0d1",
);
$cofigg = array(
"platform" => "browser_android",
  "hardwareConcurrency" => 8,
  "hps" => 0,
  "threads" => 0,
  "ui_speed" => 100,
  "browser_info" => array(
    "browser_id" => "d2cfddba-ded5-41fa-b64f-79e5cf37e0d1",
    "browser_version" => "4.0.11",
    "default" => false,
    "gpm_licence" => array(
      "error_code" => -1,
      "license" => 1,
      "response_code" => -1
    ),
    "installer_name" => "com.android.vending",
    "package_name" => "pro.cryptotab.android"
  )
);
$dta = json_encode($cofigg, true);
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
  curl_close($ch);
return json_encode($result,true);
}
function mail1() {
$urlx = "https://cryptobrowser.site/api/user/stats/?av=1.0.0.98&v=4.0.11&bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d";
$headers = array (
"Host: cryptobrowser.site",
"accept: application/json, text/plain, */*",
"authorization: Bearer gAAAAABeHkHjCuQ6Zdj9D3iY31N87J_QSTUPgBUKHwkHYJggzwIkC4GRdltPS4tiJg3YT8w8ZCwf_vZjWhD3EMoU6dbUS6ieCg==",
"user-agent: Mozilla/5.0 (Linux; Android 9; vivo 1915) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.73 Mobile Safari/537.36",
"content-type: application/json",
"x-cba-data: :",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: csrftoken=TqOtw83UdweGKIiGpm2038ltV0RX9RWuMG7JDbazQOwUfU9dabg93eIvuwVJJZzk",
"cookie: session_ctb=6wzffcy1flvnoek58fza5gcfq7ggsthh",
"cookie: _ct_bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d",
);
$cofigg = array(
"platform" => "browser_android",
  "hardwareConcurrency" => 8,
  "hps" => 0,
  "threads" => 0,
  "ui_speed" => 100,
  "browser_info" => array(
    "browser_id" => "8c8abc4f-08b7-4503-99e0-a71dc9f10a2d",
    "browser_version" => "4.0.11",
    "default" => false,
    "gpm_licence" => array(
      "error_code" => -1,
      "license" => 1,
      "response_code" => -1
    ),
    "installer_name" => "com.android.vending",
    "package_name" => "pro.cryptotab.android"
  )
);
$dta = json_encode($cofigg, true);
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
  curl_close($ch);
return json_encode($result,true);
}
function mail2() {
$urlx = "https://cryptobrowser.site/api/user/stats/?av=1.0.0.98&v=4.0.11&bid=d2cfddba-ded5-41fa-b64f-79e5cf37e0d1";
$headers = array (
"Host: cryptobrowser.site",
"accept: application/json, text/plain, */*",
"authorization: Bearer gAAAAABeIUZb2c4mI_XIYGKjYT1gQzrs-MdSLoaioQ1NR8BzHEkYmzo6ByU5gpiEgHs_3uzv7_glG1zvqxtNjzgPrS3QC5kw-A==",
"user-agent: Mozilla/5.0 (Linux; Android 9; vivo 1915) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.73 Mobile Safari/537.36",
"content-type: application/json",
"x-cba-data: :",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: csrftoken=TqOtw83UdweGKIiGpm2038ltV0RX9RWuMG7JDbazQOwUfU9dabg93eIvuwVJJZzk",
"cookie: session_ctb=6wzffcy1flvnoek58fza5gcfq7ggsthh",
"cookie: _ct_bid=d2cfddba-ded5-41fa-b64f-79e5cf37e0d1",
);
$cofigg = array(
"platform" => "browser_android",
  "hardwareConcurrency" => 8,
  "hps" => 0,
  "threads" => 0,
  "ui_speed" => 100,
  "browser_info" => array(
    "browser_id" => "d2cfddba-ded5-41fa-b64f-79e5cf37e0d1",
    "browser_version" => "4.0.11",
    "default" => false,
    "gpm_licence" => array(
      "error_code" => -1,
      "license" => 1,
      "response_code" => -1
    ),
    "installer_name" => "com.android.vending",
    "package_name" => "pro.cryptotab.android"
  )
);
$dta = json_encode($cofigg, true);
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
  curl_close($ch);
return json_encode($result,true);
}
function mail3() {
$urlx = "https://cryptobrowser.site/api/user/stats/?av=1.0.0.98&v=4.0.11&bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d";
$headers = array (
"Host: cryptobrowser.site",
"accept: application/json, text/plain, */*",
"authorization: Bearer gAAAAABemq12ZflAF2MgIut_gIIjjSG0nwl89HxN-tbPGpMpPh9-l7rgibevWXmaytvAK6waClDjp5mU5jUDTgpPFmYbyDsU5APN7JMOonNF0tbYGSM9YGI=",
"user-agent: Mozilla/5.0 (Linux; Android 9; vivo 1915) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.73 Mobile Safari/537.36",
"content-type: application/json",
"x-cba-data: :",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: csrftoken=Fla6wxnzREI0xDZTL5EuwvGAu9kLdUlCQSeLzU83W3ASmXzwb7AXhIVKBxb7ISvH",
"cookie: session_ctb=ktu68nwv6yxsknhxq1y4bhxvtn2mzbwr",
"cookie: _ct_bid=8c8abc4f-08b7-4503-99e0-a71dc9f10a2d",
);
$cofigg = array(
"platform" => "browser_android",
  "hardwareConcurrency" => 8,
  "hps" => 0,
  "threads" => 0,
  "ui_speed" => 100,
  "browser_info" => array(
    "browser_id" => "8c8abc4f-08b7-4503-99e0-a71dc9f10a2d",
    "browser_version" => "4.0.11",
    "default" => false,
    "gpm_licence" => array(
      "error_code" => -1,
      "license" => 1,
      "response_code" => -1
    ),
    "installer_name" => "com.android.vending",
    "package_name" => "pro.cryptotab.android"
  )
);
$dta = json_encode($cofigg, true);
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
  curl_close($ch);
return json_encode($result,true);
}

while(true){
	////Master
  $mas = master();
  $masmail0 = mail0();
  /////dev1
  $d1 = device1();
  $masmail1 = mail1();
  /////dev2
  $d2 = device2();
  $masmail2 = mail2();
  /////dev3
  $d3 = device3();
  $masmail3 = mail3();
  
  /////# Format Json ##/////
 ////master
  $js = json_decode($mas,true);
  $jm0 = json_decode($masmail0,true);
 ////dev1
  $j1 = json_decode($d1,true);
  $jm1 = json_decode($masmail1,true);
   ////dev2
  $j2 = json_decode($d2,true);
  $jm2 = json_decode($masmail2,true);
   ////dev3
  $j3 = json_decode($d3,true);
  $jm3 = json_decode($masmail3,true);
  
  $ma = getStr($jm0,'"email":',',');
  $ma1 = getStr($jm1,'"email":',',');
  $ma2 = getStr($jm2,'"email":',',');
  $ma3 = getStr($jm3,'"email":',',');
  
  
echo $kuning." <{= ".$putih."JAM".$kuning." =}> ".$biru."<======>".$kuning." <{= ".$putih."MENIT".$kuning." =}> ".$biru."<======>".$kuning." <{= ".$putih."DETIK".$kuning." =}> \n"; 
echo $kuning." <{=  ".$putih, date("H"),$kuning." =}> ".$biru."<======>".$kuning." <{=  ".$putih, date("i"),$kuning."   =}> ".$biru."<======>".$kuning." <{=  ".$putih, date("s"),$kuning."   =}> \n"; 
echo $red."# ".$putih."<{=".$kuning." Email =}>".$biru."<=>".$red." [".$gr."".$ma."".$red."]\n"; 
echo $kuning."# ".$putih."<{=".$kuning." Output =}>".$biru."<=>".$red." [".$pink."".$js."".$red."]\n"; 
echo $biru."# ".$putih."<{=".$kuning." Email =}>".$biru."<=>".$red." [".$gr."".$ma1."".$red."]\n"; 
echo $biru."# ".$putih."<{=".$kuning." Output =}>".$biru."<=>".$red." [".$pink."".$j1."".$red."]\n"; 
echo $red."# ".$putih."<{=".$kuning." Email =}>".$biru."<=>".$red." [".$gr."".$ma2."".$red."]\n"; 
echo $kuning."# ".$putih."<{=".$kuning." Output =}>".$biru."<=>".$red." [".$pink."".$j2."".$red."]\n"; 
echo $biru."# ".$putih."<{=".$kuning." Email =}>".$biru."<=>".$red." [".$gr."".$ma3."".$red."]\n"; 
echo $biru."# ".$putih."<{=".$kuning." Output =}>".$biru."<=>".$red." [".$pink."".$j3."".$red."]\n"; 

}