<?php

Class Customer extends CActiveRecord 
{

	public function tableName()
	{
		return 'customers';
	}

	public function relations() {
        return array(
            'contacts' => array(self::HAS_MANY, 'Contact', 'customer_id'),
        );
    }

	public function rules()
	{
		return [
			[['name', 'email'], required],
			['email', 'email']			
		];
	}

	public function attributeLabels()
	{
		return [
			'name' => 'Nome',
			'email' => 'E-mail'			
		];
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}