<?php
/**
 * Zabbix Sms LabsMobile client
 *
 * @package 	Zabbix
 * @subpackage 	Sms
 */
namespace Zabbix\Sms\Client;
use Zabbix\Sms AS ZS;

class LabsMobile extends ZS\Client
{
    /**
     * @var string
     */
    protected static $_baseUrl = 'https://api.labsmobile.com/get/send.php';

    /**
     * @see \Zabbix\Sms\Client::send()
     */
    public function send($recipient, $text)
    {
        $this->_params['message'] = $text;
        $this->_params['msisdn'] = $recipient;
        parent::send($recipient, $text);
    }
}