<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Slides Model
 *
 * @method \App\Model\Entity\Slide get($primaryKey, $options = [])
 * @method \App\Model\Entity\Slide newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Slide[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Slide|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Slide saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Slide patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Slide[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Slide findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SlidesTable extends Table
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

        $this->setTable('slides');
        $this->setDisplayField('id');
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
            ->scalar('image_name')
            ->maxLength('image_name', 200)
            ->allowEmptyFile('image_name');

        $validator
            ->scalar('image_path')
            ->maxLength('image_path', 200)
            ->requirePresence('image_path', 'create')
            ->notEmptyFile('image_path');

        $validator
            ->scalar('description_texte')
            ->requirePresence('description_texte', 'create')
            ->notEmptyString('description_texte');

        $validator
            ->integer('valide')
            ->notEmptyString('valide');

        return $validator;
    }
}
