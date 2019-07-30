<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "candidates".
 *
 * @property int $id
 * @property int $student_id
 * @property int $position_id
 * @property string $photo
 * @property int $partylist_id
 * @property int $campaign_id
 * @property string $platform
 */
class Candidates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
      public $file;
    public static function tableName()
    {
        return 'candidates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'position_id', 'photo', 'partylist_id', 'campaign_id', 'platform'], 'required'],
            [['student_id', 'position_id', 'partylist_id', 'campaign_id'], 'integer'],
            [['platform'], 'string'],
             [['file'],'file'],
            [['photo'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'campaign_id' => 'Campaign Name',
            'student_id' => 'Student ID',
                  'file' => 'Photo',
            'position_id' => 'Position ID',
            'partylist_id' => 'Partylist ID',
            'platform' => 'Platform',
        ];
    }

    public static function find()
    {
      return new CandidatesQuery(get_called_class());
    }
}
