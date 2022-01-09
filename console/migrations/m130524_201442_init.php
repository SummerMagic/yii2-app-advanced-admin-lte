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
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique()->comment('用户名称'),
            'auth_key' => $this->string(32)->notNull()->comment('auth_key'),
            'password_hash' => $this->string()->notNull()->comment('密码hash'),
            'password_reset_token' => $this->string()->unique()->comment('token'),
            'email' => $this->string()->notNull()->unique()->comment('电子邮件'),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)->comment('状态'),
            'created_at' => $this->integer()->notNull()->comment('创建时间'),
            'updated_at' => $this->integer()->notNull()->comment('更新时间'),
        ], $tableOptions);

//        $this->insert('{{%user}}', [
//            'username'=>'admin',
//            'auth_key'=>'oqYHnmKD8RbhK7IZ60RwWsZeK9F8c2Sg',
//            'password_hash'=>'$2y$13$1rTM.PFUhGx/OEOwSxcGu.pILDAu3ueVlWUdvRHepDXqkXINmI0Iy',
//            'password_reset_token'=>null,
//            'email'=>'test@domain.com',
//            'status'=>10,
//        ]);
    }

    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}
