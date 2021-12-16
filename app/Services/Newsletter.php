<?php

namespace App\Services;

class Newsletter {
    public function subscribe(string $email){
        $mailchimp = new \MailchimpMarketing\ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us20'
        ]);

        $response = $mailchimp->lists->addListMember('685ac10f04', [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
    
}