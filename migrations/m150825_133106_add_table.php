<?php

use yii\db\Schema;
use yii\db\Migration;

class m150825_133106_add_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('category', [
            'No' => Schema::TYPE_PK,
            'categoryCode' => Schema::TYPE_STRING,
            'categoryName' => Schema::TYPE_STRING,
        ]);
        $this->createTable('product', [
            'No' => Schema::TYPE_PK,
            'ProductCode' => Schema::TYPE_STRING,    
            'ProductName' => Schema::TYPE_STRING,
            'Image' => Schema::TYPE_STRING,
            'Type' => Schema::TYPE_STRING,
            'Cost' => Schema::TYPE_INTEGER , 
            'Company' => Schema::TYPE_STRING,   
        ]);
        $this->insert('category', [
            'categoryCode' => 'C00001',
            'categoryName' => 'Điện thoại',
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('category');
        $this->dropTable('product');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
