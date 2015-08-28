<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $No
 * @property string $CategoryCode
 * @property string $CategoryName
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CategoryCode', 'CategoryName'], 'required'],
            [['CategoryCode', 'CategoryName'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'No' => 'No',
            'CategoryCode' => 'Category Code',
            'CategoryName' => 'Category Name',
        ];
    }
}
