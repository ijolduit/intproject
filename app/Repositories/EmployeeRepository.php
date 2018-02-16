<?php

namespace App\Repositories;

use App\Models\Employee;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmployeeRepository
 * @package App\Repositories
 * @version February 15, 2018, 5:56 pm UTC
 *
 * @method Employee findWithoutFail($id, $columns = ['*'])
 * @method Employee find($id, $columns = ['*'])
 * @method Employee first($columns = ['*'])
*/
class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Employee::class;
    }
}
