<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[\app\modules\admin\models\Program]].
 *
 * @see \app\modules\admin\models\Program
 */
class ProgramQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\modules\admin\models\Program[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\modules\admin\models\Program|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
