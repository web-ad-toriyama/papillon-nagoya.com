<?php

require_once __DIR__ . '/../common/start.php';

$templateFile = '/admin/contact/index.html';

if ($_POST['submit']) {
    $post = $_POST;
    $image = null;

    if($post['img']){
        $image = $post['img'];
    }

    $subject = 'DXHP '.SHOP_NAME.'様より修正依頼があります。';

    $smarty->assign('post',$post);
    $mail_template_file = '/admin/contact/mail.html';
    $body = $smarty->fetch(VIEW_DIR.$mail_template_file);

    $flg = send_email($subject, $body, '修正依頼ページ', $image);
    
    if($image){
        del_image_file(IMG_TEMP_DIR . '/' . $post['img']);    
    }
    if($flg){
       $msg = '修正依頼の送信が完了しました。';
    }else{
       $msg = '修正依頼の送信に失敗しました。';
    }
    
    $smarty->assign('msg', $msg);
    
}

require_once __DIR__ . '/../common/display.php';


function send_email($subject, $body,  $fromname , $image=null){

    $flg = false;
    $transport = \Swift_SmtpTransport::newInstance(SMTP_HOST, SMTP_PORT)
        ->setUsername(MAIL_ID)
        ->setPassword(MAIL_PW);
    
    $mailer = \Swift_Mailer::newInstance($transport);
    $message = \Swift_Message::newInstance($subject);
    $message->setFrom(CONTACT_EMAIL,$fromname);
    $message->setTo(CONTACT_EMAIL);
    $message->setBody($body);
    if($image){
        $ext = substr($image, strrpos($image, '.') + 1);
        $message->attach(
            Swift_Attachment::fromPath(IMG_TEMP_DIR . '/' .$image)->setFilename('添付画像.'.$ext)
        );
    }    
    if($mailer->send($message)){
        $flg = true;
    }

    return $flg;
}

function del_image_file($file_name)
{
    global $log;
    if (File::exists($file_name)) {
            $file = new File($file_name);
            if ($file->delete() === true) {
                    return true;
            } else {
                    $log->addError('画像の削除に失敗しました',['ファイル名'=>$file_name]);
                    return false;
            }
    } else {
            $log->addError('画像が存在していません',['ファイル名'=>$file_name]);
            return false;
    }
    return false;
}