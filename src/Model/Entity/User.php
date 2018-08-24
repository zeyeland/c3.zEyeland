<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $islander_id
 * @property string $islander_name
 * @property string $email
 * @property string $password
 * @property int $body
 * @property int $mind
 * @property int $spirit
 * @property int $level
 * @property int $exp
 * @property int $purse
 * @property int $honor
 * @property int $health
 * @property string $islander_focus
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'islander_name' => true,
        'email' => true,
        'password' => true,
        'body' => true,
        'mind' => true,
        'spirit' => true,
        'level' => true,
        'exp' => true,
        'purse' => true,
        'honor' => true,
        'health' => true,
        'islander_focus' => true,
        'quest_points' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
    
}
