<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class AnnouncementBlock extends BaseElement {
    private static $table_name = "AnnouncementBlock";
    private static $singular_name = "Announcement";
    private static $plural_name = 'Announcements';
    private static $description = 'Announcement';
    private static $icon = 'font-icon-check-mark-2';
    private static $db = [
        'Title' => 'HTMLText',
        'Subtext' => 'HTMLText',
        'DisplayName' => 'Boolean',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            CheckboxField::create('DisplayName', 'Diplay the name of the journalist'),
            HTMLEditorField::create('Subtext', 'Sub text under the announcement'),
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
