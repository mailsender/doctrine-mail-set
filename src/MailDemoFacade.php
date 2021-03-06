<?php declare(strict_types = 1);

namespace Mailsender\DoctrineSender;

use Mailsender\Core\Entity\IMail;
use Mailsender\DoctrineSender\MailTypes\IMailTypeFacade;

/**
 * Class MailDemoFacade
 * Copyright (c) 2018 Petr Olisar
 * @package Mailsender\DoctrineMailSet
 */
class MailDemoFacade implements IMailTypeFacade
{

	/**
	 * Returns main content of the mail.
	 * @param IMail $mail
	 * @return string
	 */
	public function getContent(IMail $mail): string
	{
		$data = json_decode($mail->getData(), true);
		return 'Test string' . $data['dearCustomer'];
	}

}
