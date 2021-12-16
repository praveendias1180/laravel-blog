<?php

namespace App\Services;
use MailchimpMarketing\ApiClient;

class Newsletter {

    protected $client;

    public function __construct(ApiClient $client){
       $this->client = $client; 
    }

    public function subscribe(string $email, string $list = null){
        $list ??= config('services.mailchimp.lists.subscribers');

        $response = $this->client()->lists->addListMember( $list, ['email_address' => $email, 'status' => 'subscribed']);
        return $response;
    }

    protected function client(){

        return $this->client->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us20'
        ]);

    }
    
}