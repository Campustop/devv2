<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class CmsTable extends Table
{

public function initialize(array $config)
    {
        $this->table('cms');

    }


 public function buildRules(RulesChecker $rules)
{
    $rules->add($rules->isUnique(['cms_title']));

    return $rules;
}
public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('cms_title', 'A page title is required')
            ->notEmpty('cms_desc', 'A page description is required')
             ->add('cms_title', [
        'length' => [
            'rule' => ['minLength', 2],
            'message' => 'cms title need to be at least 10 characters long',
        ]
        ]);
    
          
           
    }



}
?>