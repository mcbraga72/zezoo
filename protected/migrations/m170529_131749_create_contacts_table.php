<?php

class m170529_131749_create_contacts_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('contacts', array(
            'id' => 'pk',
            'customer_id' => 'int NOT NULL',
            'name' => 'string NOT NULL',
            'phone' => 'string NOT NULL',
        ), "ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");

        $this->addForeignKey('FK_contact_customer', 'contacts', 'customer_id', 'customers', 'id', 'CASCADE', 'RESTRICT');
	}

	public function down()
	{
		$this->dropTable('contacts');
	}
}