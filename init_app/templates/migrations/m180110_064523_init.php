<?php

use yii\db\Migration;

/**
 * Class m180110_064523_init
 */
class m180110_064523_init extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'last_login' => $this->integer()->defaultValue(NULL),
            'ip_address' => $this->string()->defaultValue(NULL),
            'user_agent' => $this->string()->defaultValue(NULL),
            'attempt_login' => $this->integer()->defaultValue(0),
            'access_token' => $this->string()->defaultValue(NULL),
            'expiry_access_token' => $this->integer()->unsigned()->defaultValue(0),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
