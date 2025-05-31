<?php
		$username = $_GET['acc'];
		$sid = 1;
		$order_id = date("ymdHis") . mt_rand(100, 999);
		$time = time();
		$amount = 1000000;
		$pay_api_url = "http://127.0.0.1:7517";
        $C['recharge_key'] = "bb74afdf84a84a1c6ff3b5bb05b93eae";
        $data = array(
			'passport'	=> $username,
			'sid'		=> $sid,
			'money'		=> $amount,
			'billno'	=> $order_id,
			'time'		=> $time,
			'key'		=> $C['recharge_key']
		);
		$data['sign'] = md5(http_build_query($data));
		unset($data['key']);
		$url =  $pay_api_url.'/pay?' . http_build_query($data);

        $recharge_result  = file_get_contents($url);
        $recharge_result = json_decode($recharge_result, true);
		if($recharge_result["status"]==1)
			{
				echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
				echo "<script>alert('Recharge successfully ".$amount." Diamonds, enjoy the game!');location.href='javascript:history.back()';</script>";
			}
			else{	
				echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
				echo "<script>alert('Recharge failed, please try again later!');location.href='javascript:history.back()';</script>";
			}
?>