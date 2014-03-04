<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class UserForm extends CFormModel
{
	public $user;
	public $company_id;
	public $company_name;
	public $cod_role;
	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('company_id, company_name', 'required'),
				array('company_name', 'companyExists'),
		);
	}	

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'Remember me next time',
		);
	}

	public function companyExists($attribute)
	{
		foreach($this->user->userCompanies as $userCompany) {
			if ($userCompany->oid_company==$this->company_id && $userCompany->cod_role=='CUSTOMER') {
				$this->addError($attribute, Yii::t('gen','error.user.company.role.exists'));
			}
		}
	}	
	
	public function save() 
	{
		$this->user->save();
	}
	
	

}

