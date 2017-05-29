<?php

class m170529_131733_create_customers_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('customers', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'email' => 'string NOT NULL',
        ), "ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
	}

	public function down()
	{
		$this->dropTable('customers');
	}
}