<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "partylist".
 *
 * @property int $id
 * @property string $partylist_name
 * @property string $description
 */
class Partylist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partylist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['partylist_name', 'description'], 'required'],
            [['partylist_name', 'description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'partylist_name' => 'Partylist Name',
            'description' => 'Description',
        ];
    }
}
