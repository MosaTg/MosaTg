<?php 
ob_start(); 
$token = "2001907869:AAFAmGpM8SorlO8eMQ-WMv6G4rMoTjkeMuA";
$ABODEE = "2001907869:AAFAmGpM8SorlO8eMQ-WMv6G4rMoTjkeMuA";
$sudo = array("1924479995","$b8bb8");
$b8bb8 = 1924479995;
$channel2 = "T.me/chmosa"; 
$channel = "chmosa";
$g = str_replace('http://','',$SAIEDZip14);
$SAIEDZip14 = "https://b8bb8.000webhostapp.com/abod/";
$bot_id ="2001907869";
$userbot="RRH_Hbot";
#########
define("API_KEY", $token);
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}

//»»»»»»»»»»»»»»»»»»
$B_update = json_decode(file_get_contents('php://input'));
$B_message = $B_update->message;
$B_message_id = $B_update->message->message_id;
$B_from_id = $B_message->from->id;
$B_chat_id = $B_message->chat->id;
$B_text = $B_message->text;
$B_name = $B_message->from->first_name;
$B_from_id = $B_message->from->id;
date_default_timezone_set('Asia/Riyadh');
$B_date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
$B_text = $B_message->text;
$B_name = $B_message->from->first_name;
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$ch = file_get_contents("ch.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$hkok = file_get_contents("hkok.txt");
$g = file_get_contents('server.txt');
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$photo = $B_update->message->photo;
$video = $B_update->message->video;
$sticker = $B_update->message->sticker;
$file = $B_update->message->document;
$music = $B_update->message->audio;
$voice = $B_update->message->voice;
$B_caption = $B_message->caption;
$photo_id = $B_update->message->photo[0]->file_id;
$video_id= $B_update->message->video->file_id;
$sticker_id = $B_update->message->sticker->file_id;
$file_id = $B_update->message->document->file_id;
$music_id = $B_update->message->audio->file_id;
$voice_id = $B_update->message->voice->file_id;
#hshtak
$ch1 = file_get_contents("https://api.telegram.org/bot".$ABODEE."/getChatMember?chat_id=$ch&user_id=$B_from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".$ABODEE."/getChatMember?chat_id=$ch&user_id=".$B_from_id);
$tv1 = file_get_contents("https://api.telegram.org/bot".$ABODEE."/getChatMember?chat_id=$tv&user_id=$B_from_id");
$tv2 = file_get_contents("https://api.telegram.org/bot".$ABODEE."/getChatMember?chat_id=$tv&user_id=".$B_from_id);
#$export1 = json_decode(file_get_contents("https://api.telegram.org/bot".$ABODEE."/exportChatInviteLink?chat_id=$tv"));
#$linkchannel1 = $export1->result;
#$export2 = json_decode(file_get_contents("https://api.telegram.org/bot".$ABODEE."/exportChatInviteLink?chat_id=$ch"));
#$linkchannel2 = $export2->result;
if ($B_message && !in_array($B_from_id, $members)) {
    file_put_contents("members.txt", $B_from_id."\n",FILE_APPEND);
  }
$tvp = str_replace('@','',$tv);
if($B_message && (strpos($tv1,'"status":"left"') or strpos($tv1,'"Bad Request: USER_ID_INVALID"') or strpos($tv1,'"status":"kicked"') or strpos($tv2,'"status":"left"') or strpos($tv2,'"Bad Request: USER_ID_INVALID"') or strpos($tv2,'"status":"kicked"'))!== false){
$linktv=file_get_contents("linktv.txt");
if($linktv==null){
$linktv="https://t.me/$tvp";
}
bot('sendmessage', [
'chat_id'=>$B_chat_id,
'text'=>"*
⌁⌇ عزيزي لاتستطيع استخدام البوت ♡.
♡⌇ عليك الاشتراك في القناة اولاً 🕊.

𖡋 : $linktv
ثُم أرسل : ꒱ /start ꒰
⌁*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$B_message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌁ اشتراك ♡','url'=>"$linktv"]
],
]])
]);return false;}
$chp = str_replace('@','',$ch);
if($B_message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$linkch=file_get_contents("linkch.txt");
if($linkch==null){
$linkch="https://t.me/$chp";
}
bot('sendMessage', [
'chat_id'=>$B_chat_id,
'text'=>"*
⌁⌇ عزيزي لاتستطيع استخدام البوت ♡.
♡⌇ عليك الاشتراك في القناة اولاً 🕊.

𖡋 : $linkch
ثُم أرسل : ꒱ /start ꒰
⌁*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$B_message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌁ اشتراك ♡' ,'url'=>"$linkch"]
],
]])
]);return false;}
if($user == null){}else{$user5 = $user;}
if ($B_message && !in_array($B_from_id, $members)) {
    file_put_contents("members.txt", $B_from_id."\n",FILE_APPEND);
  }
//»»»»»»»»»»»»
$baageel = file_get_contents("baageel.txt");
if($B_text == "تفعيل 𖧇." and in_array($B_from_id,$sudo)){
bot('sendmessage',[
	'chat_id'=>$B_chat_id,
	'text'=>"
⌁⌇ تم تفعيل البوت ♡.
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$B_message_id,
 ]);
file_put_contents("baageel.txt","on");
}
if($B_text == "تعطيل 𖧇." and in_array($B_from_id,$sudo)){
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"⌁⌇ تم تعطيل البوت ♡.",
]);
file_put_contents("baageel.txt","off");
} 
if($B_message and $baageel =="off" and !in_array($B_from_id,$sudo)){
 bot('sendMessage',[
 'chat_id'=>$B_from_id,
 'text'=>"*
- تحديث New . . 
⌁⌇ عزيزي ألبوت الان في الصيانة ، تطرى عليه تحديثات جديدة من المطور حيثُ يُصبح ألبوت اكثر تطوراً ومتميز جداً وبسرعة خُرافية جداً 𖧇.
⌁⌇ سوف يتم أعادة تشغيل البوت بعد بضعة دقائق . .
⌁⌇ لمُرسالة ألمطور موسىَ .
MoSa : @ooooox
*",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$B_message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'MoSa' ,'url'=>"t.me/ooooox"]
],
]])
]);return false;}
#-----------------------------------
if($user == null){}else{$user5 = $user;}
if($B_message and in_array($user5, $band_user) and $user != null) {
	bot('sendmessage',['chat_id'=>$B_chat_id,'text'=>'أنت محظور بسبب المُخلفة 𖧇.']);return false;}
  if($B_message && in_array($B_from_id, $band_id)) {
	bot('sendmessage',['chat_id'=>$B_chat_id,'text'=>'أنت محظور بسبب المُخلفة 𖧇.']);return false;}
//»»»»»»»»»»»»»»»»»
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$messageid = $update->callback_query->message->message_id;
$from_id = $message->from->id;
$message_id = $message->message_id;
$data = $update->callback_query->data;
if($text == '/start'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
♪︙مرحباً حُبَ ، 💘.
•|• بوت الابراج اليوميَه ، لمعرفة كُل شي عن برجك والاحداث الخ ، البوت يعمل اُونلاين ومربوط بسرفر خاص حيثُ يتم تحديث الابراج والاحداث يومياً 💗.
 ",'parse_mode'=>"MarkDown",
 'reply_to_message_id'=>$B_message_id,
 'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text' => "الجوزاء 𖨜", 'callback_data' => "hm1|Gemini"],['text' => "الثور 𖨢", 'callback_data' => "hm1|Taurus"],['text' => "الحمل 𖨤", 'callback_data' => "hm1|Aries"]],
              [['text' => "العذراء 𖧍", 'callback_data' => "hm1|Virgo"],['text' => "الاسد 𖧊", 'callback_data' => "hm1|Lion"],['text' => "السرطان 𖨅", 'callback_data' => "hm1|Cancer"]],
              [['text' => "القوس 𖤟", 'callback_data' => "hm1|Sagittarius"],['text' => "العقرب 𖥲", 'callback_data' => "hm1|Scorpio"],['text' => "الميزان 𖦤", 'callback_data' => "hm1|Libra"]],
              [['text' => "الحوت 𖤬", 'callback_data' => "hm1|Pisces"],['text' => "الدلو 𖣷", 'callback_data' => "hm1|Aquarius"],['text' => "الجدي 𖤈", 'callback_data' => "hm1|Capricorn"]],
              ]
        ])
 ]);
}
if($data == "BBACK"){
bot('editMessageText',[
'chat_id'=>$chatid,
'message_id'=>$messageid,
 'text'=>"- تم العودة الئ القائمة الرئيسية .
",'parse_mode'=>"MarkDown",
 'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text' => "الجوزاء 𖨜", 'callback_data' => "hm1|Gemini"],['text' => "الثور 𖨢", 'callback_data' => "hm1|Taurus"],['text' => "الحمل 𖨤", 'callback_data' => "hm1|Aries"]],
              [['text' => "العذراء 𖧍", 'callback_data' => "hm1|Virgo"],['text' => "الاسد 𖧊", 'callback_data' => "hm1|Lion"],['text' => "السرطان 𖨅", 'callback_data' => "hm1|Cancer"]],
              [['text' => "القوس 𖤟", 'callback_data' => "hm1|Sagittarius"],['text' => "العقرب 𖥲", 'callback_data' => "hm1|Scorpio"],['text' => "الميزان 𖦤", 'callback_data' => "hm1|Libra"]],
              [['text' => "الحوت 𖤬", 'callback_data' => "hm1|Pisces"],['text' => "الدلو 𖣷", 'callback_data' => "hm1|Aquarius"],['text' => "الجدي 𖤈", 'callback_data' => "hm1|Capricorn"]],
              ]
        ])
 ]);
}
$n = explode("|",$data);
if($data == "hm1|$n[1]"){
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=day&brj=$n[1]"));
$n1 = $export->result->n1;
$n2 = $export->result->n2;
$n3 = $export->result->n3;
$n4 = $export->result->n4;
$n5 = $export->result->n5;
$n6 = $export->result->n6;
bot('editMessageText',[
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"♪︙مهنياً ودراسياً
• $n1
┉┉┉┉┉┉┉┉┉┉
♪︙عاطفياً واجتماعياً
• $n2
┉┉┉┉┉┉┉┉┉┉
♪︙صحياً
• $n3
┉┉┉┉┉┉┉┉┉┉
♪︙الأبراج المتوافقة معك
• $n4
┉┉┉┉┉┉┉┉┉┉
♪︙مؤشرات يومية عامة
• $n5
┉┉┉┉┉┉┉┉┉┉
♪︙أرقام الحظ اليوم
• $n6
┉┉┉┉┉┉┉┉┉┉
• Channel : @ChMosa 😵‍💫❤️‍🩹.",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "توقعات الشهر 𖤋", 'callback_data' => "y2|$n[1]|month"]],[['text' => "توقعات الاسبوع 𖤋", 'callback_data' => "y2|$n[1]|weekly"],['text' => "توقعات الأمس 𖤍", 'callback_data' => "y1|$n[1]|yesterday"]],
[['text' => "توقعات ماغي فرح المرأه 𖤑", 'callback_data' => "mage1|$n[1]"]],[['text' => "توقعات ماغي فرح الرجُل 𖤑", 'callback_data' => "mage2|$n[1]"]],
[['text' => "رجوع 💘.", 'callback_data' => "BBACK"]]
]
])
]);
}
$n = explode("|",$data);
if($data == "mage1|$n[1]") {
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=day&brj=$n[1]"));
$n8 = $export->result->n8;
bot('editMessageText',[
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"♪︙$n8
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "رجوع 💘.", 'callback_data' => "hm1|$n[1]"]]
]
])
]);
}
if($data == "mage2|$n[1]") {
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=day&brj=$n[1]"));
$n7 = $export->result->n7;
bot('editMessageText',[
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"♪︙$n7
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "رجوع 💘.", 'callback_data' => "hm1|$n[1]"]]
]
])
]);
}
$n = explode("|",$data);
if($data == "mage3|$n[1]") {
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=yesterday&brj=$n[1]"));
$n8 = $export->result->n8;
bot('editMessageText',[
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"♪︙$n8
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "رجوع 💘.", 'callback_data' => "hm1|$n[1]"]]
]
])
]);
}
if($data == "mage4|$n[1]") {
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=yesterday&brj=$n[1]"));
$n7 = $export->result->n7;
bot('editMessageText',[
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"♪︙$n7
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "رجوع 💘.", 'callback_data' => "hm1|$n[1]"]]
]
])
]);
}
$n = explode("|",$data);
if($data == "y1|$n[1]|$n[2]"){
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=$n[2]&brj=$n[1]"));
$n1 = $export->result->n1;
$n2 = $export->result->n2;
$n3 = $export->result->n3;
$n4 = $export->result->n4;
$n5 = $export->result->n5;
$n6 = $export->result->n6;
bot('editMessageText',[
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"♪︙مهنياً ودراسياً
• $n1
┉┉┉┉┉┉┉┉┉┉
♪︙عاطفياً واجتماعياً
• $n2
┉┉┉┉┉┉┉┉┉┉
♪︙صحياً
• $n3
┉┉┉┉┉┉┉┉┉┉
♪︙الأبراج المتوافقة معك
• $n4
┉┉┉┉┉┉┉┉┉┉
♪︙مؤشرات يومية عامة
• $n5
┉┉┉┉┉┉┉┉┉┉
♪︙أرقام الحظ اليوم
• $n6
┉┉┉┉┉┉┉┉┉┉
• Channel : @ChMosa 😵‍💫❤️‍🩹.",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "توقعات الشهر 𖤋", 'callback_data' => "y2|$n[1]|month"]],[['text' => "توقعات الاسبوع 𖤋", 'callback_data' => "y2|$n[1]|weekly"],['text' => "توقعات اليوم 𖤍", 'callback_data' => "hm1|$n[1]"]],
[['text' => "توقعات ماغي فرح المرأه 𖤑", 'callback_data' => "mage3|$n[1]"]],[['text' => "توقعات ماغي فرح الرجُل 𖤑", 'callback_data' => "mage4|$n[1]"]],
[['text' => "رجوع 💘.", 'callback_data' => "BBACK"]]
]
])
]);
}

$n = explode("|",$data);
if($data == "y2|$n[1]|$n[2]"){
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=$n[2]&brj=$n[1]"));
$n1 = $export->result->n1;
bot('editMessageText',[
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"♪︙$n1
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "توقعات الشهر 𖤋", 'callback_data' => "y2|$n[1]|month"]],[['text' => "توقعات الاسبوع 𖤋", 'callback_data' => "y2|$n[1]|weekly"],['text' => "توقعات اليوم 𖤍", 'callback_data' => "hm1|$n[1]"]],
[['text' => "رجوع 💘.", 'callback_data' => "BBACK"]]
]
])
]);
}
if($B_text == "الاوامر" or $B_text == "الغاء 𖤬." or $B_text == "الغاء 𖧇." or $B_text == "رجوع ࿂." and in_array($B_from_id,$sudo)){
	bot('sendmessage',[
	'chat_id'=>$B_from_id, 
	'text' =>"
*⌁⌇ مرحباً مطوري أليك الاوامر 𖧇.*
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$B_message_id,
 'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"وضع قناة ①"],['text'=>"وضع قناة ②"]],
[['text'=>"حذف قناة ①"],['text'=>"حذف قناة ②"]],
[['text'=>"تفعيل 𖧇."],['text'=>"تعطيل 𖧇."]],
[['text'=>"تفعيل الاشعارات 𖧇."],['text'=>"تعطيل الاشعارات 𖧇."]], 
[['text'=>"تفعيل التواصل 𖧇."],['text'=>"تعطيل التواصل 𖧇."]],
[['text'=>"تفعيل التوجية 𖧇."],['text'=>"تعطيل التوجية 𖧇."]], 
[['text'=>"حظر خاص 𖧇."],['text'=>"الغاء الحظر خاص 𖧇."]],
[['text'=>"الاذاعة 𖧇."]],
[['text'=>"حظر بالمعرف 𖧇."],['text'=>"الغاء الحظر بالمعرف 𖧇."]],
[['text'=>"الاحصائيات 𖧇."],['text'=>"نسخ احتياطي 𖧇."]],
],
'resize_keyboard'=>true
])
]);
} 
//»»»»»»»»»»»»»»»»»»
if($B_text == "وضع قناة ①" and in_array($B_from_id,$sudo)){
	file_put_contents("sting.txt","knat");
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"* ⌁⌇ ارسل معرف القناة الان ،
اذا كانت خاصة سوي توجيه منشور منها الان 𖧇.
*",'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"الغاء 𖧇."]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($B_text == "الغاء 𖧇." and $sting =="knat" and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"*تم الغاء الامر 𖧇.*",
]);
unlink("sting.txt");} 
if($B_message->forward_from_chat and $sting =="knat" and in_array($B_from_id,$sudo)){
file_put_contents("sting.txt","link1");
$idchannel= $B_message->forward_from_chat->id;
file_put_contents("tv.txt","$idchannel"); 
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text' =>"
*⌁⌇ تم حفظ القناة *$idchannel* الان ارسل لي الرابط الخاص ♡*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) ]);
}
if($B_text!=null and $B_text != "الغاء 𖧇." and $sting =="link1" and in_array($B_from_id,$sudo) and !$B_message->forward_from_chat){
file_put_contents("linktv.txt","$B_text"); 
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text' => "
*تم حفظ رابط القناة 𖧇.*
*$B_text* 
* ⌁ تأكد ان البوت ادمن في القناة .*
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($B_text!=null and $B_text != "الغاء 𖧇." and $sting =="knat" and in_array($B_from_id,$sudo) and !$B_message->forward_from_chat){
file_put_contents("tv.txt","$B_text"); 
unlink("linktv.txt"); 
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text' =>"*
⌁ تم حفظ معرف القناة 𖧇.
تاكد ان البوت ادمن فيها 𖧇.
*",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
//********♥*****//
if($B_text == "حذف قناة ①" and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"* ⌁⌇ تم حذف القناة 𖧇.*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tv.txt");}
//»»»»»»»»»»»»»»»»»»
if ($B_text == "وضع قناة ②" and in_array($B_from_id,$sudo)){
file_put_contents("sting.txt","sting");
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"* ⌁⌇ ارسل معرف القناة الان ،
اذا كانت خاصة سوي توجيه منشور منها الان 𖧇.
*",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"الغاء 𖧇."]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($B_text == "الغاء 𖧇." and $sting =="sting" and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"*تم الغاء الامر 𖧇.*",
]);
unlink("sting.txt");} 
if($B_message->forward_from_chat and $sting =="sting" and in_array($B_from_id,$sudo)){
unlink("sting.txt");
$idchannel= $B_message->forward_from_chat->id;
file_put_contents("ch.txt","$idchannel"); 
file_put_contents("sting.txt","link2"); 
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text' =>"
*⌁⌇ تم حفظ القناة *$idchannel* الان ارسل لي الرابط الخاص ♡*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
])]);
}
if($B_text!=null and $B_text != "الغاء 𖧇." and $sting =="link2" and in_array($B_from_id,$sudo)and !$B_message->forward_from_chat){
file_put_contents("linkch.txt","$B_text"); 
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text' =>"
*تم حفظ رابط القناة 𖧇.*
*$B_text* 
* ⌁ تأكد ان البوت ادمن في القناة .*
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
])
]);
unlink("sting.txt");}
if( $B_text !=null and $B_text != "الغاء 𖧇." and $sting =="sting" and in_array($B_from_id,$sudo)and !$B_message->forward_from_chat ){
file_put_contents("ch.txt","$B_text"); 
unlink("linkch.txt");
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text' => "
⌁ تم حفظ معرف القناة 𖧇.
تاكد ان البوت ادمن فيها 𖧇.
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($B_text =="حذف قناة ②" and in_array($B_from_id,$sudo)){
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"* ⌁⌇ تم حذف القناة 𖧇.*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("ch.txt") ;
} 
//»»»»»»»»»»»»»»»»»»
if($B_text == "حظر بالمعرف 𖧇." and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"⌁⌇ ارسل يوزر الشخص 𖧇.",
]);
file_put_contents("sting.txt","bandu");
} 
if(preg_match('/^(@)(\S{5,32})/i',$B_text) and $sting == "bandu" and in_array($B_from_id,$sudo)){
$tf = str_replace("@","",$B_text);
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"⌁⌇ تم حظر العضو 𖧇.
[$B_text](https://t.me/$tf) 
",'reply_to_message_id'=>$B_message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>"$B_text", 
'text'=>"
⌁⌇ عذراً عزيزي لقد تم حظرك ،
⌁⌇ لاتستطيع استخدام البوت ،
⌁⌇ عليك مراسله المطور 𖧇.
⌁ @ooooox ⌁
",
]);
$tf = str_replace("@","",$B_text);
file_put_contents("band_user.txt",$tf."\n",FILE_APPEND);
unlink("sting.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($B_text =="الغاء الحظر بالمعرف 𖧇." and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
	'chat_id'=>$B_chat_id, 
	'text'=>"⌁⌇ ارسل يوزر العضو 𖧇.",
]);file_put_contents("sting.txt","unkband1");} 

if($B_text =="$B_text" and $sting == "unkband1" and in_array($B_from_id,$sudo)){
$tf = str_replace("@","",$B_text);
	$a = str_replace("$tf","",file_get_contents("band_user.txt"));
        file_put_contents("band_user.txt",$a);
$tf = str_replace("@","",$B_text);
	bot('sendMessage',[
	'chat_id'=>$B_chat_id, 
	'text'=>" ⌁⌇ تم الغاء الحظر عنه 𖧇.
[$B_text](https://t.me/$tf) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$B_text, 
	'text'=>"
⌁⌇ تم الغاء الحظر عنك ، تستطيع الان استخدام البوت 𖧇.
",]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
$rt = $B_update->message->reply_to_message;
$id = $B_message->reply_to_message->forward_from->id;
if($tw == "tw" and $B_from_id == $b8bb8){
	if($B_text != "/start"){
	bot('forwardMessage', [
'chat_id'=>$b8bb8,
'from_chat_id'=>$B_chat_id,
'message_id'=>$B_message->message_id
]);
}
}
	if($tw == "tw" and $rt and $B_from_id == $b8bb8){
		bot('sendMessage',[
'chat_id'=>$id,
'text'=>"
$B_text
",
]);
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"
⌁⌇ تم الارسال بنجاح 𖧇.
",
]);
}
if($B_text == "تعطيل التواصل 𖧇." and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>" ⌁⌇ تم تعطيل التواصل 𖧇.
",'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tw.txt") ;
	}
if($B_text == "تفعيل التواصل 𖧇." and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"
⌁⌇ تم تفعيل التواصل 𖧇. 
",'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents('tw.txt','tw');
}
if($B_text =="تفعيل الاشعارات 𖧇." and in_array($B_from_id,$sudo)){
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ تم تفعيل الاشعارات 𖧇.*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents('onstart.txt','start');
} 
if($B_text =="/start" and $onstart == "start" and $B_from_id != $b8bb8){
bot('sendMessage',[
'chat_id'=>$b8bb8,
'text'=>"*𖦼 ɴᴀᴍᴇ 𓄹𓄼 ꒰*[$B_name](tg://user?id=$B_from_id)*꒱
𖦼 ʏᴏᴜʀ ɪᴅ 𓄹𓄼 ꒰*`$B_from_id`*꒱ 
𖣤 ᴜѕᴇʀɴᴀᴍᴇ 𓄹𓄼 ꒰*@$user*꒱
⌁⌇ ᴍᴇᴍⲃᴇʀs 𓄹𓄼 ꒰*$MOhaMMed*꒱
⌁⌇ тɪᴍᴇ 𓄹𓄼 ꒰ *$B_date*:*$aa* ꒱
 *",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
}
if($B_text =="تعطيل الاشعارات 𖧇." and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ تم تعطيل الاشعارات 𖧇.*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
])
]);
unlink("onstart.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($B_text == "الاذاعة 𖧇." and in_array($B_from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"* ⌁⌇ أنت الان في قسم الاذاعة 𖧇.*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رسالة 𖧇."],['text'=>"صورة 𖧇."]
],
[
['text'=>"فيديو 𖧇."],['text'=>"ملصق 𖧇."]
],
[
['text'=>"ملف 𖧇."],['text'=>"صوت 𖧇."]
],
[
['text'=>"ماركدوان 𖧇."],['text'=>"هتميل 𖧇."]
],
[
['text'=>"توجيه عام 𖧇."],['text'=>"للكل 𖧇."]
],
[
['text'=>"توجيه خاص 𖧇."]
],
[
['text'=>"رجوع ࿂."]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($B_text == "الغاء 𖤬."){
	unlink("send.txt");
	}
if($B_text == "الغاء 𖤬." and $send != null){
	unlink('send.txt');
	bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"* ⌁⌇ تم الغاء الامر ، أنتظر خمس ثواني 𖧇.*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
]);
sleep(4);
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"* ⌁⌇ لقد عُدت ألى القائمة الخاصه بالاذاعة 𖧇.
*",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رسالة 𖧇."],['text'=>"صورة 𖧇."]
],
[
['text'=>"فيديو 𖧇."],['text'=>"ملصق 𖧇."]
],
[
['text'=>"ملف 𖧇."],['text'=>"صوت 𖧇."]
],
[
['text'=>"ماركدوان 𖧇."],['text'=>"هتميل 𖧇."]
],
[
['text'=>"توجيه عام 𖧇."],['text'=>"للكل 𖧇."]
],
[
['text'=>"توجيه خاص 𖧇."]
],
[
['text'=>"رجوع ࿂."]
],
],
])
]);}
//»»»»»»»»»»»»»»»»»»
if($B_text == "رسالة 𖧇." and in_array($B_from_id,$sudo)){
	file_put_contents('send.txt','txt');
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ أرسل الان الرسالة 𖧇.
⌁⌇ سوف تصل ألئ 𖧇.
꒰$memberscount꒱*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"الغاء 𖤬."]
],
],
'resize_keyboard'=>true
])
]);
}
if($B_text == "صورة 𖧇." and in_array($B_from_id,$sudo)){
	file_put_contents('send.txt','photo');
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"
*⌁⌇ أرسل الان الصورة 𖧇.
⌁⌇ سوف تصل ألئ 𖧇.
꒰$memberscount꒱*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"الغاء 𖤬."]
],
],
'resize_keyboard'=>true
])
]);
}
	if($B_text == "فيديو 𖧇." and in_array($B_from_id,$sudo)){
		file_put_contents('send.txt','video');
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"
*⌁⌇ أرسل الان الفيديو 𖧇.
⌁⌇ سوف تصل ألئ 𖧇.
꒰$memberscount꒱*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"الغاء 𖤬."]
],
],
'resize_keyboard'=>true
])
]);
	}
	if($B_text == "ملصق 𖧇." and in_array($B_from_id,$sudo)){
	file_put_contents('send.txt','sticker');
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ أرسل الان الملصق 𖧇.
⌁⌇ سوف تصل ألئ 𖧇.
꒰$memberscount꒱*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"الغاء 𖤬."]
],
],
'resize_keyboard'=>true
])
]);
}
	if($B_text == "ملف 𖧇." and in_array($B_from_id,$sudo)){
	file_put_contents('send.txt','file');
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ أرسل الان الملف او متحركة 𖧇.
⌁⌇ سوف تصل ألئ 𖧇.
꒰$memberscount꒱*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"الغاء 𖤬."]
],
],
'resize_keyboard'=>true
])
]);
}
	if($B_text == "صوت 𖧇." and in_array($B_from_id,$sudo)){
		file_put_contents('send.txt','music');
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ أرسل الان الصوت  𖧇.
⌁⌇ سوف تصل ألئ 𖧇.
꒰$memberscount꒱*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"الغاء 𖤬."]
],
],
'resize_keyboard'=>true
])
]);
}
	if($B_text == "ماركدوان 𖧇." and in_array($B_from_id,$sudo)){
		file_put_contents('send.txt','Markdown');
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ أرسل الان رسالة ماركدوان 𖧇.
⌁⌇ سوف تصل ألئ 𖧇.
꒰$memberscount꒱*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"الغاء 𖤬."]
],
],
'resize_keyboard'=>true
])
]);
}

if($B_text == "هتميل 𖧇." and in_array($B_from_id,$sudo)){
		file_put_contents('send.txt','HTML');
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ أرسل الان رسالة هُتميل 𖧇.
⌁⌇ سوف تصل ألئ 𖧇.
꒰$memberscount꒱*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"الغاء 𖤬."]
],
],
'resize_keyboard'=>true
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($B_from_id == $b8bb8 and $B_text != "الغاء 𖤬."){
if($B_text != 'الغاء 𖤬.' and $send == "txt" and in_array($B_from_id,$sudo)){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$B_text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($B_text != 'الغاء 𖤬.' and $send == 'photo'){
	for($i=0;$i<count($members); $i++){
bot('sendphoto', [
'chat_id'=>$members[$i],
'photo'=>$photo_id,
'caption'=>$B_caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($B_text != 'الغاء 𖤬.' and $send == 'video'){
	for($i=0;$i<count($members); $i++){
bot('Sendvideo',[
'chat_id'=>$members[$i],
'video'=>$video_id,
'caption'=>$B_caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($B_text != 'الغاء 𖤬.' and $send == 'sticker'){
	for($i=0;$i<count($members); $i++){
bot('Sendsticker',[
'chat_id'=>$members[$i],
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($B_text != 'الغاء 𖤬.' and $send == 'file'){
	for($i=0;$i<count($members); $i++){
 bot('SendDocument',[
'chat_id'=>$members[$i],
'document'=>$file_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($B_text != 'الغاء 𖤬.' and $send == 'music' and $music){
	for($i=0;$i<count($members); $i++){
 bot('Sendaudio',[
'chat_id'=>$members[$i],
'audio'=>$music_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($B_text != 'الغاء 𖤬.' and $send == 'music' and $voice){
	for($i=0;$i<count($members); $i++){
 bot('Sendvoice',[
'chat_id'=>$members[$i],
'voice'=>$voice_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($B_text != 'الغاء 𖤬.' and $send == 'Markdown'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$B_text",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($B_text != 'الغاء 𖤬.' and $send == 'HTML'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$B_text",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
}
if($B_text == "الغاء 𖤬." and in_array($B_from_id,$sudo)){
unlink("sting.txt") ;
unlink('send.txt');
}
if($B_text =="تفعيل التوجية 𖧇." and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ تم تفعيل توجيهات الرسائل 𖧇.*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("reply.txt","yhya");
} 
if($B_from_id == $b8bb8){}else{
if($B_message and $reply == "yhya" and $B_from_id != $b8bb8){
bot('forwardMessage', [
'chat_id'=>$b8bb8,
'from_chat_id'=>$B_from_id,
'message_id'=>$B_message->message_id
]);
}}
	if($B_text == "تعطيل التوجية 𖧇." and in_array($B_from_id,$sudo)){
		bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ تم تعطيل التوجية 𖧇.*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("reply.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($B_text == "حظر خاص 𖧇." and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"⌁⌇ ارسل ايدي الشخص 𖧇.",
]);
file_put_contents("sting.txt","band");} 

if(preg_match('/^()(\S{5,32})/i',$B_text) and $sting == "band" and in_array($B_from_id,$sudo)){
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"
⌁⌇ تم حظرة بنجاح 𖧇.
[$B_text](tg://user?id=$B_text) 
",'reply_to_message_id'=>$B_message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$B_text, 
'text'=>"⌁⌇ عذراً عزيزي لقد تم حظرك ،
⌁⌇ لاتستطيع استخدام البوت ،
⌁⌇ عليك مراسله المطور 𖧇.
⌁ @ooooox ⌁",
]);
file_put_contents("band_id.txt",$B_text."\n",FILE_APPEND);
unlink("sting.txt");
} 

/*end siting admin ⚙️ */
if($B_text =="الغاء الحظر خاص 𖧇." and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
	'chat_id'=>$B_chat_id, 
	'text'=>"⌁⌇ ارسل ايدي العضو 𖧇.",
]) ;
file_put_contents("sting.txt","unkband");} 
if($B_text =="$B_text" and $sting == "unkband" and in_array($B_from_id,$sudo)){
	$a = str_replace("$B_text","",file_get_contents("band_id.txt"));
        file_put_contents("band_id.txt",$a);
	bot('sendMessage',[
	'chat_id'=>$B_chat_id, 
	'text'=>"⌁⌇ تم الغاء حظره 𖧇.
[$B_text](tg://user?id=$B_text) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$B_text, 
	'text'=>"⌁⌇ تم الغاء الحظر عنك ، تستطيع الان استخدام البوت 𖧇.", 
]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
if ($B_text =="تعيين رسالة ستارات 𖧇." and in_array($B_from_id,$sudo)){
file_put_contents("sting.txt","start1");
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"
⌁⌇ ارسل رسالة للـ /start 𖧇.
⌁⌇ يمكنك وضع ماركدوان 𖧇.
⌁⌇ يمكنك ان تضع اسم المرسل بشرط أن يكون في حاصرتين {}
⌁⌇ هكذا {الاسم} 𖧇.
",
]);
}
if($B_text and $sting =="start1" and in_array($B_from_id,$sudo)){
file_put_contents("start.txt","$B_text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ تم حفظ نص ستارات 𖧇.
/start
{ $B_text }*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
])
]);
}
//»»»»»»»»»»»»»»»»»»
if ($B_text =="وضع تعليمات 𖧇." and in_array($B_from_id,$sudo)){
file_put_contents("sting.txt","help");
bot('sendMessage',[
'chat_id'=>$B_chat_id,
'text'=>"
⌁⌇ ارسل رسالة للـ /help 𖧇.
⌁⌇ يمكنك وضع تعليمات عن ألبوت وماذا يفعل 𖧇.
⌁⌇ يمكنك وضع ماركدوان 𖧇.
⌁⌇ يمكنك ان تضع اسم المرسل بشرط أن يكون في حاصرتين {}
⌁⌇ هكذا {الاسم} 𖧇.
",
]);
file_put_contents("sting.txt","help");}
if($B_text and $sting =="help" and in_array($B_from_id,$sudo)){
file_put_contents("help","txt"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$B_chat_id,
'text'=>"*⌁⌇ تم حفظ رسالة تعليمات بنجاح 𖧇.
/help
{ $hkok } *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
])]);unlink('sting.txt');file_put_contents('hkok.txt',$B_text);}
//»»»»»»»»»»»»»»»»»»
$B_update     = json_decode(file_get_contents('php://input'));
$B_message = $B_update->message;
$B_message_id = $B_update->message->message_id;
$B_text           = $B_message->text;
$B_chat_id     = $B_message->chat->id;
$user          = $B_update->message->from->username;
$B_from_id     = $B_message->from->id;
$first_name = $B_message->from->first_name;
$type       = $B_update->message->chat->type;
mkdir("Fri3nd_s");
$B_message_id = $B_message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $B_update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($B_text == "توجيه عام 𖧇." and in_array($B_from_id,$sudo)){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$B_chat_id,
    'text'=>"*⌁⌇ أرسل توجيهك الان 𖧇.*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$B_message->message_id
  ]);
  }
if($B_message and $GG1ZZ == "iBadlz" and $B_from_id == $b8bb8){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$B_chat_id,
 'message_id'=>$B_message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$B_chat_id,
 'message_id'=>$B_message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$B_chat_id,
          'text'=>"*⌁⌇ تم توجية رسالتك إلى 𖧇.
⌁⌇ ᴍᴇᴍⲃᴇʀs 𓄹𓄼 ꒰*$MOhaMMed*꒱
⌁⌇ ɢʀoᴜᴘs 𓄹𓄼 ꒰*$MoHaMMedd*꒱
⌁⌇ тɪᴍᴇ 𓄹𓄼 ꒰ *$B_date*:*$aa* ꒱
 *
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$B_message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($B_text and $type == "private" and !in_array($B_from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$B_from_id\n",FILE_APPEND);
}
if($B_text and $type == "supergroup" and !in_array($B_chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$B_chat_id\n",FILE_APPEND);
}
if($B_text == "خاص 𖧇." and $B_from_id == $b8bb8){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$B_chat_id,
    'text'=>"
*⌁⌇ ارسل رسالتك ، تستطيع استخدام الماركدوان 𖧇.*
",'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$B_message->message_id
  ]);
  }
if($B_message and $GG1ZZ == "JJ119" and $B_from_id == $b8bb8){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$B_text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$B_chat_id,
          'text'=>"*
*⌁⌇ تم ارسال رسالتك للاعضاء إلى 𖧇.
⌁⌇ ᴍᴇᴍⲃᴇʀs 𓄹𓄼 ꒰*$MOhaMMed*꒱
⌁⌇ тɪᴍᴇ 𓄹𓄼 ꒰ *$B_date*:*$aa* ꒱
 *",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$B_message->message_id,
     'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) ]);}

if ($B_text == "للكل 𖧇." and in_array($B_from_id,$sudo)){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$B_chat_id,
    'text'=>"*⌁⌇ أرسل رسالتك تستطيع استخدام الماركدوان 𖧇.*",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$B_message->message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($B_message and $GG1ZZ == "LE_C4_KR" and $B_from_id == $b8bb8){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$B_text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$B_text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$B_chat_id,
          'text'=>"
*⌁⌇ تم أرسال رسالتك إلى 𖧇.
⌁⌇ ᴍᴇᴍⲃᴇʀs 𓄹𓄼 ꒰*$MOhaMMed*꒱
⌁⌇ ɢʀoᴜᴘs 𓄹𓄼 ꒰*$MoHaMMedd*꒱
⌁⌇ тɪᴍᴇ 𓄹𓄼 ꒰ *$B_date*:*$aa* ꒱
 *",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$B_message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($B_text == "خاص توجيه 𖧇." and in_array($B_from_id,$sudo)){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$B_chat_id,
    'text'=>"*⌁⌇ أرسل توجيهك الان 𖧇.*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$B_message->message_id
  ]);
  }
if($B_message and $GG1ZZ == "od_1j" and $B_from_id == $sdmin){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$B_chat_id,
 'message_id'=>$B_message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$B_chat_id,
          'text'=>"*⌁⌇ تم توجيه رسالتك إلى 𖧇.
⌁⌇ ᴍᴇᴍⲃᴇʀs 𓄹𓄼 ꒰*$MOhaMMed*꒱
⌁⌇ тɪᴍᴇ 𓄹𓄼 ꒰ *$B_date*:*$aa* ꒱
 *
",'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$B_message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($B_text == "الاحصائيات 𖧇." || $B_text == "المشتركين 𖧇." and in_array($B_from_id,$sudo)){
	bot('sendMessage',[
	'chat_id' =>$B_chat_id, 
	'text'=>"
*⌁ الاعضاء ♡ :
⌁⌇ ᴍᴇᴍⲃᴇʀs 𓄹𓄼 ꒰*$MOhaMMed*꒱
⌁ المجموعات ♡ :
⌁⌇ ɢʀoᴜᴘs 𓄹𓄼 ꒰*$MoHaMMedd*꒱
⌁ الوقت ♡ :
⌁⌇ тɪᴍᴇ 𓄹𓄼 ꒰ *$B_date* *$aa* ꒱
 
𖡋 : ⲃɪʟʟɪᴇ xᴅ𖠜.*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$B_message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
]) 
]);}
//»»»»»»»»»»»»»»»»»»
$g = str_replace('http://','',$SAIEDZip14);
function SAIEDZip($SAIEDZip1, $SAIEDZip2){
$SAIEDZip4 = realpath($SAIEDZip1);
$SAIEDZip = new ZipArchive();
$SAIEDZip->open($SAIEDZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$SAIEDZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($SAIEDZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($SAIEDZip3 as $SAIEDZip5 => $SAIEDZip6){
if(!$SAIEDZip6->isDir()){
$SAIEDZip7 = $SAIEDZip6->getRealPath();
$SAIEDZip8 = substr($SAIEDZip7, strlen($SAIEDZip4) + 1);
$SAIEDZip->addFile($SAIEDZip7, $SAIEDZip8);
}}
$SAIEDZip->close();
}
function SAIEDZip1($SAIEDZip9, $SAIEDZip10 = 2){
$SAIEDZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$SAIEDZip12=floor((strlen($SAIEDZip9) - 1) / 3);
return sprintf("%.{$SAIEDZip10}f", $SAIEDZip9 / pow(1024, $SAIEDZip12)) . @$SAIEDZip11[$SAIEDZip12];
}
$SAIEDZip15 = json_decode(file_get_contents('php://input'));
$SAIEDZip16 = $SAIEDZip15->message;
$SAIEDZip17 = $SAIEDZip16->text;
$SAIEDZip18 = $SAIEDZip16->message_id;
if($SAIEDZip17 == "نسخ احتياطي 𖧇." and $B_from_id == $b8bb8){
$RSAIED = "$b8bb8";
date_default_timezone_set("Asia/Damascus");
$SAIEDZip13 = date("{h-i-s}");
SAIEDZip('',"Backup-$SAIEDZip13.zip");
bot('senddocument',[
'chat_id'=>$RSAIED,
'document'=>"https://$g/Backup-$SAIEDZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
ABOD : ". @vfvvvv ." ♥
File size : ".SAIEDZip1(filesize("Backup-$SAIEDZip13.zip"))." 🏷",
'reply_to_message_id'=>$SAIEDZip18,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$B_message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"رجوع ࿂."]
], 
], 
'resize_keyboard'=>true
])]);
unlink("Backup-$SAIEDZip13.zip");
}