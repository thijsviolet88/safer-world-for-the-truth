<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\CheckboxField;

class ContentBlock extends BaseElement {
    private static $table_name = "ContentBlock";
    private static $singular_name = "Content";
    private static $plural_name = 'Content';
    private static $description = 'Content block';
    private static $icon = 'font-icon-menu-files';
    private static $db = [
        'Text' => 'HTMLText',
        'BackgroundColor' => 'Text',
        'Border' => 'Boolean',
        'TextPosition' => 'Boolean',
    ];

    private static $has_one = [
        'Image' => Image::class,
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeByName('Image', 'Title');

        $fields->addFieldsToTab('Root.Main', [
            HTMLEditorField::create('Text', 'Text for section'),
            UploadField::create('Image', 'Image')->setFolderName('Images'),
            DropdownField::create('BackgroundColor', 'Background color', [
                'bg-white' => 'White',
                'bg-black' => 'Black',
            ])->setEmptyString('Select a background color'),
            CheckboxField::create('TextPosition', 'Text right'),
            CheckboxField::create('Border', 'Borders'),
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
