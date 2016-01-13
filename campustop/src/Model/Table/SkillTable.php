<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class SkillTable extends Table
{

public function initialize(array $config)
{
    $this->table('skill');

}

 public function buildRules(RulesChecker $rules)
{
    $rules->add($rules->isUnique(['skill_title']));
    return $rules;
}
public function validationDefault(Validator $validator)
{
    return $validator
        ->notEmpty('skill_title', 'A Skill title is required');
}



}
?>