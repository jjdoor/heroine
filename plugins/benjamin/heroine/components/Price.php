<?php

namespace Benjamin\Heroine\Components;

use Benjamin\Heroine\Models\ChinesePrice;
use Benjamin\Heroine\Models\JapanesePrice;
use Benjamin\Heroine\Models\ServicePrice;
use Benjamin\Heroine\Models\TrafficPrice;
use Cms\Classes\ComponentBase;
use Illuminate\Database\Eloquent\Model;

class Price extends ComponentBase
{
    public $lists;

    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'Price',
            'description' => 'Price'
        ];
    }

    public function onRun()
    {
        $this->lists = $this->page['lists'] = $this->price();
    }

    protected function price(){
        /** @var Model $chinesePrice */
        $chinesePrice = new ChinesePrice();
        $list['chinese'] = $chinesePrice->newQuery()->get()->toArray();
        /** @var Model $japanesePrice */
        $japanesePrice = new JapanesePrice();
        $list['japanese'] = $japanesePrice->newQuery()->get()->toArray();
        /** @var Model $servicePrice */
        $servicePrice = new ServicePrice();
        $list['service'] = $servicePrice->newQuery()->get()->toArray();
        /** @var Model $trafficPrice */
        $trafficPrice = new TrafficPrice();
        $list['traffic'] = $trafficPrice->newQuery()->get()->toArray();
        return $list;
    }

}