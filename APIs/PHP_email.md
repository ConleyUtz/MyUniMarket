# We'll be using a PHP email API to send emails for login verification.

## There are several available APIs which support our functional requirements.

*Here's a list of them:*

1. http://php.net/manual/en/function.mail.php -> Requires additional headers to ensure email is received by user without being marked as spam.

1.  XAMPP provides 3 ways to send email using PHP
	1. PEAR Mail `pear install Net_SMTP Mail`
	1. msmtp `brew install msmtp` (For OSX)
	1. PHPMailer https://github.com/PHPMailer/PHPMailer

1. We are going to use PHPMailer as our email API
	1. Composer.json and Composer.lock are filed required by PHP dependency manager *composer.phar*
	1. To install dependencies, run `php composer.phar install`
	1. Now, PHPMailer dependency is added to your project.
	1. NEVER ADD `vendor` folder to git.
