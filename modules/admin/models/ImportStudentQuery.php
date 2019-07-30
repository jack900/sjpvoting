<?php

namespace app\modules\admin\models;

/**
 * This is the ActiveQuery class for [[ImportStudent]].
 *
 * @see ImportStudent
 */
class ImportStudentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ImportStudent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ImportStudent|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
