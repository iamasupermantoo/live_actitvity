<?php
@header("Content-type: text/html; charset=utf-8");
require_once(dirname(__FILE__) . '/../common/db.class.php');
require_once(dirname(__FILE__) . '/../common/function.php');
require_once(dirname(__FILE__) . '/../common/CacheFactory.php');
require_once(dirname(__FILE__) . '/../common/session_helper.php');
if (!isset($_SESSION['admin']) || $_SESSION['admin'] != true) {
	$_SESSION['admin'] = false;
	$returndata = array('code'=>-100,"message"=>"您的登录已经过期，请重新登录");
	echo json_encode($returndata);
	exit();
}
$action=$_GET['action'];
switch ($action){
	case 'switchrentweixin':
		setrentweixin();
		break;
	case 'setappid':
		setappid();
		break;
	case 'setappsecret':
		setappsecret();
		break;
	case 'savewxpay':
		savewxpay();
		break;
}
//设置是否借用公众号
function setrentweixin(){
	$rentweixin=isset($_POST['rentweixin'])?intval($_POST['rentweixin']):2;
	if(empty($rentweixin)){
		$resultdata=array('code'=>-2,'message'=>'参数错误');
		echo json_encode($resultdata);
		return;
	}
	
	$load=Loader::getInstance();
	$load->model('Wall_model');
	$data=array('rentweixin'=>$rentweixin);
	$result=$load->wall_model->setConfig($data);

	if($result){
		$resultdata=array('code'=>1,'message'=>'修改成功');
		echo json_encode($resultdata);
		return;
	}else{
		$resultdata=array('code'=>-1,'message'=>'修改失败');
		echo json_encode($resultdata);
		return;
	}
}
function savewxpay(){
	$mchid=isset($_POST['mchid'])?strval($_POST['mchid']):"";
	$mchsecret=isset($_POST['mchsecret'])?strval($_POST['mchsecret']):"";
	$mchid=trim($mchid);
	$mchsecret=trim($mchsecret);
	$apiclient_cert=isset($_POST['apiclient_cert'])?strval($_POST['apiclient_cert']):"";
	$apiclient_key=isset($_POST['apiclient_key'])?strval($_POST['apiclient_key']):"";
	require_once '../common/FileUploadFactory.php';
	$fuf=new FileUploadFactory('file' );
	$certfile=empty($apiclient_cert)?'':$fuf->SaveFile($apiclient_cert,'pem','');
	$keyfile=empty($apiclient_key)?'':$fuf->SaveFile($apiclient_key,'pem','');
	$certfile=$certfile==''?0:$certfile['id'];
	$keyfile=$keyfile==''?0:$keyfile['id'];
	$data=array(
			'mch_id'=>$mchid,
			'mchsecret'=>$mchsecret,
			'apiclient_cert'=>$certfile,
			'apiclient_key'=>$keyfile,
	);

	$load=Loader::getInstance();
	$load->model('Weixin_model');
	$result=$load->weixin_model->setConfig($data);
	if($result){
		//微信的配置写入缓存
		$resultdata=array('code'=>1,'message'=>'修改成功');
		echo json_encode($resultdata);
		return;
	}else{
		$resultdata=array('code'=>-1,'message'=>'修改失败');
		echo json_encode($resultdata);
		return;
	}
}
//设置appid
function setappid(){
	$appid=isset($_POST['appid'])?strval($_POST['appid']):'';
	$appid=trim($appid);
	if(empty($appid)){
		$resultdata=array('code'=>-2,'message'=>'参数错误');
		echo json_encode($resultdata);
		return;
	}

    $load=Loader::getInstance();
	$load->model('Weixin_model');
	$data=array('appid'=>$appid);
	$result=$load->weixin_model->setConfig($data);

	if($result){
		//微信的配置写入缓存
		$resultdata=array('code'=>1,'message'=>'修改成功');
		echo json_encode($resultdata);
		return;
	}else{
		$resultdata=array('code'=>-1,'message'=>'修改失败');
		echo json_encode($resultdata);
		return;
	}
}
//设置appsecret
function setappsecret(){
	$appsecret=isset($_POST['appsecret'])?strval($_POST['appsecret']):'';
	$appsecret=trim($appsecret);
	if(empty($appsecret)){
		$resultdata=array('code'=>-2,'message'=>'参数错误');
		echo json_encode($resultdata);
		return;
	}

    $load=Loader::getInstance();
	$load->model('Weixin_model');
	$data=array('appsecret'=>$appsecret);
	$result=$load->weixin_model->setConfig($data);

	if($result){
		//微信的配置写入缓存
		$resultdata=array('code'=>1,'message'=>'修改成功');
		echo json_encode($resultdata);
		return;
	}else{
		$resultdata=array('code'=>-1,'message'=>'修改失败');
		echo json_encode($resultdata);
		return;
	}
}
