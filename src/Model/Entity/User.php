<?php
namespace App\Model\Entity;

use Tools\Model\Entity\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $name
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $type
 *
 * @property \App\Model\Entity\Permission[] $permissions
 * @property \App\Model\Entity\Post[] $posts
 */
class User extends Entity
{
    const SUPERADMIN = 2;
    const MANAGER = 1;
    const USER = 0;

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
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
    
    
    /*
     * static enum: Model::function()
     * @access static
     */
    public static function statuses($value = null) {
        $options = array(
            self::SUPERADMIN => __('superadmin', true),
            self::MANAGER => __('manager', true),
            self::USER => __('user', true)
        );
        return parent::enum($value, $options);
    }
}
