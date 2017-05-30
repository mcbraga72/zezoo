<?php

Class Contact extends CActiveRecord 
{

	public function tableName()
	{
		return 'contacts';
	}

	public function relations() {
        return array(
            'customer' => array(self::BELONGS_TO, 'Customer', 'customer_id'),
        );
    }

	public function rules()
	{
		return [
			['phone', 'required']			
		];
	}

	public function attributeLabels()
	{
		return [			
			'phone' => 'Telefone'			
		];
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}