<?php

/**
 * This is the model class for table "product_attribute".
 *
 * The followings are the available columns in table 'product_attribute':
 * @property integer $product_attribute_id
 * @property integer $product_id
 * @property integer $product_option_id
 * @property integer $option_value_id
 * @property integer $option_value_price
 *
 * The followings are the available model relations:
 * @property Product $product
 * @property ProductOption $productOption
 */
class ProductAttribute extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_attribute';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, product_option_id, option_value_id, option_value_price', 'required'),
			array('product_id, product_option_id, option_value_id, option_value_price', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('product_attribute_id, product_id, product_option_id, option_value_id, option_value_price', 'safe', 'on'=>'search'),
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
			'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
			'productOption' => array(self::BELONGS_TO, 'ProductOption', 'product_option_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'product_attribute_id' => 'Product Attribute',
			'product_id' => 'Product',
			'product_option_id' => 'Product Option',
			'option_value_id' => 'Option Value',
			'option_value_price' => 'Option Value Price',
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

		$criteria->compare('product_attribute_id',$this->product_attribute_id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('product_option_id',$this->product_option_id);
		$criteria->compare('option_value_id',$this->option_value_id);
		$criteria->compare('option_value_price',$this->option_value_price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductAttribute the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
