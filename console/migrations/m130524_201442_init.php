<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey()->comment('自增id'),
            'username' => $this->string()->notNull()->unique()->comment('用户名称'),
            'auth_key' => $this->string(32)->notNull()->comment('auth_key'),
            'password_hash' => $this->string()->notNull()->comment('密码hash'),
            'password_reset_token' => $this->string()->unique()->comment('token'),
            'email' => $this->string()->notNull()->unique()->comment('电子邮件'),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)->comment('状态'),
            'created_at' => $this->integer()->null()->comment('创建时间'),
            'updated_at' => $this->integer()->null()->comment('更新时间'),
        ], $tableOptions);

        $this->insert('{{%users}}', [
            'username' => 'admin',
            'auth_key' => 'hvZzT1yrMJgMO_JbdOafhjzw9RYx6PzZ',
            'password_hash' => '$2y$13$1pfOkptg.5VusspwCpC6xuHa2dlOenZJpPWWhhntwOCcAb1NkbsI2',
            'password_reset_token' => null,
            'email' => '378400622@qq.com',
            'status' => 10,
            'created_at' => 1640865983,
            'updated_at' => 1640865983
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}
