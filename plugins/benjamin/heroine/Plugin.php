<?php namespace Benjamin\Heroine;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Benjamin\Heroine\Components\Members' => 'members',
            'Benjamin\Heroine\Components\Member' => 'member'
        ];
    }

    public function registerSettings()
    {
    }
}
