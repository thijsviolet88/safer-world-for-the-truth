<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;

class AnnouncementBlock extends BaseElement {
    private static $table_name = "AnnouncementBlock";
    private static $singular_name = "Announcement block";
    private static $plural_name = 'AnnouncementBlocks';
    private static $description = 'Announcement block';
    private static $icon = 'font-icon-check-mark-2';
    private static $db = [
        'Title' => 'HTMLText',
        'DisplayName' => 'Boolean',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            CheckboxField::create('DisplayName', 'Diplay the name of the journalist'),
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
