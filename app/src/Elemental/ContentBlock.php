<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class ContentBlock extends BaseElement {
    private static $table_name = "ContentBlock";
    private static $singular_name = "Content block";
    private static $plural_name = 'ContentBlocks';
    private static $description = 'Content block';
    private static $icon = 'font-icon-menu-files';
    private static $db = [
        'Text' => 'HTMLText',
        'BackgroundColor' => 'Text',
        
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
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
