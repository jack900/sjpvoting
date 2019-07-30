<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[\app\modules\admin\models\Department]].
 *
 * @see \app\modules\admin\models\Department
 */
class DepartmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\modules\admin\models\Department[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\modules\admin\models\Department|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
