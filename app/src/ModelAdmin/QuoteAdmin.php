<?php

namespace App\ModelAdmin;

use App\Objects\Quote;
use SilverStripe\Admin\ModelAdmin;

use SilverStripe\Forms\GridField\GridFieldConfig;
use SilverStripe\Forms\GridField\GridFieldExportButton;
use SilverStripe\Forms\GridField\GridFieldFilterHeader;
use SilverStripe\Forms\GridField\GridFieldImportButton;
use SilverStripe\Forms\GridField\GridFieldPrintButton;

class QuoteAdmin extends ModelAdmin
{
    private static $url_segment = 'Quotes';
    private static $menu_title = 'Quotes';
    private static $menu_icon_class = 'font-icon-edit-write';


    private static $managed_models = [
        Quote::class,
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
