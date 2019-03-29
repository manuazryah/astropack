<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $product_title
 * @property string $sub_title
 * @property string $description
 * @property string $detailed_description
 * @property string $image
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Products extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['detailed_description'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['product_title', 'sub_title', 'description', 'brand', 'detailed_description', 'canonical_name', 'meta_title', 'meta_description', 'meta_keyword'], 'required'],
            [['DOC', 'DOU', 'baner_image'], 'safe'],
            [['product_title', 'sub_title'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 175],
            [['description'], 'string'],
            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'product_title' => 'Product Title',
            'sub_title' => 'Sub Title',
            'description' => 'Description',
            'detailed_description' => 'Detailed Description',
            'image' => 'Image',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
