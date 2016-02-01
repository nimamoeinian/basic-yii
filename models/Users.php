<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $family
 * @property integer $national_code
 * @property integer $id_number
 * @property integer $mobile
 * @property integer $tel
 * @property integer $age
 * @property integer $contract_number
 * @property integer $ref_date
 * @property integer $delivery_date
 * @property string $description
 * @property string $create_time
 * @property string $update_time
 * @property string $delete_time
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['national_code', 'age'], 'required'],
            [['national_code', 'id_number', 'mobile', 'tel', 'age', 'contract_number', 'ref_date', 'delivery_date'], 'integer'],
            [['national_code', 'id_number', 'mobile', 'tel', 'age', 'contract_number', 'ref_date', 'delivery_date'], 'safe'],
            [['national_code', 'age'], 'unique', 'targetAttribute' => ['national_code', 'age']],
            [['description'], 'string'],
            [['create_time', 'update_time', 'delete_time'], 'safe'],
            [['name', 'family'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'نام'),
            'family' => Yii::t('app', 'نام خانوادگی'),
            'national_code' => Yii::t('app', 'کدملی'),
            'id_number' => Yii::t('app', 'شماره شناسنامه'),
            'mobile' => Yii::t('app', 'موبایل'),
            'tel' => Yii::t('app', 'تلفن'),
            'age' => Yii::t('app', 'تاریخ تولد'),
            'contract_number' => Yii::t('app', 'شماره قرارداد'),
            'ref_date' => Yii::t('app', 'تاریخ مراجعه'),
            'delivery_date' => Yii::t('app', 'تاریخ تحویل'),
            'description' => Yii::t('app', 'توضیحات'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
            'delete_time' => Yii::t('app', 'Delete Time'),
        ];
    }
}
