<?php

namespace App\Objects;
use App\Elements\UpdateBlock;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class Update extends DataObject {
    private static $table_name = 'Update';

    private static $db = [
        'Title' => 'Varchar(255)',
        'Date' => 'Date',
    ];

    private static $summary_fields = [
        'Title' => 'Title',
        'Date' => 'Date',
    ];

    private static $has_one = [
        'UpdateBlock' => UpdateBlock::class,
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', 'The title of the update'),
            TextField::create('Date', 'Update date'),
        ]);

        return $fields;
    }
}
