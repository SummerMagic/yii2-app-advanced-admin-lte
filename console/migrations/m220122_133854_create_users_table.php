<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m220122_133854_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     * @desc 设计表
     */
    public function safeUp()
    {
        $this->createTable('{{%user_designer}}', [
            'id' => $this->primaryKey()->comment('自增id'),
            'name' => $this->string()->notNull()->unique()->comment('设计师名称'),
            'avatar' => $this->string()->null()->comment('头像'),
            'introduction' => $this->string()->null()->comment('个人介绍'),
            'email' => $this->string()->notNull()->unique()->comment('电子邮件'),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)->comment('状态'),
            'created_at' => $this->integer()->null()->comment('创建时间'),
            'updated_at' => $this->integer()->null()->comment('更新时间'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_designer}}');
    }
}
