<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property int $Customer_ID
 * @property string $Receipt_No
 * @property string $Date
 * @property string $Customer_Name
 * @property string $Date_Of_Birth
 * @property string $Age
 * @property string $Address
 * @property string $Mobile_Number
 * @property string $Alternate_Number
 * @property string $Batch_Timing
 * @property string $Locker_No
 * @property string $Fitness_Goals
 * @property string $Medical_Conditions
 * @property string $Created_Date
 * @property string $Expiry_Date
 * @property string $Employment_Status
 * @property string $Status
 * @property int $User_ID
 *
 * @property PaymentDetails[] $paymentDetails
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Receipt_No' ],'required'],

            [[ 'Date', 'Customer_Name', 'Date_Of_Birth', 'Age', 'Address', 'Mobile_Number', 'Alternate_Number', 'Batch_Timing', 'Locker_No', 'Medical_Conditions', 'Created_Date', 'Employment_Status', 'Status', 'User_ID','Gender'], 'required'],
            [['User_ID'], 'integer'],
            [['Receipt_No', 'Customer_Name'], 'string', 'max' => 250],
            [['Date', 'Mobile_Number', 'Alternate_Number', 'Batch_Timing', 'Locker_No', 'Created_Date', 'Expiry_Date', 'Employment_Status', 'Status'], 'string', 'max' => 100],
            [['Date_Of_Birth'], 'string', 'max' => 50],
            [['Age'], 'string', 'max' => 30],
            [['Address'], 'string', 'max' => 500],
            [['Medical_Conditions'], 'string', 'max' => 300],
            [['Fitness_Goals'], 'string', 'max' => 300],
             [['Gender'], 'string', 'max' => 30],
              [['Image_Path'], 'file'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Customer_ID' => 'Customer  ID',
            'Receipt_No' => 'Receipt  No',
            'Date' => 'Date',
            'Customer_Name' => 'Customer  Name',
            'Date_Of_Birth' => 'Date  Of  Birth',
            'Age' => 'Age',
            'Address' => 'Address',
            'Mobile_Number' => 'Mobile  Number',
            'Alternate_Number' => 'Alternate  Number',
            'Batch_Timing' => 'Batch  Timing',
            'Locker_No' => 'Locker  No',
            'Fitness_Goals' => 'Fitness  Goals',
            'Medical_Conditions' => 'Medical  Conditions',
            'Created_Date' => 'Created  Date',
            'Expiry_Date' => 'Expiry  Date',
            'Employment_Status' => 'Employment  Status',
            'Status' => 'Status',
            'User_ID' => 'User',
            'Gender' => 'Gender',
             'Image_Path' => 'Image_Path',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentDetails()
    {
        return $this->hasMany(PaymentDetails::className(), ['Customers_ID' => 'Customer_ID']);
    }
}
