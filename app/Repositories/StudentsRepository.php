<?php

namespace App\Repositories;

use App\Models\Students;
use App\Repositories\BaseRepository;

/**
 * Class StudentsRepository
 * @package App\Repositories
 * @version September 11, 2021, 3:00 am UTC
*/

class StudentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Firstname',
        'Middlename',
        'Lastname',
        'Birthdate',
        'Gender',
        'Address',
        'Citizenship',
        'Religion'
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
        return Students::class;
    }
}
