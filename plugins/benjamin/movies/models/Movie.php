<?php namespace Benjamin\Movies\Models;

use Backend\Models\User;
use October\Rain\Database\Model;

//use Model;
//use Illuminate\Database\Eloquent\Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'benjamin_movies_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    function users(){
        return $this->belongsTo(\RainLab\User\Models\User::class,'id','id');
//        return $this->belongsTo(User::query()User::class,'user_id');
    }
}
