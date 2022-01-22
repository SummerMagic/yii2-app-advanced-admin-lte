<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%decoration_progress}}`.
 */
class m220122_135529_create_decoration_progress_table extends Migration
{
    /**
     * {@inheritdoc}
     * @author 378400622@qq.com
     * @time 2022-01-22 21:56
     * @desc 装修进度表
     */
    public function safeUp()
    {
        $this->createTable('{{%decoration_progress}}', [
            'id' => $this->primaryKey()->comment('id'),
            'title' => $this->string()->comment('名称'),
            'progress' => $this->integer()->defaultValue(0)->comment('0=>未装修,1=>装修进行中,2=>已装修,3=>随便看看'),
            'created_at' => $this->integer()->null()->comment('创建时间'),
            'updated_at' => $this->integer()->null()->comment('更新时间'),
        ]);

        $this->insert('{{%decoration_progress}}',
            [
                'title' => '未装修',
                'progress' => 0,
                'created_at' => 1640865983,
                'updated_at' => 1640865983
            ],
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%decoration_progress}}');
    }
}
