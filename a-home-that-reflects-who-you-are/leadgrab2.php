<?php

date_default_timezone_set("Asia/Kolkata");
require_once('functions.php');
$full_name 		= get_field('fullname');
$email 			= get_field('email');
$phone 			= get_field('phone');
$phone_code 	= get_field('phone_code');
$utm_source   = get_field('leadutmsource');
$utm_campaign = get_field('leadutmcampaign');
$utm_medium   = get_field('leadutmmedium');
$utm_term     = get_field('leadutmterm');
$utm_content  = get_field('leadutmcontent');

$date 			= date('Y-m-d H:i:s', time());
$post_dump		= $_POST;
$post_dump 		= json_encode($post_dump);
$post_dump 		= $post_dump;
$form_page 		= get_form_page_url();

$lead_type = "Landing Page | Botanika";
$error = 0;
$error_messages = array();
$output = array(
	'error' => TRUE,
	'error_messages' => array(),
	'success' => FALSE,
);

if($full_name == '') {
	$error_messages['fullname'] = "Please enter your Name";
	$error = 1;
}

if( ($email == '') OR  ( ! valid_email($email)) ) {
	$error_messages['email'] = "Please enter your Email";
	$error = 1;
}

if($phone == '') {
	$error_messages['phone'] = "Please enter your Phone Number";
	$error = 1;
}
		
if($error == 1) {
	$output['error'] = TRUE;
	$output['error_messages'] = $error_messages;
	$output['success'] = FALSE;
	echo json_encode($output);
	exit();
	//header("Location:{$form_page}#leadForm");
	//exit();
}

ini_set("log_errors", 1);
$log_name = date('M-d-Y', time());
ini_set("error_log", "{$log_name}.log");

error_log("\nNew LP Lead | name: '{$full_name}', email: '{$email}', phone: '{$phone}', lead_type: '{$lead_type}', date_captured: '{$date}'\n\n");

/****** LeadStore cURL *****/
$ip = $_SERVER['REMOTE_ADDR'];
$page_url = $form_page;
$url = $page_url;
$query_str = parse_url($url, PHP_URL_QUERY);
parse_str($query_str, $query_params);

$input_params=array(                
'firstname'=>$full_name,
//'lastname'=>$last_name,
'email'=>$email,
'phone_country_code'=>$phone_code,
'phone'=>$phone,
//'city'=> $city,
//'country'=> $country,
//'message'=> $message,
'udf1'=>'',
'udf2'=>'',
'udf3'=>'',
'udf4'=>'',
'udf5'=>'', 
'udf6'=>'',                         
'udf7'=>'',
'udf8'=>'',
'udf9'=>'',
'udf10'=>'',                                                                                    
'ua_ip'=>$ip,
'ua_device'=>'',
'ua_query_url'=>$page_url,
'landing_page_title'=>$lead_type,
'utm_source'=>$utm_source,
'utm_medium'=>$utm_medium,
'utm_campaign'=>$utm_campaign,
'utm_content'=>$utm_content,
'utm_term'=>$utm_term,
'form_data'=>$post_dump,
);  

$fields = $input_params;
$postvars = '';
foreach($fields as $key=>$value) {
$postvars .= $key . "=" . $value . "&";
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://leadstore.in/capture_leads/capture/29");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$postvars);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
/****** LeadStore cURL *****/

/*4QT Leads Tracking Code*/
$posturl = "http://botanika08.realeasy.in/IVR_Inbound.aspx?UID=fourqt&PWD=wn9mxO76f34=&f=m&con=".urlencode($phone)."&email=".urlencode($email)."&name=".urlencode($full_name)."&url='http://botanika.in/l/a-home-that-reflects-who-you-are/&Remark=".urlencode($utm_content)."&Proj=&src=".urlencode($utm_source)."&amob=&city=&location=&ch=ETrading&medium=".urlencode($utm_medium)."&campaign=".urlencode($utm_campaign)."&term=".urlencode($utm_term)."";
$success = file_get_contents($posturl);
error_log($posturl . " - " . $success);	
/*End 4QT*/

ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Botanika | Fine Luxury 4 and 5 BHK Apartments</title>
</head>
<body style="font-family:Arial, sans-serif;font-size:13px;color:#000;background: #f4f4f4;line-height:1.5;padding: 30px;">
	<div style="background: #fff;max-width:550px;display: block;margin: 15px auto;padding: 15px;border-bottom: 6px solid #0032B1;border-top: 6px solid #0032B1;">
		<img src="https://i.imgur.com/PErdR3x.png" alt="Botanika" title="Botanika" style="display: block;margin-bottom:30px; width: 120px;">
		
		<h1 style="font-size: 21px;display:block;margin-bottom: 0;">Landing Page Lead<br></h1>
		<p style="font-size: 15px;font-weight: bold;margin: 0;">Origin: <a href="<?php echo $page_url; ?>"><?php echo $page_url; ?></a></p>
		
		<div style="font-size: 13px;color: #333;display:block;margin: 15px 0 15px;max-width:360px;">
			<p style="font-size: 12px; color: #888;margin: 0 0 6px;"><?php echo date('M d, Y', strtotime($date)); ?></p>
			<p style="margin: 0 0 6px;"><strong>Name: </strong><?php echo ucwords($full_name); ?></p>
			<p style="margin: 0 0 6px;"><strong>Email: </strong><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
			<p style="margin: 0 0 6px;"><strong>Phone: </strong><?php echo $phone; ?></p>

		</div>
		
		<p style="margin-bottom: 0px;">Thanks,<br><strong>Admin</strong></p>
	</div>
</body>
</html>
<?php
$email_message = ob_get_clean();
$subject = 'New Lead - ' . ucwords($lead_type);
require_once('emails_list_testing.php');
//require_once('emails_list_production.php');
send_email($from, $from_name, $to, $to_name, $subject, $email_message, '', $cc_emails, $bcc_emails);
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Botanika | Fine Luxury 4 and 5 BHK Apartments</title>
</head>
	<body style="font-family:Arial, sans-serif;font-size:13px;color:#000;background: #f4f4f4;line-height:1.5;padding: 30px;">
		<div style="background: #fff;max-width:550px;display: block;margin: 15px auto;padding: 30px;border-bottom: 6px solid #0032B1;border-top: 6px solid #0032B1;">
			<img src="https://i.imgur.com/PErdR3x.png" alt="Botanika" title="Botanika" style="display: block;margin-bottom:30px; width: 120px;">
			<p><strong>Greetings from Botanika</strong></p>
			<p>Dear <strong><?php echo ucwords($full_name); ?></strong>,</p>

			<p>Thank you for showing interest in The Botanika</p>
			<p>We offer opulent 3-BHK residences overlooking the Botanical Garden, with ready-to-use and exclusive podium-level amenities in the heart of Gachibowli.</p>
			<p>Experience the finest blend of a great location and a sophisticated community, every day at The Botanika.</p>
			<p style="text-align:center;"><i>To know more about the project, download our floor plans.</i></p>
			<br/>
			<p style="text-align:center;"><a href="http://botanika.in/l/experience-luxury-living-the-botanika-way/pdf/Botanika-Floor-Plans.pdf" style="padding:5px 35px;color:#fff;
			background:#6CA717;font-size:18px;font-weight:bold;text-align:center;text-decoration:none;border-radius:5px;">Download</a></p>		
		</div>
	</body>
</html>
<?php
$emailmessage = ob_get_clean();
/*FRE EMail Trigger*/
$subject = "Thank you for your interest";
$to = $email;
$to_name = ucwords($full_name);
send_email($from, $from_name, $to, $to_name, $subject, $emailmessage, '');
$output['error'] = FALSE;
$output['error_messages'] = array();
$output['success'] = TRUE;
$output['success_message'] = "Thank you! Our team will get in touch with you soon.";
echo json_encode($output);
exit();
?>