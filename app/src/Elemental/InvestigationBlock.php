<?php

namespace App\Elements;

use App\Pages\InvestigationPage;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextField;

class InvestigationBlock extends BaseElement {
    private static $table_name = "InvestigationBlock";
    private static $singular_name = "Investigation block";
    private static $plural_name = 'Investigation blocks';
    private static $description = 'Investigations';
    private static $icon = 'font-icon-search';
    private static $db = [
        'Title' => 'Text',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }

    public function getInvestigationList()
    {
        $investigations  = InvestigationPage::get();
        $InvestigationArray = [];

        foreach ($investigations as $key => $value) {

            $InvestigationArray[] = [
                "title" => $value->Title,
                "date" => $value->Date,
            ];
        }

        return json_encode($InvestigationArray);
    }
}
