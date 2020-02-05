<?php namespace Benjamin\Heroine;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Benjamin\Heroine\Components\Members' => 'members',
            'Benjamin\Heroine\Components\Member' => 'member',
            'Benjamin\Heroine\Components\System' => 'system',
            'Benjamin\Heroine\Components\Price' => 'price',
        ];
    }

    public function registerSettings()
    {
    }
}
