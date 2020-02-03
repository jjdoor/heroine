<?php namespace Benjamin\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Benjamin\Movies\Components\Movies' => 'movies'
        ];
    }

    public function registerSettings()
    {
    }
}
