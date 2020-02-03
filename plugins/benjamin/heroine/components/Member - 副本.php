<?php

namespace Benjamin\Heroine\Components;

//use Benjamin\Heroine\Models\Member;
use Benjamin\Heroine\Models\ServiceContent;
use Benjamin\Heroine\Models\Member as MemberModel;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Lang;
use RainLab\Builder\Classes\ComponentHelper;

//use Benjamin\Movies\Models\Movie;


class Member extends ComponentBase
{
    public $services;
    /**
     * A model instance to display
     * @var \October\Rain\Database\Model
     */
    public $record = null;

    /**
     * Message to display if the record is not found.
     * @var string
     */
    public $notFoundMessage;

    /**
     * Model column to display on the details page.
     * @var string
     */
    public $displayColumn;

    /**
     * Model column to use as a record identifier for fetching the record from the database.
     * @var string
     */
    public $modelKeyColumn;

    /**
     * Identifier value to load the record from the database.
     * @var string
     */
    public $identifierValue;

    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'Heroine',
            'description' => 'Heroine'
        ];
    }

    //
    // Properties
    //

    public function defineProperties()
    {
        return [
            'modelClass' => [
                'title'       => 'rainlab.builder::lang.components.details_model',
                'type'        => 'dropdown',
                'showExternalParam' => false
            ],
            'identifierValue' => [
                'title'       => 'rainlab.builder::lang.components.details_identifier_value',
                'description' => 'rainlab.builder::lang.components.details_identifier_value_description',
                'type'        => 'string',
                'default'     => '{{ :id }}',
                'validation'  => [
                    'required' => [
                        'message' => Lang::get('rainlab.builder::lang.components.details_identifier_value_required')
                    ]
                ]
            ],
            'modelKeyColumn' => [
                'title'       => 'rainlab.builder::lang.components.details_key_column',
                'description' => 'rainlab.builder::lang.components.details_key_column_description',
                'type'        => 'autocomplete',
                'default'     => 'id',
                'validation'  => [
                    'required' => [
                        'message' => Lang::get('rainlab.builder::lang.components.details_key_column_required')
                    ]
                ],
                'showExternalParam' => false
            ],
            'displayColumn' => [
                'title'       => 'rainlab.builder::lang.components.details_display_column',
                'description' => 'rainlab.builder::lang.components.details_display_column_description',
                'type'        => 'autocomplete',
                'depends'     => ['modelClass'],
                'validation'  => [
                    'required' => [
                        'message' => Lang::get('rainlab.builder::lang.components.details_display_column_required')
                    ]
                ],
                'showExternalParam' => false
            ],
            'notFoundMessage' => [
                'title'       => 'rainlab.builder::lang.components.details_not_found_message',
                'description' => 'rainlab.builder::lang.components.details_not_found_message_description',
                'default'     => Lang::get('rainlab.builder::lang.components.details_not_found_message_default'),
                'type'        => 'string',
                'showExternalParam' => false
            ]
        ];
    }

    public function getModelClassOptions()
    {
        return ComponentHelper::instance()->listGlobalModels();
    }

    public function getDisplayColumnOptions()
    {
        return ComponentHelper::instance()->listModelColumnNames();
    }

    public function getModelKeyColumnOptions()
    {
        return ComponentHelper::instance()->listModelColumnNames();
    }

    //
    // Rendering and processing
    //

    public function onRun()
    {
        $this->prepareVars();

//        $this->record = $this->page['record'] = $this->loadActors1();
//        $this->recommend_services = $this->page['service_recommend'] = $this->service1();
        $this->services = $this->page['services'] = $this->service2();
//        var_dump($this->record);
        die();
    }

    protected function service1(){
        $serviceContent = new ServiceContent();
        die();
        $toArray = $serviceContent->newQuery()->where("is_recommend","=",1)->get()->toArray();
        return $toArray;
    }

    protected function service2(){
        $serviceContent = new MemberModel();
        die();
        $toArray = $serviceContent->newQuery()->where("is_recommend","=",0)->get()->toArray();
        return $toArray;
    }

    protected function prepareVars()
    {
        $this->notFoundMessage = $this->page['notFoundMessage'] = Lang::get($this->property('notFoundMessage'));
        $this->displayColumn = $this->page['displayColumn'] = $this->property('displayColumn');
        $this->modelKeyColumn = $this->page['modelKeyColumn'] = $this->property('modelKeyColumn');
        $this->identifierValue = $this->page['identifierValue'] = $this->property('identifierValue');

        if (!strlen($this->displayColumn)) {
            throw new SystemException('The display column name is not set.');
        }

        if (!strlen($this->modelKeyColumn)) {
            throw new SystemException('The model key column name is not set.');
        }
    }

    protected function loadRecord()
    {
        if (!strlen($this->identifierValue)) {
            return;
        }

        $modelClassName = $this->property('modelClass');
        if (!strlen($modelClassName) || !class_exists($modelClassName)) {
            throw new SystemException('Invalid model class name');
        }

        $model = new $modelClassName();
        return $model->where($this->modelKeyColumn, '=', $this->identifierValue)->first();
    }

    public function onRun1()
    {
        $this->identifierValue = $this->page['identifierValue'] = $this->property('identifierValue');
//        $this->member = $this->page['members'] = $this->loadActors();
        var_dump($this->identifierValue);
        die();
//        $this->actors = Movie::query()->all();
    }

    protected function loadActors1()
    {
        $member = new MemberModel();
        $record = $member->newQuery()->with(['service_content','photo','gallery'])->where("id","=",$this->identifierValue)->first()->toArray();
//        var_dump($list);
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