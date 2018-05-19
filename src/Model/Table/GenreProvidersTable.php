<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GenreProviders Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Providers
 * @property \Cake\ORM\Association\BelongsTo $LargeGenres
 * @property \Cake\ORM\Association\BelongsTo $Genres
 *
 * @method \App\Model\Entity\GenreProvider get($primaryKey, $options = [])
 * @method \App\Model\Entity\GenreProvider newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GenreProvider[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GenreProvider|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GenreProvider patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GenreProvider[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GenreProvider findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GenreProvidersTable extends Table
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

        $this->setTable('genre_providers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Providers', [
            'foreignKey' => 'provider_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LargeGenres', [
            'foreignKey' => 'large_genre_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Genres', [
            'foreignKey' => 'genre_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['provider_id'], 'Providers'));
        $rules->add($rules->existsIn(['large_genre_id'], 'LargeGenres'));
        $rules->add($rules->existsIn(['genre_id'], 'Genres'));

        return $rules;
    }
}
