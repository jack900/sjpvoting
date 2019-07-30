<?php

namespace app\models;

use Yii;

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
            [['student_id', 'firstname', 'lastname', 'email', 'contact', 'department', 'course', 'program', 'created_by'], 'required'],
            [['student_id', 'contact', 'created_by'], 'integer'],
            [['department', 'course', 'program'], 'string'],
            [['firstname', 'lastname'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 50],
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
            'created_by' => 'Created By',
        ];
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
