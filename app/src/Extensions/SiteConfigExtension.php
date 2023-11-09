<?php


namespace App\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends DataExtension
{
    private static $db = [
        'Email' => 'Varchar(255)',
        'X' => 'Varchar(255)',
        'Facebook' => 'Varchar(255)',
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->removeByName('Tagline');

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Email', 'Contact Email'),
            TextField::create('X', 'X URL'),
            TextField::create('Facebook', 'Facebook URL'),
        ]);
    }
}
