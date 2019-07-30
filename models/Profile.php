<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property int $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $bday
 * @property string $gender
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id','firstname', 'lastname', 'bday', 'gender'], 'required'],
            [['user_id'], 'integer'],
            [['bday'], 'safe'],
            [['gender'], 'string'],
            [['username','firstname','lastname'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'username' => 'Username',
            'firstname' => 'First name',
            'lastname' => 'Lastname',
            'bday' => 'Bday',
            'gender' => 'Gender',
        ];
    }

      public function profile()
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

  

    /**
     * {@inheritdoc}
     * @return ProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProfileQuery(get_called_class());
    }
//dapat magkapariha of value sa column and duha ka database
    public function getUsers(){
        return $this->hasOne(Users::className(),['id' =>'user_id'] );
     //  return $this->hasOne(Users::className(),['id' =>'username'] );
    }

    public function getUsername()
{
    return $this->users ? $this->users->username : 'username';
}
    // public function getProfile(){
      //  return $this->hasOne(Profile::className(),['username' =>'id'] );
      //  return $this->hasOne(Users::className(),['username' =>'username'] );
   // }
}
