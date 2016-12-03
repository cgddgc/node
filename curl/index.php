<?php
//function curl_login($user,$passwd){
	$login_url="http://jwxt.jnu.edu.cn/Login.aspx";
	$cookie_file=tempnam('/temp','cookie');
	$url="http://jwxt.jnu.edu.cn/ValidateCode.aspx";
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$login_url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	//curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);
	//curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
	$content=curl_exec($ch);
	curl_close($ch);
	//echo $cookie_file;
//function get_data($url){
	
	$curl=curl_init();
	curl_setopt($curl,CURLOPT_HEADER, 0);
	curl_setopt($curl,CURLOPT_URL,$url);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
	//curl_setopt($curl,CURLOPT_POST,1);
	curl_setopt($curl,CURLOPT_COOKIEFILE,$cookie_file);
	//curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
	$output=curl_exec($curl);
	curl_close($curl);
	$fp=fopen("code.jpg","w");
	fwrite($fp,$output);
	fclose($fp);
	$code="";
	//var_dump($output);
	//return $output;
//}
//curl_login($user,$passwd);
//echo "<pre>";
function code(){
	$cfile=curl_file_create('E:\Tools\wamp\www\curl\code.jpg','image/jpg','pic.jpg');
	$post=array('key'=>'aa6cea4c890aa2f0b0b9b5cb9ed04a21','codeType'=>'1004','image'=>$cfile);
	//$post=json_encode($post);
	$curl=curl_init();
	curl_setopt($curl, CURLOPT_HEADER, 0);
	curl_setopt($curl,CURLOPT_URL,"http://op.juhe.cn/vercode/index");
	//curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($curl,CURLOPT_POST,1);
	//curl_setopt($curl,CURLOPT_COOKIEFILE,$cookie_file);
	curl_setopt($curl,CURLOPT_POSTFIELDS,$post);
	$output=curl_exec($curl);
	curl_close($curl);
	$output=json_decode($output,true);
	$result=$output['result'];
	return $result;
}
	$data=array("__VIEWSTATE"=>"/wEPDwUKMjA1ODgwODUwMg9kFgJmD2QWAgIBDw8WAh4EVGV4dAUk5pqo5Y2X5aSn5a2m57u85ZCI5pWZ5Yqh566h55CG57O757ufZGRkQHzthBmMTOkUl+ppvHZCGZFIgkY=","__VIEWSTATEGENERATOR"=>"C2EE9ABB","__EVENTVALIDATION"=>"/wEWBwKa9aHcDAKDnbD2DALVp9zJDAKi+6bHDgKC3IeGDAKt86PwBQLv3aq9BwKtfLsN0olpYtRu4kxVBpo9Oquj","txtYHBS"=>"2013051695","txtYHMM"=>"051695","btnLogin"=>"µÇ++++Â¼","txtFJM"=>$code);
	$cc=curl_init();
	curl_setopt($cc,CURLOPT_URL,$login_url);
	curl_setopt($cc, CURLOPT_HEADER, 0);
	curl_setopt($cc,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($cc,CURLOPT_POST,1);
	curl_setopt($cc,CURLOPT_COOKIEFILE,$cookie_file);
	curl_setopt($cc,CURLOPT_POSTFIELDS,$data);
	$want=curl_exec($cc);
	curl_close($cc);
//echo "</pre>";
//$code=code();
//echo $code;
echo $want;
?>