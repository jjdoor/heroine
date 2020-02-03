<?php namespace Benjamin\Heroine\Models;

use Model;

/**
 * Model
 */
class ContentMember extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'benjamin_heroine_content_member';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
