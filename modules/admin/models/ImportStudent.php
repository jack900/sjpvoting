<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "import_student".
 *
 * @property int $id
 * @property string $filename
 * @property string $date_import
 * @property int $created_by
 */
class ImportStudent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

      public $studfile;
    public static function tableName()
    {
        return 'import_student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['filename', 'date_import'], 'required'],
            [['date_import'], 'safe'],
        
             [['studfile'],'file'],
            [['filename'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filename' => 'Filename',
            'date_import' => 'Date Import',
            'created_by' => 'Created By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ImportStudentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ImportStudentQuery(get_called_class());
    }
}
