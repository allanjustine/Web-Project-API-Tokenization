<?php

namespace App\Repositories;

use App\Models\Logs;
use App\Repositories\BaseRepository;

/**
 * Class LogsRepository
 * @package App\Repositories
 * @version November 3, 2021, 6:34 am UTC
*/

class LogsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'log',
        'logdetails',
        'logtype'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Logs::class;
    }
}
