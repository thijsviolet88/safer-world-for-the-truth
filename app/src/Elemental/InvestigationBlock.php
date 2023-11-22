<?php

namespace App\Elements;

use App\Pages\InvestigationPage;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\NumericField;
use SilverStripe\Forms\TextField;

class InvestigationBlock extends BaseElement {
    private static $table_name = "InvestigationBlock";
    private static $singular_name = "Investigation block";
    private static $plural_name = 'Investigation blocks';
    private static $description = 'Investigations';
    private static $icon = 'font-icon-search';
    private static $db = [
        'Title' => 'Text',
        'NuberOfInvestigationsShown' => 'Int'
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();


        $fields->addFieldsToTab('Root.Main', [
            NumericField::create('NuberOfInvestigationsShown', 'Number of investigations that are displayed'),
        ]);
        
        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }

    public function getInvestigationList()
    {
        return InvestigationPage::get()->limit($this->NuberOfInvestigationsShown);
    }
}
