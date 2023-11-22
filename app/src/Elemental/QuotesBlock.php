<?php

namespace App\Elements;

use App\Objects\Quote;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\GridField\GridField;

class QuotesBlock extends BaseElement {
    private static $table_name = "QuotesBlock";
    private static $singular_name = "Quotes block";
    private static $plural_name = 'QuotesBlock';
    private static $inline_editable = false;
    private static $description = 'Quotes block';
    private static $icon = 'font-icon-edit-write';
    private static $db = [
        'Title' => 'Varchar(255)',
    ];

    private static $has_many = [
        'Quotes' => Quote::class
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeByName(['Quotes']);

        $fields->addFieldsToTab('Root.Main', [
            GridField::create('Quotes', 'Select quotes to display in block', $this->Quotes()),
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
