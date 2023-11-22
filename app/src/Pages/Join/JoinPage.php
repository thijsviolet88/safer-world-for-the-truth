<?php

namespace App\Pages;

use Page;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class JoinPage extends Page {
    private static $table_name = 'JoinPage';
    private static $db = [
        'Title' => 'Varchar',
        'Text' => 'HTMLText',
    ];

    private static $summary_fields = [
        'Title' => 'Title',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            HTMLEditorField::create('Text', 'Text next to the "Join us" form'),
        ]);

        return $fields;
    }


    public function processJoinForm()
    {

        $h = new JoinPageController();
        return($h->processJoinForm());
    }
}