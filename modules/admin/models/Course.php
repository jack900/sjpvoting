<?php

namespace app\modules\admin\models;

use Yii;
use app\models\Users;
/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $course_code
 * @property string $course_name
 * @property int $created_by
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_code', 'course_name', 'created_by'], 'required'],
            [['created_by'], 'integer'],
            [['course_code', 'course_name'], 'string', 'max' => 50],
            [['course_code'], 'unique'],
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
            'course_code' => 'Course Code',
            'course_name' => 'Course Name',
            'created_by' => 'Created By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\CourseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\CourseQuery(get_called_class());
    }
    
     public function getCreated_By()
    {
        return $this->hasOne(Users::className(),['id'=>'created_by']);
    }
}
