<?php

$ndata = $_POST['data'];

//echo $udata;
//print_r($udata);
//var_dump($udata);

//echo "I got your value! $udata";

	$data = $ndata;

	//print_r($data);

	// $data = array(
	//   "regNumber" => $carreg,
	//   "regDate"=> $year,
	//   "make"=> $carname,
	//   "model"=> $model,
	//   "variant"=> $vari,
	//   "ncbPolicy"=> $intval,
	//   "claimStatus"=> $claimstat,
	//   "idv"=> $idv,
	//   "insurancePerecentage"=> $insPer,
	//   "addonType"=> $addonType
	// );

	$url_send ="http://52.32.253.76:8080/webapp/api/business/getFinalPremium";

	$str_data = json_encode($data);

	//print_r($str_data);

	function sendPostData($url, $post) {
	  $ch = curl_init($url);
	  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json"));
	  curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	  $result = curl_exec($ch);
	  curl_close($ch);
	  //$json = json_decode($result, true);
	  //return $json;
	  
	  return $result;
	}
	//echo " " . sendPostData($url_send, $str_data);
	$resp = sendPostData($url_send, $str_data);

	//print_r($resp);
	//echo $resp;

	echo $resp;
?>
