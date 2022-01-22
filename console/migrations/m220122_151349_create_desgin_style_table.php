<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%desgin_style}}`.
 */
class m220122_151349_create_desgin_style_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%desgin_style}}', [
            'id' => $this->primaryKey()->comment('id'),
            'name' => $this->string('255')->null()->comment('风格名称'),
            'status' => $this->integer('1')->defaultValue('0')->comment('0 => 启用,1=>禁用'),
            'created_at' => $this->integer()->null()->comment('创建时间'),
            'updated_at' => $this->integer()->null()->comment('更新时间'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%desgin_style}}');
    }
}
