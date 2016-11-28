<?php
namespace App\Model\Entity;

use Tools\Model\Entity\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property string $title
 * @property string $description
 * @property string $url
 * @property int $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\PostImage[] $post_images
 * @property \App\Model\Entity\PostTag[] $post_tags
 */
class Post extends Entity
{

    const ACTIVE = 1;
    const DISABLED = 0;
    
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
        'tags' => true,
        'id' => false
    ];
    
    /*
    * static enum: Model::function()
    * @access static
    */
    public static function statuses($value = null) {
        $options = array(
            self::ACTIVE => __('active', true),
            self::DISABLED => __('disabled', true)
        );
        return parent::enum($value, $options);
    }
}
