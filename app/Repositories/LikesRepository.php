<?php

namespace App\Repositories;

use App\Models\Likes;
use App\Repositories\BaseRepository;

/**
 * Class LikesRepository
 * @package App\Repositories
 * @version October 8, 2021, 10:59 am UTC
*/

class LikesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_id',
        'user_id'
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
        return Likes::class;
    }
}
