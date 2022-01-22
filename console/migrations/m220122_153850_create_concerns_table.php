<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%concerns}}`.
 * @desc 关注的节占点信息
 */
class m220122_153850_create_concerns_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%concerns}}', [
            'id' => $this->primaryKey()->comment('id'),
            'name' => $this->string(255)->null()->comment('关注节点名称'),
            'status' => $this->smallInteger()->defaultValue('0')->comment('节点状态 0 启用 , 1禁用'),
            'created_at' => $this->integer()->null()->comment('创建时间'),
            'updated_at' => $this->integer()->null()->comment('更新时间'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%concerns}}');
    }
}
