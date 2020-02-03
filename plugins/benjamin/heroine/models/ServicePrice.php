<?php namespace Benjamin\Heroine\Models;

use Model;

/**
 * Model
 */
class ServicePrice extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'benjamin_heroine_service_price';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
