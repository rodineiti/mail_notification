<?php

require __DIR__ . '/../libs_ext/autoload.php';

use Notification\Email;

$email = new Email(
    2,
    '',
    '',
    '',
    'tls',
    587,
    'br',
    'utf-8',
    '',
    ''
);

$email->set("subject", "Subject");
$email->set("body", "Body");
$email->set("replyEmail", "reply@teste.com");
$email->set("replyName", "reply");
$email->set("addressEmail", "address@teste.com");
$email->set("addressName", "address");
$email->send();