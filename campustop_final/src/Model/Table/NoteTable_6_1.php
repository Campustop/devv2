<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class NoteTable extends Table
{

public function initialize(array $config)
    {
        $this->table('note');

        $this->belongsTo('Countrys', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER',
        ]);
         $this->belongsTo('Province', [
            'foreignKey' => 'province_id',
            'joinType' => 'INNER',
        ]);
         $this->belongsTo('City', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER',
        ]);
         $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);



    }

public function validationDefault(Validator $validator)
    {
        return $validator
          ->notEmpty('tag', 'A country name is required');
          
    
          
           
    }

    public function buildRules(RulesChecker $rules)
{
    $rules->add($rules->isUnique(['name_of_resourse']));

    return $rules;
}



}
?>