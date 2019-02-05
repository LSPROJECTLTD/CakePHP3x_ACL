<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Patrimonios Model
 *
 * @method \App\Model\Entity\Patrimonio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Patrimonio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Patrimonio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Patrimonio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Patrimonio|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Patrimonio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Patrimonio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Patrimonio findOrCreate($search, callable $callback = null, $options = [])
 */
class PatrimoniosTable extends Table
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

        $this->setTable('patrimonios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('numero')
            ->allowEmptyString('numero');

        return $validator;
    }
}
