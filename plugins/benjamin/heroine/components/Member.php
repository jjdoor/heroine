<?php

namespace Benjamin\Heroine\Components;

use Benjamin\Heroine\Models\Member as MemberModel;
use Benjamin\Heroine\Models\ServiceContent;
use Cms\Classes\ComponentBase;
//use Benjamin\Movies\Models\Movie;


class Member extends ComponentBase
{
    public $member;
    public $record;
    public $recomend_services;
    public $services;

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
//        $param = $this->param('id');
        $loadActors = $this->loadActors();
        $loadActors = $this->service_times($loadActors);
        $this->record = $this->page['record'] = $loadActors;
        $selected_services = $this->record['service_content'];
        $array_combine = array_combine(array_column($selected_services, "id"), $selected_services);
        $this->recomend_services = $this->page['recommend_services'] = $this->recommend_services($array_combine);
        $this->services = $this->page['services'] = $this->services($array_combine);
//        $this->actors = Movie::query()->all();
    }

    protected function service_times($record){
//        echo date("Ymd",strtotime("now")), "\n";
//
//        echo date("Ymd",strtotime("-1 week Monday")), "\n";
//
//        echo date("Ymd",strtotime("-1 week Sunday")), "\n";
//
//        echo date("m-d",strtotime("+0 week monday")), "\n";
//        echo date("m-d",strtotime("+0 week tuesday")), "\n";
//
//        echo date("m-d",strtotime("+0 week sunday")), "\n";
//        die();


        $rebuild = function($time){
            if($time){
                $explode = explode( '～',$time);
                $explode = $explode[0]."<br>\r\n"."～"."<br>\r\n".$explode[1];
                return $explode;
            }
            return $time;
        };
        $record['monday'] = $rebuild($record['monday']);
        $record['monday_date'] = date("m/d",strtotime("+0 week monday"))."(月)";
        $record['tuesday'] = $rebuild($record['tuesday']);
        $record['tuesday_date'] = date("m/d",strtotime("+0 week tuesday"))."(火)";
        $record['wednesday'] = $rebuild($record['wednesday']);
        $record['wednesday_date'] = date("m/d",strtotime("+0 week wednesday"))."(水)";
        $record['thursday'] = $rebuild($record['thursday']);
        $record['thursday_date'] = date("m/d",strtotime("+0 week thursday"))."(木)";
        $record['friday'] = $rebuild($record['friday']);
        $record['friday_date'] = date("m/d",strtotime("+0 week friday"))."(金)";
        $record['saturday'] = $rebuild($record['saturday']);
        $record['saturday_date'] = date("m/d",strtotime("+0 week saturday"))."(土)";
        $record['sunday'] = $rebuild($record['sunday']);
        $record['sunday_date'] = date("m/d",strtotime("+0 week sunday"))."(日)";
        return $record;
    }

    protected function recommend_services($selected_services){
        $serviceContent = new ServiceContent();
        $toArray = $serviceContent->newQuery()->where("is_recommend", "=", 1)->get()->toArray();
        $new = array_map(function ($v)use($selected_services){
            if(isset($selected_services[$v['id']])){
                $v['is_selected'] = 1;
            }else{
                $v['is_selected'] = 0;
            }
            return $v;
        },$toArray);
        return $new;
    }

    protected function services($selected_services){
        $serviceContent = new ServiceContent();
        $toArray = $serviceContent->newQuery()->where("is_recommend", "<>", 1)->get()->toArray();
        $new = array_map(function ($v)use($selected_services){
            if(isset($selected_services[$v['id']])){
                $v['is_selected'] = 1;
            }else{
                $v['is_selected'] = 0;
            }
            return $v;
        },$toArray);
        return $new;
    }

    protected function loadActors()
    {
        $member = new \Benjamin\Heroine\Models\Member();
//        die();
        $record = $member->newQuery()->with(['service_content','album','gallery'])->first()->toArray();
//        var_dump($list);
//        die();
        return $record;
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