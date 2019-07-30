<?php

namespace app\modules\admin\models;

use Yii;
//use app\modules\models\Positions;
/**
 * This is the model class for table "positions".
 *
 * @property int $id
 * @property string $description
 * @property int $max_vote
 * @property int $priority
 */
class Positions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'positions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'max_vote', 'priority'], 'required'],
            [['max_vote', 'priority'], 'integer'],
            [['description'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'max_vote' => 'Max Vote',
            'priority' => 'Priority',
        ];
    }
}
