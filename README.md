# Notification Library via email using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require rodineiti/mail_notification
```


To use the library, simply require the composer to autoload, invoke the class and call the method:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", 
    "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)", 
    "language (en, br)", "charset (utf-8)"
    "from@email.com", "From Name");

$email->set("subject", "Subject");
$email->set("body", "body");
$email->set("replyEmail", "email");
$email->set("replyName", "name");
$email->set("addressEmail", "email");
$email->set("addressName", "name");
$email->send();
```

Note that the entire configuration of sending the email is using the magic method builder! Once the builder method has been invoked within your application, your system will be able to take the shots.

### Developers
* [phpMailer] - Lib to send E-mail
* [Rodinei Teixeira] - Developer

License
----

MIT

[//]:#
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
[Rodinei Teixeira]: <mailto:rodinei.developer@hotmail.com>
=======
# notification
This is a library tha users composer as the basis for generating email notifications - course