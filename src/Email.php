<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    private $mailer;
    private $subject;
    private $body;
    private $replyEmail;
    private $replyName;
    private $addressEmail;
    private $addressName;

    public function __construct($debug, $smtp, $username, $password, $secure, $port, $language, $charset = 'utf-8', $from, $name)
    {
        $this->mailer = new PHPMailer(true);

        $this->mailer->SMTPDebug = $debug;
        $this->mailer->isSMTP();
        $this->mailer->Host       = $smtp;
        $this->mailer->SMTPAuth   = true;
        $this->mailer->Username   = $username;
        $this->mailer->Password   = $password;
        $this->mailer->SMTPSecure = $secure;
        $this->mailer->Port       = $port;
        $this->mailer->CharSet = $charset;
        $this->mailer->setLanguage($language);
        $this->mailer->isHTML(true);
        $this->mailer->setFrom($from, $name);
    }

    public function set($field, $value)
    {
        if (property_exists($this, $field)) {
            $this->{$field} = $value;
            return $this;
        }
    }

    public function send()
    {
        $this->mailer->Subject = $this->subject;
        $this->mailer->Body = $this->body;
        $this->mailer->addReplyTo($this->replyEmail, $this->replyName);
        $this->mailer->addAddress($this->addressEmail, $this->addressName);

        try {
            $this->mailer->send();
            echo "Success";
        } catch (\Exception $e) {
            echo "Error: {$this->mailer->ErrorInfo} {$e->getMessage()}";
        }
    }
}