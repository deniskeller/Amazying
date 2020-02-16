<?php
if (!empty($_POST['phone'])) {
	$_POST['mail'] = 'aag@amazying.com';
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://lisovskij.ru/ar1.php");
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));
    $response = curl_exec($ch);
    curl_close($ch);
    file_get_contents("https://sms.ru/sms/send?api_id=86257da9-224b-c414-8972-7c06771d0fd2&to=79297140255&msg=".urlencode("Заявка: name=".$_POST['name']." phone=".$_POST['phone'])."&json=1");
	echo 'Отправлено';
}