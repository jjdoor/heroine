<?php

namespace Benjamin\Heroine\Components;

use Benjamin\Heroine\Models\Member as MemberModel;
use Cms\Classes\ComponentBase;
//use Benjamin\Movies\Models\Movie;


class Member extends ComponentBase
{
    public $member;

    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'Heroine',
            'description' => 'Heroine'
        ];
    }

    public function onRun()
    {
        $this->members = $this->page['members'] = $this->loadActors();
//        $this->actors = Movie::query()->all();
    }

    protected function loadActors()
    {
        $member = new \Benjamin\Heroine\Models\Member();
//        die();
        $list = $member->newQuery()->with(['service_content','photo','gallery'])->get()->toArray();
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