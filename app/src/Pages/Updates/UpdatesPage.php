<?php

namespace App\Pages;

use Page;

class UpdatesPage extends Page {
    private static $table_name = 'UpdatesPage';
    private static $db = [
        'Title' => 'Varchar',
    ];

    // public function getUpdatesList()
    // {
    //     $list = UpdatePage::get();

    //     return new PaginatedList($list, $this->getRequest());
    // }
}