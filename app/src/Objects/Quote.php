<?php

namespace App\Objects;
use App\Elements\QuotesBlock;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class Quote extends DataObject {
    private static $table_name = 'Quote';

    private static $db = [
        'Quote' => 'Varchar(255)',
        'Author' => 'Varchar(255)',
    ];

    private static $summary_fields = [
        'Quote' => 'Quote',
        'Author' => 'Tagline',
    ];

    private static $has_one = [
        'QuotesBlock' => QuotesBlock::class,
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Quote', 'The Quote'),
            TextField::create('Author', 'Author of the quote'),
        ]);

        return $fields;
    }
}
