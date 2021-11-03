<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Logs
 * @package App\Models
 * @version November 3, 2021, 12:11 pm UTC
 *
 * @property string $userid
 * @property string $log
 * @property string $logdetails
 * @property string $logtype
 */
class Logs extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'logs';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'userid',
        'log',
        'logdetails',
        'logtype'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'userid' => 'string',
        'log' => 'string',
        'logdetails' => 'string',
        'logtype' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'userid' => 'required|string|max:255',
        'log' => 'required|string|max:255',
        'logdetails' => 'nullable|string|max:1000',
        'logtype' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
