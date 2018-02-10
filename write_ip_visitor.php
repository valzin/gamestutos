    <? php 
se (! empty ($ _ SERVER ['HTTP_CLIENT_IP'])) {
$ ip = $ _ SERVER ['HTTP_CLIENT_IP'];}
elseif (! empty ($ _ SERVER ['HTTP_X_FORWARDED_FOR'])) {
$ ip = $ _ SERVER ['HTTP_X_FORWARDED_FOR'];} else {
$ ip = $ _ SERVER ['REMOTE_ADDR'];}
?>