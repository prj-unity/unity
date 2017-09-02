<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuoteRequests Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $ProviderMessages
 * @property \Cake\ORM\Association\HasMany $Quotations
 * @property \Cake\ORM\Association\HasMany $QuoteRequestDetails
 * @property \Cake\ORM\Association\HasMany $UserMessages
 *
 * @method \App\Model\Entity\QuoteRequest get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuoteRequest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\QuoteRequest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuoteRequest|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuoteRequest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuoteRequest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuoteRequest findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuoteRequestsTable extends AppTable
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

        $this->setTable('quote_requests');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ProviderMessages', [
            'foreignKey' => 'quote_request_id'
        ]);
        $this->hasMany('Quotations', [
            'foreignKey' => 'quote_request_id'
        ]);
        $this->hasMany('QuoteRequestDetails', [
            'foreignKey' => 'quote_request_id'
        ]);
        $this->hasMany('UserMessages', [
            'foreignKey' => 'quote_request_id'
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
            ->requirePresence('genre', 'create')
            ->notEmpty('genre');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->date('reply_deadline')
            ->allowEmpty('reply_deadline');

        $validator
            ->date('delivery_date')
            ->allowEmpty('delivery_date');

        $validator
            ->integer('budget')
            ->allowEmpty('budget');

        $validator
            ->allowEmpty('contents');

        $validator
            ->boolean('deleted')
            ->requirePresence('deleted', 'create')
            ->notEmpty('deleted');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
