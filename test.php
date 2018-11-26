<?
/*
function getHTML($url){
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_RANGE, '0-100');
   curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   $content = curl_exec($ch);
   curl_close($ch);
   echo $url."<br>";

   echo $content;
}

getHTML("https://naver.com");
*/
/*
function parsing_data($url, $data) {
    $agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36';
    $curlsession = curl_init ();
    curl_setopt ($curlsession, CURLOPT_URL, $url); // 파싱 주소 url
    //curl_setopt ($curlsession, CURLOPT_SSL_VERIFYPEER, FALSE); // 인증서 체크같은데 true 시 안되는 경우가 많다.
    curl_setopt ($curlsession, CURLOPT_SSLVERSION,3); // SSL 버젼 (https 접속시에 필요)
    curl_setopt ($curlsession, CURLOPT_HEADER, 0);
    curl_setopt ($curlsession, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($curlsession, CURLOPT_POST, 0); // POST = 1, GET = 0
    curl_setopt ($curlsession, CURLOPT_POSTFIELDS, "".$data.""); // POST 일경우 data 값을 받아 넣을수 ㅆ다.이
    curl_setopt ($curlsession, CURLOPT_USERAGENT, $agent);
    curl_setopt ($curlsession, CURLOPT_REFERER, "https://naver.com"); // 일부 사이트의 경우 referer 을 확인할 수 있다.
    curl_setopt ($curlsession, CURLOPT_TIMEOUT, 120); // 해당 웹사이트가 오래걸릴수 있으므로 2분동안 타임아웃 대기
    $buffer = curl_exec ($curlsession);
    $cinfo = curl_getinfo($curlsession);
    curl_close($curlsession);
 
    if ($cinfo['http_code'] != 200){
        return $cinfo['http_code'];
    }
 
    return $buffer;
}
 
$content = parsing_data("https://naver.com", "");
echo $content;
*/
$ch = curl_init(); 

// set URL and other appropriate options 
curl_setopt($ch, CURLOPT_URL, "https://www.naver.com/"); 
curl_setopt ($ch, CURLOPT_SSLVERSION,3); // SSL 버젼 (https 접속시에 필요)
curl_setopt($ch, CURLOPT_HEADER, 0); 

// grab URL and pass it to the browser 
$content = curl_exec($ch); 
echo $content;
// close curl resource, and free up system resources 
curl_close($ch); 
?>