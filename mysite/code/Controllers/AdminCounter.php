<?php
use SilverStripe\Admin\ModelAdmin;

class AdminCounter extends ModelAdmin
{
    private static $managed_models = [
        'SampleCounter',
    ];

    private static $url_segment = 'counters';

    private static $menu_title = 'Counters';
}
