<?php
		$openid = $_GET['name'];
		$platform = '';
		$server_id = 1;
		$login_api_url = "http://127.0.0.1:7517";
		$login_api_key = "5499e5dd63be5fe571eb7ad80d4d7570";
		$time = time();
		$pfopenid = "${openid}${platform}";
		$uid=$uid+$pintaimainid;
		$sign = md5("${pfopenid}${time}${uid}${platform}${server_id}${login_api_key}");
		$url = "${login_api_url}?sid=${server_id}&uid=${uid}&gid=${gid}&pf=${platform}&user=${pfopenid}&time=${time}&sign=${sign}";
		$C['login_key'] = "e47b3de8b37d81140ac57f3dd93172e2";

		$data = array(
			'passport'	=> $openid,
			'sid'		=> $server_id,
			'time'		=> $time,
			'key'		=> $C['login_key']
		);
		//ksort($data);
		$data['sign'] = md5(http_build_query($data));
		unset($data['key']);
    	
		$url ="${login_api_url}". '/login?' . http_build_query($data);
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mu Angel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" href="/css/web_play.css">
</head>
<base target="_blank">
<body scroll="no" style="background:#000;">
</div>
<script src="/js/jquery-1.8.3.min.js"></script>
<iframe src="<?php echo $url; ?>"  id='mainFrame' name='mainFrame' scrolling='no' width='100%' height='100%' frameborder='0'></iframe>
</body>
</html>