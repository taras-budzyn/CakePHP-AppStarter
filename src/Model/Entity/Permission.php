<?php
namespace App\Model\Entity;

use Tools\Model\Entity\Entity;

/**
 * Permission Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property int $rule
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Category $category
 */
class Permission extends Entity
{
    const FULL = 2;
    const MANAGER = 1;

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
    
    /*
    * static enum: Model::function()
    * @access static
    */
    public static function statuses($value = null) {
        $options = array(
            self::FULL => __('full', true),
            self::MANAGER => __('manager', true)
        );
        return parent::enum($value, $options);
    }
}
