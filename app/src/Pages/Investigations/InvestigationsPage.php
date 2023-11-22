<?php

namespace App\Pages;

use Page;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;

class InvestigationsPage extends Page {
    private static $table_name = 'InvestigationsPage';
    private static $db = [
        'Title' => 'Varchar',
    ];

    public function getInvestigationList()
    {
        return InvestigationPage::get();
    }
}