<?php
 $api_key = 03-yvj8RQZqHQGAxT0wxVw;
 $api_secret = 3hunZP64Xia8uwTeb1XXYXTwrg6IlGBjUe4w;
 $meeting_number = 81344176097;
 $role = 0;
 function  generate_signature ( $api_key, $api_secret, $meeting_number, $role){

	$time = time() * 1000 - 30000;//time in milliseconds (or close enough)
	
	$data = base64_encode($api_key . $meeting_number . $time . $role);
	
	$hash = hash_hmac('sha256', $data, $api_secret, true);
	
	$_sig = $api_key . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);
	print_r(rtrim(strtr(base64_encode($_sig), '+/', '-_'), '='))
	//return signature, url safe base64 encoded
	return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
}?>
<p></p>
