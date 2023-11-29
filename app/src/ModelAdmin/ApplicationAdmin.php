<?php

namespace App\ModelAdmin;

use SilverStripe\Admin\ModelAdmin;
use App\Objects\Application;

class ApplicationAdmin extends ModelAdmin {
    private static $table_name = 'ApplicationAdmin';
    private static $url_segment = 'ApplicationAdmin';
    private static $menu_title = 'Applications';
    private static $menu_icon_class = 'font-icon-page-multiple';

    private static $managed_models = [
        Application::class,
    ];
}