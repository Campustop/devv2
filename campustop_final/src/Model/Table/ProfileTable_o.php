<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class ProfileTable extends Table
{

public function initialize(array $config)
    {
        $this->table('user_basic');

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


    }


public function validationDefault(Validator $validator)
    {
        return $validator
          ->notEmpty('fname', 'A country name is required')
           ->notEmpty('mname', 'A country code is required');
      
    
          
           
    }



}
?>