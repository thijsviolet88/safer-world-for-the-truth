<?php


namespace App\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends DataExtension
{
    private static $db = [
        'Straat' => 'Varchar',
        'Adres' => 'Varchar',
        'Postcode' => 'Varchar',
        'Telefoon' => 'Varchar',
        'Plaats' => 'Varchar',
        'Email' => 'Varchar',
        'Facebook' => 'Varchar',
        'Instagram' => 'Varchar',
        'Openingstijden' => 'HTMLText',
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->removeByName('Tagline');

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Telefoon', 'Contact nummer'),
            TextField::create('Email', 'Contact Email'),
            TextareaField::create('Adres', 'Fysieke Addres'),
            TextareaField::create('Postcode', 'Post code'),
            TextField::create('Facebook', 'Facebook URL'),
            TextField::create('Instagram', 'Instagram URL'),
            HTMLEditorField::create('Openingstijden', 'Openingstijden')
        ]);
    }
}
