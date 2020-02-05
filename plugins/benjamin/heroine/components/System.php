<?php

namespace Benjamin\Heroine\Components;

use Cms\Classes\ComponentBase;
use Benjamin\Heroine\Models\System as SystemModel;
use Illuminate\Database\Eloquent\Model;

class System extends ComponentBase
{
    public $record;

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
        $this->record = $this->page['record'] = $this->system();
    }

    protected function system(){
        /** @var Model $system */
        $system = new SystemModel();
        $toArray = $system->newQuery()->first()->toArray();
        return $toArray;
    }

}