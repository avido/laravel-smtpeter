<?php
namespace Avido\LaravelSmtpeter;

use GuzzleHttp\ClientInterface;
use Avido\Smtpeter\Client;

class SmtpeterApi
{
    private $client;

    public function registerd()
    {
        return true;
    }

    public function templates()
    {
        return $this->getClient()->templates;
    }

    public function email()
    {
        return $this->getClient()->email;
    }

    /**
     * Set Client
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function getClient()
    {
        if (!$this->client instanceof ClientInterface) {
            $this->client = new \Avido\Smtpeter\Client(config('smtpeter.secret'));
        }

        return $this->client;
    }
}
