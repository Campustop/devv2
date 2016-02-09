<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class TypesofresourceTable extends Table
{

public function initialize(array $config)
{
    $this->table('types_of_resource');

}

 public function buildRules(RulesChecker $rules)
{
    $rules->add($rules->isUnique(['resource_name']));
    return $rules;
}
public function validationDefault(Validator $validator)
{
    return $validator
        ->notEmpty('resource_name', 'A Resource Name is required');
}



}
?>