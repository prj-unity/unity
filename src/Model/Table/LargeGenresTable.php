<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LargeGenres Model
 *
 * @property \Cake\ORM\Association\HasMany $GenreProviders
 * @property \Cake\ORM\Association\HasMany $Genres
 *
 * @method \App\Model\Entity\LargeGenre get($primaryKey, $options = [])
 * @method \App\Model\Entity\LargeGenre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LargeGenre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LargeGenre|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LargeGenre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LargeGenre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LargeGenre findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LargeGenresTable extends Table
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

        $this->setTable('large_genres');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('GenreProviders', [
            'foreignKey' => 'large_genre_id'
        ]);
        $this->hasMany('Genres', [
            'foreignKey' => 'large_genre_id'
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
            ->requirePresence('large_genre_name', 'create')
            ->notEmpty('large_genre_name');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        return $validator;
    }
}
