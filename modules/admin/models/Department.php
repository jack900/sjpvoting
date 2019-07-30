<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string $department_code
 * @property string $department_name
 * @property int $created_by
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_code', 'department_name', 'created_by'], 'required'],
            [['created_by'], 'integer'],
            [['department_code', 'department_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_code' => 'Department Code',
            'department_name' => 'Department Name',
            'created_by' => 'Created By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\DepartmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\DepartmentQuery(get_called_class());
    }
}
