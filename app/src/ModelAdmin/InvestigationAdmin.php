<?php

namespace App\ModelAdmin;

use App\Objects\Investigation;
use SilverStripe\Admin\ModelAdmin;

use SilverStripe\Forms\GridField\GridFieldConfig;
use SilverStripe\Forms\GridField\GridFieldExportButton;
use SilverStripe\Forms\GridField\GridFieldImportButton;
use SilverStripe\Forms\GridField\GridFieldPrintButton;

class InvestigationAdmin extends ModelAdmin
{
    private static $url_segment = 'Investigations';
    private static $menu_title = 'Investigations';
    private static $menu_icon_class = 'font-icon-icon-enlarge';


    private static $managed_models = [
        Investigation::class,
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
