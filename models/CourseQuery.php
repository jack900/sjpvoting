<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[\app\modules\admin\models\Course]].
 *
 * @see \app\modules\admin\models\Course
 */
class CourseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\modules\admin\models\Course[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\modules\admin\models\Course|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
