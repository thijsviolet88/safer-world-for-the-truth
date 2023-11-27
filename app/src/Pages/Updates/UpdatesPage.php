<?php

namespace App\Pages;

use Page;
use SilverStripe\Forms\TextField;

class UpdatesPage extends Page {
    private static $table_name = 'UpdatesPage';

    private static $db = [
        'Title' => 'Varchar(255)',
        'Date' => 'Date',
    ];

    private static $summary_fields = [
        'Title' => 'Title',
        'Date' => 'Date',
    ];


    public function getUpdatesList()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', 'The title of the update'),
            TextField::create('Date', 'Update date'),
        ]);

        return UpdatePage::get();
    }
}