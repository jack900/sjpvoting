<?php

namespace app\modules\admin\models;

use Yii;
use app\models\Users;
/**
 * This is the model class for table "campaign".
 *
 * @property int $id
 * @property string $election_name
 * @property string $election_term
 * @property string $election_start
 * @property string $election_end
 * @property int $created_by
 * @property string $description
 */
class Campaign extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'campaign';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['election_name', 'election_term', 'election_start', 'election_end', 'created_by', 'description'], 'required'],
            [['election_start', 'election_end'], 'safe'],
            [['created_by'], 'integer'],
            [['election_name', 'description'], 'string', 'max' => 100],
            [['election_term'], 'string', 'max' => 50],
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
            'election_name' => 'Election Name',
            'election_term' => 'Election Term',
            'election_start' => 'Election Start',
            'election_end' => 'Election End',
            'created_by' => 'Created By',
            'description' => 'Description',
        ];
    }
      public function getCreated_By()
    {
        return $this->hasOne(Users::className(),['id'=>'created_by']);
    }
}
