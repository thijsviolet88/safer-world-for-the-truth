<?php

namespace App\Elements;

use App\Pages\UpdatePage;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\NumericField;

class UpdateBlock extends BaseElement {
    private static $table_name = "UpdateBlock";
    private static $singular_name = "Update";
    private static $plural_name = 'Updates';
    private static $description = 'Investigations';
    private static $icon = 'font-icon-plus';
    private static $db = [
        'Title' => 'Text',
        'NuberOfUpdatesShown' => 'Int'
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            NumericField::create('NuberOfUpdatesShown', 'Number of updates that are displayed'),
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }

    public function getUpdatesList()
    {
        return UpdatePage::get()->limit($this->NuberOfUpdatesShown);
    }
}
