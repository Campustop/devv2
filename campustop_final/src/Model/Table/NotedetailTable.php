<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class NotedetailTable extends Table
{

public function initialize(array $config)
    {
        $this->table('note_detail');
    }



}
?>