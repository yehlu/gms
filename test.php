<?php
include("common.php");
use RMS\PushNotificationsBundle\Message\AndroidMessage;

class PushDemoController extends Controller
{
    public function pushAction()
    {
        $message = new AndroidMessage();
        $message->setGCM(true);
        $message->setMessage('Oh my! A push notification!');
    }
}
?>