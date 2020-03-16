<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Abouts Model
 *
 * @method \App\Model\Entity\About get($primaryKey, $options = [])
 * @method \App\Model\Entity\About newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\About[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\About|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\About saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\About patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\About[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\About findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AboutsTable extends Table
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

        $this->setTable('abouts');
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
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('image_name')
            ->maxLength('image_name', 200)
            ->allowEmptyFile('image_name');

        $validator
            ->scalar('image_path')
            ->maxLength('image_path', 200)
            ->allowEmptyFile('image_path');

        $validator
            ->scalar('video_name')
            ->maxLength('video_name', 200)
            ->allowEmptyString('video_name');

        $validator
            ->scalar('video_path')
            ->maxLength('video_path', 200)
            ->allowEmptyString('video_path');

        $validator
            ->scalar('subtexte_title')
            ->allowEmptyString('subtexte_title');

        $validator
            ->scalar('subtexte')
            ->allowEmptyString('subtexte');

        $validator
            ->scalar('subtext1')
            ->allowEmptyString('subtext1');

        $validator
            ->scalar('subtext_title1')
            ->allowEmptyString('subtext_title1');

        $validator
            ->scalar('subtext2')
            ->allowEmptyString('subtext2');

        $validator
            ->scalar('subtext_title2')
            ->allowEmptyString('subtext_title2');

        $validator
            ->scalar('subicone')
            ->maxLength('subicone', 200)
            ->allowEmptyString('subicone');

        $validator
            ->integer('valide')
            ->allowEmptyString('valide');

        return $validator;
    }
}
