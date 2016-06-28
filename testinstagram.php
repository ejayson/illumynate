<?php

/**
 * @author gencyolcu
 * @copyright 2016
 */

 function processURL($url)
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 2
        ));

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    $tag = 'test';
    $client_id = "eeb5cb4278284ee8afe96bcd37b6f7e8";
   // $url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id;
    $url='https://api.instagram.com/v1/users/search?q=saini1.rs.ravi&client_id='.$client_id;
    echo $url;
    $all_result  = processURL($url);
    $decoded_results = json_decode($all_result, true);

    echo '<pre>';
     print_r($decoded_results);
     exit;

    //Now parse through the $results array to display your results... 
    foreach($decoded_results['data'] as $item){
        $image_link = $item['images']['thumbnail']['url'];
        echo '<img src="'.$image_link.'" />';
    }

?>