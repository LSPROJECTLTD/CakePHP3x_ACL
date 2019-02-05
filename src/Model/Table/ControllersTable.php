<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Controllers Model
 *
 * @property \App\Model\Table\AcosTable|\Cake\ORM\Association\HasMany $Acos
 *
 * @method \App\Model\Entity\Controller get($primaryKey, $options = [])
 * @method \App\Model\Entity\Controller newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Controller[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Controller|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Controller|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Controller patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Controller[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Controller findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ControllersTable extends Table
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

        $this->setTable('controllers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Acos', [
            'foreignKey' => 'controller_id'
        ]);
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('controller')
            ->maxLength('controller', 50)
            ->requirePresence('controller', 'create')
            ->allowEmptyString('controller', false);

        $validator
            ->scalar('nickname')
            ->maxLength('nickname', 255)
            ->requirePresence('nickname', 'create')
            ->allowEmptyString('nickname', false);

        return $validator;
    }
}
