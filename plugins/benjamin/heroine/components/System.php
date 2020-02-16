<?php

namespace Benjamin\Heroine\Components;

use Cms\Classes\ComponentBase;
use Benjamin\Heroine\Models\System as SystemModel;
use Illuminate\Database\Eloquent\Model;

class System extends ComponentBase
{
    public $system;

    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'System',
            'description' => 'System'
        ];
    }

    public function onRun()
    {
        $this->system = $this->page['system'] = $this->system();
    }

    protected function system(){
        /** @var Model $system */
        $system = new SystemModel();
        $toArray = $system->newQuery()->first()->toArray();
        return $toArray;
    }

}