<?php namespace Benjamin\Heroine\Models;

//use Model;
//use October\Rain\Database\Model;
use Illuminate\Database\Eloquent\Model;


/**
 * Model
 */
class Member extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'benjamin_heroine_members';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'service_content' => [
            'Benjamin\Heroine\Models\ServiceContent',
//            'Raiseinfo\Movies\Models\Genre',    // 模型
            'table'=>'benjamin_heroine_content_member',
//            'table' => 'raiseinfo_movies_movies_genres',    // 中间表
//            'order' => 'genre_title'
        ]
    ];

    /**
     * 关系，用于将图片附加到Movies表上
     */
    public $attachOne = [
        'photo' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];
}
