<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user1@example.com',
        ),
        'user2:user2pass' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user2@example.com',
        ),
		'enea:password' => array(
            'uid' => array('3'),
            'email' => 'ena256@example.com',
			'NameID' => 'Enea256',
			'STRONG_AUTH' => 'Y',
			'ClientIP' => '127.0.0.1',
			'Encr_ClientIP' => 'MTI3LjAuMC4x',
        ),
    ),

);
