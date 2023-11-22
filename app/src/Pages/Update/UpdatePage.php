<?php

namespace App\Pages;

use Page;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;

class UpdatePage extends Page {
    private static $table_name = 'UpdatePage';
    private static $db = [
        'Title' => 'Varchar',
        'Date' => 'Date',
    ];

    private static $summary_fields = [
        'Title' => 'Title',
        'Date' => 'Date',
    ];

    private static $has_one = [
        'ButtonTarget' => SiteTree::class,
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', 'Title of the update'),
            DateField::create('Date', 'Date of the update'),
            TreeDropdownField::create('ButtonTargetID', 'Link to update page', SiteTree::class),
        ]);

        return $fields;
    }
}