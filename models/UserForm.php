<?php
namespace app\models;
use yii\base\Model;
class UserForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return[
			[['name','email'],'required'],
		      ['email','email']
		  ];
	}


	public function save()
    {
      $model = new Profile();
     $model->user_id = $this->user_id;
      $model->firstname = $this->firstname;
      $model->lastname=$this->lastname;
    
       $model->bday=$this->bday;

      $model->gender=$this->gender;

      
     // var_dump($model);exit;

       // exit;
   ;
       return $model->save(); 
    }

}