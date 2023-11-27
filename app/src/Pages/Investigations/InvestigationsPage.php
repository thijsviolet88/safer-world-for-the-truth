<?php

namespace App\Pages;

use Page;

use App\Objects\Investigation;

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