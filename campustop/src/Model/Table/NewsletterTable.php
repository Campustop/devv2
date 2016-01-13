<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class NewsletterTable extends Table
{

public function initialize(array $config)
    {
        $this->table('newsletter');

    }

public function validationDefault(Validator $validator)
    {
       
           
    }



}
?>