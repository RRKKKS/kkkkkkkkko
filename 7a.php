<?php
date_default_timezone_set("Asia/Baghdad");
if (file_exists('madeline.php')){
    require_once 'madeline.php';
}
define('MADELINE_BRANCH', 'deprecated');
function bot($method, $datas = []){
    $token = file_get_contents("token");
    $url = "https://api.telegram.org/bot$token/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res, true);
}
$settings['app_info']['api_id'] = 13167118;
$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
$MadelineProto = new \danog\MadelineProto\API('7.madeline',$settings);
$MadelineProto->start();
$info = json_decode(file_get_contents('info.json'),true);
$num = $info["number7"];
$x= file_get_contents('x7');
do{
file_put_contents('x7',$x++);
$info = json_decode(file_get_contents('in.json'),true);
$info["loop8"] = $x;
file_put_contents('in.json', json_encode($info));
$users = explode("\n",file_get_contents("u7"));
foreach($users as $user){
    $kd = strlen($user);
    if($user != ""){
    try{$MadelineProto->messages->getPeerDialogs(['peers' => [$user]]);
        $x++;
    }catch (\danog\MadelineProto\Exception | \danog\MadelineProto\RPCErrorException $e) {
                try{$MadelineProto->account->updateUsername(['username'=>$user]);
$time = date("m/d h:i:s");
bot('sendvideo',['chat_id' => file_get_contents("ID"), 'video' => "https://b.top4top.io/m_2703b6jz71.mp4",'caption'=>"𓆩 ᴏᴠᴇʀᴡʜᴇʟᴍɪɴɢ #. 🦂 \n - - - - - - - - - - -  \n ‹𓏺 ʟ ᴀʟѕᴀʏѕ ᴡᴀɴᴛ ʏᴏᴜ ʙᴇ ᴀ ʟᴏѕᴇʀ \n ᴀʟᴡᴀʏѕ . \n - - - - - - - - - - - \n ᴜѕᴇʀɴᴀᴍᴇ : ❲ @$user ❳‌‌  ⚚ \n ᴄʟɪᴄᴋѕ : ❲ $x ❳‌‌ 🝓 \n ѕᴀᴠᴇ : ❲ Account ❳‌‌  \n Time : $time .",]);
                    $data = str_replace("\n".$user,"", file_get_contents("u7"));
                    file_put_contents("u7", $data);
                }catch(Exception $e){
                    echo $e->getMessage();
                    if($e->getMessage() == "USERNAME_INVALID"){
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "╭ checker ❲ 7 ❳  \n | username is Band\n╰ Done Delet on list ↣ @$user",]);
                        $data = str_replace("\n".$user,"", file_get_contents("u7"));
                        file_put_contents("u7", $data);
                    }elseif($e->getMessage() == "This peer is not present in the internal peer database"){
                        $MadelineProto->account->updateUsername(['username'=>$user]);
                    }elseif($e->getMessage() == "USERNAME_OCCUPIED"){
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "╭ checker ❲ 7 ❳ 🛎 \n | username not save\n╰ FLood 1500 ↣ @$user",]);
                        $data = str_replace("\n".$user,"", file_get_contents("u7"));
                        file_put_contents("u7", $data);
                    }else{
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' =>  "7 • Error @$user ".$e->getMessage()]);
                        $info = json_decode(file_get_contents('info.json'),true);
                        $info["num7"] = "delet";file_put_contents('info.json', json_encode($info));
                    }     
                }
            }
        } 
    }
  }while(1);