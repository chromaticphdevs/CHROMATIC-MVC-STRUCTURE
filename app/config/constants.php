<?php

    #################################################
	##             THIRD-PARTY APPS                ##
    #################################################

    define('DEFAULT_REPLY_TO' , '');

    const MAILER_AUTH = [
        'username' => '#',
        'password' => '#',
        'host'     => '#',
        'name'     => '#',
        'replyTo'  => '#',
        'replyToName' => '#'
    ];



    const ITEXMO = [
        'key' => '',
        'pwd' => ''
    ];

	#################################################
	##             SYSTEM CONFIG                ##
    #################################################


    define('GLOBALS' , APPROOT.DS.'classes/globals');

    define('SITE_NAME' , 'medimart.cloud');

    define('COMPANY_NAME' , 'MEDIMART');

    define('KEY_WORDS' , 'MEDIMART,ACCOUNTING SYSTEM');


    define('DESCRIPTION' , '#############');

    define('AUTHOR' , SITE_NAME);


    define('APP_KEY' , 'MEDIMART-5175140471');
    
?>