<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "program".
 *
 * @property int $id
 * @property string $program_code
 * @property string $program_name
 * @property int $created_by
 */
class Program extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['program_code', 'program_name', 'created_by'], 'required'],
            [['created_by'], 'integer'],
            [['program_code', 'program_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'program_code' => 'Program Code',
            'program_name' => 'Program Name',
            'created_by' => 'Created By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\ProgramQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\ProgramQuery(get_called_class());
    }
}
