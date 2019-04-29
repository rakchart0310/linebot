<?php
function reply_msg($txtin,$replyToken)//สร้างข้อความและตอบกลับ
{
    $access_token = 'ftOm874a8cxUqNtHe4ONogsCfsUxuDRuJ6ysvLgXl7CqwVedWAfmdkZrzHQXpeK/3GdYe0CnpqxRrU0ngfbF9FoCAVVNOBleXuh88VqmDlglOLpDZpNLpz/FHUQxrZCrtePo0plZQmyqi65UN56nYQdB04t89/1O/w1cDnyilFU=';
    $messages = ['type' => 'text','text' => $txtin];//สร้างตัวแปร 
    $url = 'https://api.line.me/v2/bot/message/reply';
    $data = [
                'replyToken' => $replyToken,
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

// รับข้อมูล
$content = file_get_contents('php://input');//รับข้อมูลจากไลน์
$events = json_decode($content, true);//แปลง json เป็น php
if (!is_null($events['events'])) //check ค่าในตัวแปร $events
{
    foreach ($events['events'] as $event) {
        if ($event['type'] == 'โหลๆ')
        {
            
            $txtback = '5 โหล';
                  
        }
        reply_msg($txtback,$replyToken);
    }
}
echo "BOT OK";
