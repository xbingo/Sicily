<?php

function wrap_html($msg) {
	return "<html><head><title>Automatic generated by Sicily Online Judge System</title></head>" .
	"<body>$msg</body></html>";
}

function binding_mail($username, $email, $netid, $uid, $authcode) {
	return wrap_html("<p>Thanks for using Sicily Online Judge System.</p>
<p>You are going to bind your account to a specific netid account in SYSU.</p>
<p>Here is your information.</p>
<hr>
Username: $username<br>
Email: $email<br>
Netid: $netid<br>
<hr>
<p>To validate your netid account, please click on this link.</p>
<p><a href='http://soj.me/process.php?act=AuthBinding&uid=$uid&authcode=$authcode'>
http://soj.me/process.php?act=AuthBinding&uid=$uid&authcode=$authcode</a></p>
<hr>
<p>Please notice that this authorization link will expire in 15 minutes.</p>");
}

function rstpwd_mail($username, $email, $uid, $authcode) {
	return wrap_html(" <p>Thanks for using Sicily Online Judge System.</p>
<p>You are going to bind your account to a specific netid account in SYSU.</p>
<p>Here is your information.</p>
<hr>
Username: $username<br>
Email: $email<br>
<hr>
<p>To reset your password, please click on this link.</p>
<p><a href='http://soj.me/process.php?act=NewPassword&uid=$uid&authcode=$authcode'>
http://soj.me/process.php?act=NewPassword&uid=$uid&authcode=$authcode</a></p>
<hr>
<p>Please notice that this reset link will expire in 15 minutes.</p>");
}

?>