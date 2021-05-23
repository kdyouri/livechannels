<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LiveChannels Model
 *
 * @method \App\Model\Entity\LiveChannel newEmptyEntity()
 * @method \App\Model\Entity\LiveChannel newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LiveChannel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LiveChannel get($primaryKey, $options = [])
 * @method \App\Model\Entity\LiveChannel findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LiveChannel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LiveChannel[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LiveChannel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LiveChannel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LiveChannel[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LiveChannel[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LiveChannel[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LiveChannel[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LiveChannelsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('live_channels');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        $this->addBehavior('ADmad/Sequence.Sequence');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('language')
            ->maxLength('language', 50)
            ->requirePresence('language', 'create')
            ->notEmptyString('language');

        $validator
            ->scalar('country')
            ->maxLength('country', 50)
            ->requirePresence('country', 'create')
            ->notEmptyString('country');

        $validator
            ->scalar('category')
            ->maxLength('category', 50)
            ->requirePresence('category', 'create')
            ->notEmptyString('category');

        $validator
            ->scalar('uri')
            ->requirePresence('uri', 'create')
            ->notEmptyString('uri');

        $validator
            ->scalar('response_body')
            ->requirePresence('response_body', 'create')
            ->notEmptyString('response_body');

        $validator
            ->scalar('response_code')
            ->maxLength('response_code', 50)
            ->requirePresence('response_code', 'create')
            ->notEmptyString('response_code');

        $validator
            ->integer('frame_width')
            ->requirePresence('frame_width', 'create')
            ->notEmptyString('frame_width');

        $validator
            ->integer('frame_height')
            ->requirePresence('frame_height', 'create')
            ->notEmptyString('frame_height');

        $validator
            ->integer('bit_rate')
            ->requirePresence('bit_rate', 'create')
            ->notEmptyString('bit_rate');

        $validator
            ->integer('position')
            ->requirePresence('position', 'create')
            ->notEmptyString('position');

        $validator
            ->requirePresence('is_valid', 'create')
            ->notEmptyString('is_valid');

        return $validator;
    }
}
