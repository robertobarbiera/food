<?php

/**
 * This is the model class for table "TB_USER_COMPANY".
 *
 * The followings are the available columns in table 'TB_USER_COMPANY':
 * @property integer $oid_user
 * @property integer $oid_company
 * @property string $cod_role
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Company $company
 * @property Role $role
 */
class UserCompany extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'TB_USER_COMPANY';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oid_user, oid_company, cod_role', 'required'),
			array('oid_user, oid_company', 'numerical', 'integerOnly'=>true),
			array('cod_role', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('oid_user, oid_company, cod_role', 'safe', 'on'=>'search'),
		);
	}

	public function getCompanyName() {
		return $this->company->name;
	}
	
	public function getUniqueId() {
		return $this->oid_user.'|'.$this->oid_company.'|'.$this->cod_role;
	}
	
	public function getExtendedRole() {
		return $this->company->name.' ('.$this->role->descriptionLang.')';
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user' => array(self::BELONGS_TO, 'User', 'oid_user'),
			'company' => array(self::BELONGS_TO, 'Company', 'oid_company'),
			'role' => array(self::BELONGS_TO, 'Role', 'cod_role'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'oid_user' => 'User',
			'oid_company' => 'Company',
			'cod_role' => 'Role',
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

		$criteria->compare('oid_user',$this->oid_user);
		$criteria->compare('oid_company',$this->oid_company);
		$criteria->compare('cod_role',$this->cod_role,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserRestaurant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
