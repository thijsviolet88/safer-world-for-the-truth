<?php

namespace App\ModelAdmin;

use App\Objects\Investigation;
use App\Objects\Update;
use SilverStripe\Admin\ModelAdmin;

use SilverStripe\Forms\GridField\GridFieldConfig;
use SilverStripe\Forms\GridField\GridFieldExportButton;
use SilverStripe\Forms\GridField\GridFieldImportButton;
use SilverStripe\Forms\GridField\GridFieldPrintButton;

class UpdateAdmin extends ModelAdmin
{
    private static $url_segment = 'Updates';
    private static $menu_title = 'Updates';
    private static $menu_icon_class = 'font-icon-plus-circled';


    private static $managed_models = [
        Update::class,
    ];

    protected function getGridFieldConfig(): GridFieldConfig
    {
        $config = parent::getGridFieldConfig();

        $config->removeComponentsByType([
            GridFieldPrintButton::class,
            GridFieldExportButton::class,
            GridFieldImportButton::class,
        ]);

        return $config;
    }
}
