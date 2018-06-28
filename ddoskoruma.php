<?php
 /**
  * www.bugresearcher.com
  
**/
require_once("libraries/TeamSpeak3/TeamSpeak3.php");
require_once("ayar.php");
###
try{
	$ts['bot'] = TeamSpeak3::factory("serverquery://".$bot['query_login'].":".$bot['query_password']."@".$bot['server_ip'].":".$bot['query_port']."/?server_port=".$bot['server_port']."&blocking=0");
	$ts['bot']->selfUpdate(array('client_nickname'=>$bot['query_nickname']));
}catch(TeamSpeak3_Adapter_ServerQuery_Exception $e){
	echo $e->getMessage();
}
// Paket Ölcer.
while(true){
	sleep(1);
	$sunucucek = $ts['bot']->getInfo();
	$paketolc = (float)$sunucucek["virtualserver_total_packetloss_total"]->toString() *100;
	
	echo $paketolc;
	if($paketolc >= 49.9999) {
		$ts['bot']->message("[COLOR=#CF000F][B]Saldırı Tespit Edildi Paket Kaybınız ".$paketolc."%)[/COLOR]");
		sleep(30);
		continue;
	}
	else if($paketolc >= 29.9999)
	{	
		$ts['bot']->message("[COLOR=#F89406][B]Saldırı Tespit Edildi Paket Kaybınız ".$paketolc."%)[/COLOR]");
		sleep(30);
		continue;
	}
	else if($paketolc >= 18.9999)
	{	
		$ts['bot']->message("[COLOR=#F2784B][B]Saldırı Tespit Edildi Paket Kaybınız ".$paketolc."%)[/COLOR]");
		sleep(30);
		continue;
	}
	else if($paketolc >= 9.9999)
	{
		$ts['bot']->message("[COLOR=#BDC3C7][B]Saldırı Tespit Edildi Paket Kaybınız ".$paketolc."%)[/COLOR]");
		sleep(30);
		continue;
	}
}