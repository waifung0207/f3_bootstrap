<?php

namespace helpers;

/**
 * Helper class to send email via SMTP
 */
class Email extends _Base {

	/**
	 * Send email with HTML view, return boolean for success / failure
	 */
	public function send($to_name, $to_email, $subject, $view)
	{
		$f3 = \Base::instance();
		$smtp_host = $f3->get('email.smtp.host');
		$smtp_port = $f3->get('email.smtp.port');
		$smtp_scheme = $f3->get('email.smtp.scheme');
		$smtp_user = $f3->get('email.smtp.user');
		$smtp_pass = $f3->get('email.smtp.pass');
		$from_name = $f3->get('email.from.name');
		$from_email = $f3->get('email.from.email');

		$smtp = new \SMTP($smtp_host, $smtp_port, $smtp_scheme, $smtp_user, $smtp_pass);
		$smtp->set('from', "'$from_name' <$from_email>");
		$smtp->set('to', "'$to_name' <$to_email>");
		$smtp->set('subject', $subject);
		return $smtp->send(\Template::instance()->render("email/$view.htm"));
	}
}