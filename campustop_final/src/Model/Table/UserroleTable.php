<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class UserroleTable extends Table
{

	public function initialize(array $config)
	{
	    $this->table('userrole');

	}
	 public function buildRules(RulesChecker $rules)
	{
	    $rules->add($rules->isUnique(['user_role_name']));
	    return $rules;
	}
	public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('user_role_name', 'A User role name is required')
            ->notEmpty('user_role_code', 'A User role code is required');
    }

}
?>