<?
    $url = "http://matome.naver.jp";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $html =  curl_exec($ch);
    $start = mb_strpos($html,'<ul class="mdTopMTMList01List">') + 31;
    $end = mb_strpos($html,'<!--/MdTopMTMList01-->');
    $str1 = mb_substr($html,$start,$end - $start);
    print("$str1");
?>
