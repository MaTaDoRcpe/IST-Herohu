<?php
  
function send_LINE($msg){
 $access_token = 'mkQqXW/kpgEtt7e5FWFKHPj5t7wWPS6qNZRslQFVFkxKmfwisaE5wx4WInfMHUNhzCA1DdW5g28tzJd13qMX7Ij1T3DLBubTDhM3aOydvDO+bw4/sFUqX/vpf8r4RIqie1Md4tB1JVc4+R83wUMJfgdB04t89/1O/w1cDnyilFU='; 
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