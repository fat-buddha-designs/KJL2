<?php
return function($kirby, $pages, $page) {

    $alert = null;

    if($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if(empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        $data = [
            'name'  => get('name'),
            'email' => get('email'),
            'landline' => get('landline'),
            'mobile' => get('mobile'),
            'text'  => get('text')
        ];

        $rules = [
            'name'  => ['required', 'minLength' => 3],
            'email' => ['required', 'email'],
            'landline'  => ['num', 'minLength' => 10],
            'mobile'  => ['num', 'minLength' => 10],
            'text'  => ['required', 'minLength' => 3, 'maxLength' => 3000],
        ];

        $messages = [
            'name'  => 'Please enter a valid name',
            'email' => 'Please enter a valid email address',
            'landline' => 'Please enter a valid uk landline number',
            'mobile' => 'Please enter a valid uk mobile',
            'text'  => 'Please enter a text between 3 and 3000 characters'
        ];

        // some of the data is invalid
        if($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

            // the data is fine, let's send the email
        } else {
            try {
                $kirby->email([
                    'template' => 'contactform',
                    'from'     => 'will@fatbuddhadesigns.co.uk',
                    'replyTo'  => $data['email'],
                    'to'       => 'will@fatbuddhadesigns.co.uk',
                    'subject'  => esc($data['name']) . ' sent you a message from your contact form',
                    'data'     => [
                        'text'   => esc($data['text']),
                        'email' => esc($data['email']),
                        'landline'   => esc($data['landline']),
                        'mobile' => esc($data['mobile']),
                        'sender' => esc($data['name'])
                    ]
                ]);

            } catch (Exception $error) {
                if(option('debug')):
                    $alert['error'] = 'The form could not be sent: <strong>' . $error->getMessage() . '</strong>';
                else:
                    $alert['error'] = 'The form could not be sent!';
                endif;
            }

            // no exception occurred, let's send a success message
            if (empty($alert) === true) {
                $success = 'Your message has been sent, thank you. We will get back to you soon!';
                $data = [];
            }
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};