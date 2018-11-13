<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fitnessgoals".
 *
 * @property int $ID
 * @property string $goals
 * @property string $status
 * @property string $activeDate
 * @property string $inactveDate
 */
class Fitnessgoals extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fitnessgoals';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goals', 'status', 'activeDate', 'inactveDate'], 'required'],
            [['goals'], 'string', 'max' => 300],
            [['status', 'activeDate', 'inactveDate'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'goals' => 'Goals',
            'status' => 'Status',
            'activeDate' => 'Active Date',
            'inactveDate' => 'Inactve Date',
        ];
    }
}
