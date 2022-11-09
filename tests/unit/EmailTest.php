<?php

use CodeIgniter\Email\Email;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Email as ConfigEmail;

/**
 * @internal
 */
class EmailTest extends CIUnitTestCase{

   public function testKirimEmail(){
      $email = new Email( new ConfigEmail());
      $email->setFrom('khususrpal@gmail.com');
      $email->setTO('mrievaldrp6@gmail.com');
      $email->setSubject('Testing Kirim Email');
      $email->setMessage('Hallo Selamat <b>Bergabung</b>');

      $this->assertTrue(   $email->send() );
   }
}
