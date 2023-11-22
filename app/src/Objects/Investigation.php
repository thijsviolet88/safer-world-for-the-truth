<?php

namespace App\Objects;
use App\Elements\InvestigationBlock;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class Investigation extends DataObject {
    private static $table_name = 'Investigation';

    private static $db = [
        'Title' => 'Varchar(255)',
        'Date' => 'Date',
    ];

    private static $summary_fields = [
        'Title' => 'Title',
        'Date' => 'Date',
    ];

    private static $has_one = [
        'Image' => Image::class,
        'InvestigationBlock' => InvestigationBlock::class,
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', 'The title of the investigation'),
            TextField::create('Date', 'Investigation date'),
        ]);

        return $fields;
    }
}
