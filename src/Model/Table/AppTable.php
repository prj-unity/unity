<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use SoftDelete\Model\Table\SoftDeleteTrait;

/**
 * App Model
 */
class AppTable extends Table
{
    use SoftDeleteTrait;

    protected $softDeleteField = 'deleted';

    public function initialize(array $config)
    {
        parent::initialize($config);
    }
}
