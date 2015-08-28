<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $No
 * @property string $ProductCode
 * @property string $ProductName
 * @property string $Image
 * @property string $Type
 * @property integer $Cost
 * @property string $Company
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductCode', 'ProductName', 'Image', 'Type', 'Cost', 'Company'], 'required'],
            [['ProductCode', 'ProductName', 'Image', 'Type', 'Company'], 'string'],
            [['Cost'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'No' => 'No',
            'ProductCode' => 'Product Code',
            'ProductName' => 'Product Name',
            'Image' => 'Image',
            'Type' => 'Type',
            'Cost' => 'Cost',
            'Company' => 'Company',
        ];
    }
}
