<?php
namespace App\Utilities;

use Exception;
use Illuminate\Routing\UrlGenerator;
use Swift_Attachment;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class sendEmail
{
    private $url;

    public function __construct(UrlGenerator $url)
    {
        $this->url = $url;
    }

    public static function sendMail($emailsTo, $detailCampagnesEchec, $deletedAt)
    {

        $transport = (new Swift_SmtpTransport(env('MAIL_HOST')))
            ->setUsername(env('MAIL_USERNAME'))
            ->setPassword(env('MAIL_PASSWORD'))
            ->setAuthMode('login')
        ;

        $mailer  = new Swift_Mailer($transport);

        $data = [
            'deletedAt'         => $deletedAt,
            'detailCampagnesEchec'   => $detailCampagnesEchec
        ];

        $message = (new Swift_Message('RECAP ECHEC - CAMPAGNE SMS'))
            ->setContentType("text/html")
            ->setFrom(env('MAIL_FROM_ADDRESS'))
            ->setTo($emailsTo)
            ->setBody(view('emails.email')->with($data))
            ->setPriority(1)
        ;

        try {
            $mailer->send($message);
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function sendMailFinish($emailsTo, $finishedAt, $code)
    {

        $transport = (new Swift_SmtpTransport(env('MAIL_HOST')))
            ->setUsername(env('MAIL_USERNAME'))
            ->setPassword(env('MAIL_PASSWORD'))
            ->setAuthMode('login')
        ;

        $mailer  = new Swift_Mailer($transport);

        $data = [
            'finishedAt'   => $finishedAt,
            'code'         => $code,
        ];

        $message = (new Swift_Message('CAMPAGNE SMS TERMINE'))
            ->setContentType("text/html")
            ->setFrom(env('MAIL_FROM_ADDRESS'))
            ->setTo($emailsTo)
            ->setBody(view('emails.email-finish')->with($data))
            ->setPriority(1)
        ;

        try {
            $mailer->send($message);
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function sendMailAlert($emailsTo, $emailCc)
    {

        $transport = (new Swift_SmtpTransport(env('MAIL_HOST')))
            ->setUsername(env('MAIL_USERNAME'))
            ->setPassword(env('MAIL_PASSWORD'))
            ->setAuthMode('login')
        ;

        $mailer  = new Swift_Mailer($transport);

        $message = (new Swift_Message('Alerte incohérence de donnée'))
            ->setContentType("text/html")
            ->setFrom(env('MAIL_FROM_ADDRESS'))
            ->setTo($emailsTo)
            ->setCc($emailCc)
            ->setBody(view('emails.email-alert'))
            ->setPriority(1)
        ;

        try {
            $mailer->send($message);
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function sendReleveByMail($emailTo,  $file_path, $date_french)
    {
        $transport = (new Swift_SmtpTransport(env('MAIL_HOST')))
            ->setUsername(env('MAIL_USERNAME'))
            ->setPassword(env('MAIL_PASSWORD'))
            ->setAuthMode('login')
        ;

        $mailer  = new Swift_Mailer($transport);

        $message = (new Swift_Message('RELEVE DE COMPTE POUR '.strtoupper($date_french)))
            ->setContentType("text/html")
            ->setFrom(env('MAIL_FROM_ADDRESS'))
            ->setTo($emailTo)
            ->setBody(view('emails.email-releve', compact('date_french')))
            ->setPriority(1)
        ;

        //$file_path = $this->url->to('/').'/'.$filename;

        // Attache le releve au mail
        $message->attach(Swift_Attachment::fromPath($file_path));

        try {
            $mailer->send($message);
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

}