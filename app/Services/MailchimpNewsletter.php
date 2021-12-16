<?php

namespace App\Services;
use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter {

    protected $client;

    public function __construct(ApiClient $client, string $foo){
       $this->client = $client; 
    }

    public function subscribe(string $email, string $list = null){
        $list ??= config('services.mailchimp.lists.subscribers');

        $response = $this->client->lists->addListMember( $list, ['email_address' => $email, 'status' => 'subscribed']);
        return $response;
    }
}