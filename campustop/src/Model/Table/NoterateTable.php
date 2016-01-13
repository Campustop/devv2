<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;




class NoterateTable extends Table
{

public function initialize(array $config)
    {
        $this->table('note_rate');

       
    }
    public function findAverage(Query $query, array $options = [])
    {
        $avg = $query->func()->avg('rating');
        $query->select(['average' => $avg]);
        return $query;
    }

}
?>