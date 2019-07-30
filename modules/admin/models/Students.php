<?php

namespace app\modules\admin\models;

use Yii;
use app\models\Users;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property int $student_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $contact
 * @property string $department
 * @property string $course
 * @property string $program
  * @property int $importstudent_id
 * @property int $created_by
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
  

    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'firstname', 'lastname', 'email', 'contact', 'department', 'course', 'program','importstudent_id'], 'required'],
            [['student_id', 'contact','importstudent_id'], 'integer'],
            [['department', 'course', 'program'], 'string'],
            
            [['firstname', 'lastname'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 50],
            [['student_id'], 'unique'],
             [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'contact' => 'Contact',
            'department' => 'Department',
            'course' => 'Course',
            'program' => 'Program',
            'importstudent_id' => 'Importstudent ID',
            'created_by' => 'Created By',
        ];
    }

  public function getCreated_By()
    {
        return $this->hasOne(Users::className(),['id'=>'created_by']);
    }
    /**
     * {@inheritdoc}
     * @return StudentsQuery the active query used by this AR class.
     */


    public static function find()
    {
        return new StudentsQuery(get_called_class());
    }


}
