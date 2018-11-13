<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "batch".
 *
 * @property int $batchID
 * @property string $batch
 * @property string $status
 * @property string $activeDate
 * @property string $inactveDate
 */
class Batch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'batch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['batch', 'status', 'activeDate', 'inactveDate'], 'required'],
            [['batch', 'activeDate', 'inactveDate'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'batchID' => 'Batch ID',
            'batch' => 'Batch',
            'status' => 'Status',
            'activeDate' => 'Active Date',
            'inactveDate' => 'Inactve Date',
        ];
    }
}
