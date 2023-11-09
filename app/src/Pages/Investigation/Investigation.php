<?php

namespace App\Pages;

use Page;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextField;

class InvestigationPage extends Page {
    private static $table_name = 'InvestigationPage';
    private static $db = [
        'Title' => 'Varchar',
        'Date' => 'Date',
    ];

    private static $summary_fields = [
        'Title' => 'Title',
        'Date' => 'Date',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Cover', [
            TextField::create('Title', 'Title of the investigation'),
            DateField::create('Date', 'Date of the investigation'),
        ]);

        return $fields;
    }
}