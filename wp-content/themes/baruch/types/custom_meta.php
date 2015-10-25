<?php



new metas(
array(
	'id' => 'year',
	'title' => 'From :',
	'page' => 'education',
	'context' => 'normal',
	'priority' => 'high',
),
array(

	array(
		"name" => 'Ex: 2015-2014',
		"id" => "_year",
		"default" => "",
		"type" => "text"
	)
	)
	);
	
	new metas(
array(
	'id' => 'diploma',
	'title' => 'Received diploma',
	'page' => 'education',
	'context' => 'normal',
	'priority' => 'high',
),
array(

	array(
		"name" => 'Ex: Master of Science',
		"id" => "_diploma",
		"default" => "",
		"type" => "text"
	)
	)
	);
new metas(
	array(
		'id' => 'Facebook',
		'title' => 'Lien facebook',
		'page' => 'team',
		'context' => 'normal',
		'priority' => 'high',
	),
	array(

		array(
			"name" => 'facebook',
			"id" => "_facebook",
			"default" => "http://www.facebook.com",
			"type" => "text"
		)
	)
);

new metas(
    array(
        'id' => 'linkedin',
        'title' => 'Lien linkedIn',
        'page' => 'team',
        'context' => 'normal',
        'priority' => 'high',
    ),
    array(

        array(
            "name" => 'linkedin',
            "id" => "_linkedin",
            "default" => "http://www.linkedin.com",
            "type" => "text"
        )
    )
);
new metas(
    array(
        'id' => 'github',
        'title' => 'Lien github',
        'page' => 'team',
        'context' => 'normal',
        'priority' => 'high',
    ),
    array(

        array(
            "name" => 'github',
            "id" => "_github",
            "default" => "http://www.github.com",
            "type" => "text"
        )
    )
);
new metas(
    array(
        'id' => 'mail',
        'title' => 'adresse mail',
        'page' => 'team',
        'context' => 'normal',
        'priority' => 'high',
    ),
    array(

        array(
            "name" => 'mail',
            "id" => "_mail",
            "default" => "",
            "type" => "text"
        )
    )
);
new metas(
    array(
        'id' => 'twitter',
        'title' => 'twitter',
        'page' => 'team',
        'context' => 'normal',
        'priority' => 'high',
    ),
    array(

        array(
            "name" => 'twitter',
            "id" => "_twitter",
            "default" => "http://www.twitter.com",
            "type" => "text"
        )
    )
);