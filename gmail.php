
<?php
function sendMail($to,$title,$content){
 
    require_once("phpmailer/class.phpmailer.php"); 
    require_once("phpmailer/class.smtp.php");
    $mail = new PHPMailer();
    $mail->isSMTP();
 
    $mail->SMTPAuth=true;
 
    $mail->Host = 'mail.google.com'';
 
    $mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);
 
    $mail->SMTPSecure = 'ssl';
 
    // 可选465或587
    $mail->Port = 465;
 
    $mail->Hostname = 'elctp12kin.netlify.app';
 
    $mail->CharSet = 'UTF-8';
 
    $mail->FromName = '第三屆澳門高中生手機網頁設計技能大賽作品提交';
 
    $mail->From = 'elctp12kin.netlify.app';
 
    $mail->isHTML(true); 
 
    $mail->addAddress($to,'lileekath456@gmail.com');
  
    $mail->Subject = $title;
 
    $mail->Body = $content;
 
    $mail->addAttachment($img);
 
    $status = $mail->send();
 
    if($status) {
        return true;
    }else{
        return false;
    }
}
 
$msgname = $_POST["發現中小企"];
$msgcontent = $_POST["發現中小企"];
$content = "姓名：{$nametextbox}".".
            "所發現的企業：{$onetextbox}".
            "對企業的意見:{$comments}";
?>
