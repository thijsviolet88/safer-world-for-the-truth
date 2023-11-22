<?php

namespace App\Pages;

use Page;

class MonumentPage extends Page {
    private static $table_name = 'MonumentPage';
    private static $db = [
        'Title' => 'Varchar',
    ];

    private static $summary_fields = [
        'Title' => 'Title',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        return $fields;
    }
}