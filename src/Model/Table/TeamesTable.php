<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teames Model
 *
 * @method \App\Model\Entity\Teame get($primaryKey, $options = [])
 * @method \App\Model\Entity\Teame newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Teame[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Teame|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Teame saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Teame patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Teame[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Teame findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TeamesTable extends Table
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

        $this->setTable('teames');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('poste')
            ->maxLength('poste', 200)
            ->requirePresence('poste', 'create')
            ->notEmptyString('poste');

        $validator
            ->scalar('avatare_name')
            ->maxLength('avatare_name', 200)
            ->requirePresence('avatare_name', 'create')
            ->notEmptyString('avatare_name');

        $validator
            ->scalar('avatare_path')
            ->maxLength('avatare_path', 200)
            ->requirePresence('avatare_path', 'create')
            ->notEmptyString('avatare_path');

        $validator
            ->integer('valide')
            ->allowEmptyString('valide');

        return $validator;
    }
}
