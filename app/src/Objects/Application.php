<?php

namespace App\Objects;
use SilverStripe\ORM\DataObject;

class Application extends DataObject {
    private static $table_name = 'Application';

    private static $db = [
        'FirstName' => 'Varchar(255)',
        'Tussenvoegsel' => 'Varchar(255)',
        'LastName' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'Journalist' => 'Boolean',
        'EmailList' => 'Boolean',
    ];

    private static $default_sort = 'Created DESC';

    private static $summary_fields = [
        'FirstName' => 'Varchar(255)',
        'Tussenvoegsel' => 'Varchar(255)',
        'LastName' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'Journalist' => 'Boolean',
        'EmailList' => 'Boolean',
    ];
}
