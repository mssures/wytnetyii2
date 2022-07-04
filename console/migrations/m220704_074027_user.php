<?php

use yii\db\Migration;

/**
 * Class m220704_074027_user
 */
class m220704_074027_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

		$this->createTable('user',[
								    'id' => $this->primaryKey(),
						            'username' => $this->string()->notNull()->unique(),
									'password' => $this->string()->notNull(),
									'status' => $this->smallInteger()->notNull()->defaultValue(10), 										
								   ]);
                                   
                                   
		$this->insert('user',[
                        'username' => 'admin',	
                        'password' => md5('admin'),
                        'status' => '1',
                      ]);	
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       // echo "m220704_074027_user cannot be reverted.\n";

        //return false;
		
		$this->dropTable("users");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220704_074027_user cannot be reverted.\n";

        return false;
    }
    */
}
