<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 * @package App\Models
 * @version February 15, 2018, 5:56 pm UTC
 *
 * @property string firstname
 * @property string lastname
 * @property string dateofbirth
 * @property string phone
 * @property string email
 * @property string ktpnumber
 * @property string bankname
 * @property string accountnumber
 */
class Employee extends Model
{
    use SoftDeletes;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'firstname',
        'lastname',
        'dateofbirth',
        'phone',
        'email',
        'ktpnumber',
        'bankname',
        'accountnumber',
        'ktpname',
        'ktpfilename'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'firstname' => 'string',
        'lastname' => 'string',
        'dateofbirth' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'ktpnumber' => 'string',
        'bankname' => 'string',
        'accountnumber' => 'string',
        'ktpname' => 'string',
        'ktpfilename' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'email',
        'phone' => 'integer'
    ];

    
}
