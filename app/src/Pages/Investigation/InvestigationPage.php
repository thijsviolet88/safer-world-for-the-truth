<?php

namespace App\Pages;

use Page;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;

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

    private static $has_one = [
        'Image' => Image::class,
    ];

    private static $owns = [
        'Image',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', 'Title of the investigation'),
            DateField::create('Date', 'Date of the investigation'),
            UploadField::create('Image', 'Cover image'),
        ]);

        return $fields;
    }
}