<?php
  
function send_LINE($msg){
 $access_token = '5pBJpYKKOaYWP4m6kQOITYIAc43qHrOAo1aO5bGJf16sP6Cdlvire44IcJRiaTuQzCA1DdW5g28tzJd13qMX7Ij1T3DLBubTDhM3aOydvDN4VrvC5U8JadQdfwhn8NPFQOXybUBkaFKoegYWSU6iIwdB04t89/1O/w1cDnyilFU='; 
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'Ude2026a9be975143069fe90a9b8f572d',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
?>