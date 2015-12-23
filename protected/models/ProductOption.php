<?php

/**
 * This is the model class for table "product_option".
 *
 * The followings are the available columns in table 'product_option':
 * @property integer $product_option_id
 * @property string $product_option_name
 *
 * The followings are the available model relations:
 * @property ProductAttribute[] $productAttributes
 * @property ProductOptionValueToProductOption[] $productOptionValueToProductOptions
 */
class ProductOption extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_option';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_option_name', 'required'),
			array('product_option_name', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('product_option_id, product_option_name', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'productAttributes' => array(self::HAS_MANY, 'ProductAttribute', 'product_option_id'),
			'productOptionValueToProductOptions' => array(self::HAS_MANY, 'ProductOptionValueToProductOption', 'product_option_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'product_option_id' => 'Product Option',
			'product_option_name' => 'Product Option Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('product_option_id',$this->product_option_id);
		$criteria->compare('product_option_name',$this->product_option_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductOption the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
