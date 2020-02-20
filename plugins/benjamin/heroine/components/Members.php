<?php

namespace Benjamin\Heroine\Components;

use Benjamin\Heroine\Models\Member;
use Cms\Classes\ComponentBase;
use Illuminate\Database\Eloquent\Model;

//use Benjamin\Movies\Models\Movie;


class Members extends ComponentBase
{
    public $members;
    public $schedules;
    public $times;

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
        $this->schedules = $this->page['schedules'] = $this->schedules();
        $this->times = $this->page['times'] = $this->time();
//        $this->actors = Movie::query()->all();
    }

    protected function time(){
        //周日-周一
        $week_array = ['<font class="sun">日曜</font>','月曜','火曜','水曜','木曜','金曜','<font class="sat">土曜</font>'];
        $week_array = ['日曜','月曜','火曜','水曜','木曜','金曜','土曜'];
        $time['one'] = [date("d",strtotime("+0 day")),$week_array[date("w",strtotime("+0 week +0 day"))],date("w",strtotime("+0 week +0 day"))];
        $time['two'] = [date("d",strtotime("+1 day")),$week_array[date("w",strtotime("+0 week +1 day"))],date("w",strtotime("+0 week +1 day"))];
        $time['three'] = [date("d",strtotime("+2 day")),$week_array[date("w",strtotime("+0 week +2 day"))],date("w",strtotime("+0 week +2 day"))];
        $time['four'] = [date("d",strtotime("+3 day")),$week_array[date("w",strtotime("+0 week +3 day"))],date("w",strtotime("+0 week +3 day"))];
        $time['five'] = [date("d",strtotime("+4 day")),$week_array[date("w",strtotime("+0 week +4 day"))],date("w",strtotime("+0 week +4 day"))];
        $time['six'] = [date("d",strtotime("+5 day")),$week_array[date("w",strtotime("+0 week +5 day"))],date("w",strtotime("+0 week +5 day"))];
        $time['seven'] = [date("d",strtotime("+6 day")),$week_array[date("w",strtotime("+0 week +6 day"))],date("w",strtotime("+0 week +6 day"))];
        return $time;
    }

    protected function loadActors()
    {
        $week_array=array("sunday","monday","tuesday","wednesday","thursday","friday","saturday"); //先定义一个数组
        $week_number = date('w');
        $week = $week_array[$week_number];
        /** @var Model $member */
        $member = new Member();
        $list = $member->newQuery()
            ->with(['service_content','album','gallery'])
            ->orderByDesc('rank')
            ->get()
            ->map(function($v)use($week){
                $v['current_open_houe'] = $v[$week];
                return $v;
            })
            ->toArray();
        return $list;
    }

    protected function schedules()
    {
        $week_array=array("sunday","monday","tuesday","wednesday","thursday","friday","saturday"); //先定义一个数组
//        echo "星期".$weekarray[date("w")];
        $week_number = $this->param("week");
        if(empty($week)){
            $week_number = date('w');
        }
        $week = $week_array[$week_number];
        /** @var Model $member */
        $member = new Member();
        $list = $member->newQuery()
            ->with(['service_content','album','gallery'])
            ->orderByDesc('rank')
            ->whereNotNull($week)
            ->get()->map(function($v)use($week){
                $v['current_open_houe'] = $v[$week];
                return $v;
            })
            ->toArray();
        return $list;
    }
}