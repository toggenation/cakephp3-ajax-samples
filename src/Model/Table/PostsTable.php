<?php
namespace App\Model\Table;

use App\Model\Entity\Post;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 *
 */
class PostsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('posts');
        $this->displayField('title');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator->add('title', [
            'length' => [ 
                'rule' => ['minLength' , 5],
                'message' => 'length is low dog'
                ]
        ]);
//        
//        $validator->add('title', [
//            'number' => [ 
//                'rule' => 'numeric',
//                'message' => 'its gotta be a number'
//                ]
//        ]);
        
         $validator->add('body', [
            'length' => [ 
                'rule' => ['minLength' , 5],
                'message' => 'length of body is low dog'
                ]
        ]);
        $validator
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        return $validator;
    }
}
