<?php

namespace Benjamin\Heroine\Components;

use Benjamin\Heroine\Models\Member;
use Cms\Classes\ComponentBase;
//use Benjamin\Movies\Models\Movie;


class Members extends ComponentBase
{
    public $members;

    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'Heroine List',
            'description' => 'List of Heroine'
        ];
    }

    public function onRun()
    {
        $this->members = $this->page['members'] = $this->loadActors();
//        $this->actors = Movie::query()->all();
    }

    protected function loadActors()
    {
        $member = new Member();
        $list = $member->newQuery()->with(['service_content','album','gallery'])->get()->toArray();
//        var_dump($list);
        return $list;
        $movie = new Movie();
        $builders = $movie->newQuery()->with(['users'])->get()->toArray();
//        var_dump($builders);
        return $builders;
//        die("===");
        /** @type \Illuminate\Database\Eloquent\Builder $movie */
//        return $movie->newQuery()->select();
//        return $movie->select();
        $builder = Movie::all();
        var_dump($builder);
        return $builder;
    }
}