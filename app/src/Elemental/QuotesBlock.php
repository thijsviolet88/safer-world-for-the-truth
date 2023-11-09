<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextField;

class QuotesBlock extends BaseElement {
    private static $table_name = "QuotesBlock";
    private static $singular_name = "Quotes block";
    private static $plural_name = 'QuotesBlock';
    private static $description = 'Quotes block';
    private static $icon = 'font-icon-edit-write';
    private static $db = [
        'Quote' => 'Text',
        'TextUnderQuote' => 'Text',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeByName('Title');

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Quote', 'Quote to display'),
            TextField::create('TextUnderQuote', 'Text to display under quote'),
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
