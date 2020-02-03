<?php

namespace Benjamin\Movies\Components;

use Cms\Classes\ComponentBase;
use Benjamin\Movies\Models\Movie;


class Movies extends ComponentBase
{
    public $actors;

    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'Actor List',
            'description' => 'List of actors'
        ];
    }

    public function onRun()
    {
        $this->actors = $this->loadActors();
//        $this->actors = Movie::query()->all();
    }

    protected function loadActors()
    {
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