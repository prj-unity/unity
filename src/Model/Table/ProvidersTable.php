<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Providers Model
 *
 * @property \Cake\ORM\Association\HasMany $GenreProviders
 * @property \Cake\ORM\Association\HasMany $ProviderMessages
 * @property \Cake\ORM\Association\HasMany $Quotations
 * @property \Cake\ORM\Association\HasMany $UserMessages
 *
 * @method \App\Model\Entity\Provider get($primaryKey, $options = [])
 * @method \App\Model\Entity\Provider newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Provider[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Provider|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Provider patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Provider[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Provider findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProvidersTable extends AppTable
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

        $this->setTable('providers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('GenreProviders', [
            'foreignKey' => 'provider_id'
        ]);
        $this->hasMany('ProviderMessages', [
            'foreignKey' => 'provider_id'
        ]);
        $this->hasMany('Quotations', [
            'foreignKey' => 'provider_id'
        ]);
        $this->hasMany('UserMessages', [
            'foreignKey' => 'provider_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->integer('pref')
            ->requirePresence('pref', 'create')
            ->notEmpty('pref');

        $validator
            ->requirePresence('addr_1', 'create')
            ->notEmpty('addr_1');

        $validator
            ->requirePresence('addr_2', 'create')
            ->notEmpty('addr_2');

        $validator
            ->allowEmpty('tel');

        $validator
            ->allowEmpty('region');

        $validator
            ->requirePresence('service_type', 'create')
            ->notEmpty('service_type');

        $validator
            ->allowEmpty('catchphrase');

        $validator
            ->requirePresence('genre', 'create')
            ->notEmpty('genre');

        $validator
            ->allowEmpty('profile1');

        $validator
            ->allowEmpty('profile2');

        $validator
            ->allowEmpty('profile3');

        $validator
            ->allowEmpty('profile4');

        $validator
            ->allowEmpty('example');

        $validator
            ->allowEmpty('image1');

        $validator
            ->allowEmpty('image2');

        $validator
            ->allowEmpty('image3');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
