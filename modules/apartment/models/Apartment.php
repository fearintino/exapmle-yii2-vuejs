<?php

namespace app\modules\apartment\models;

use Yii;

/**
 * This is the model class for table "apartment".
 *
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property integer $source_id
 * @property string $dt
 * @property string $country
 * @property string $city
 * @property string $metro
 * @property string $address
 * @property double $sq
 * @property integer $floor
 * @property integer $floor_total
 * @property integer $price_rub
 * @property string $phone
 * @property string $photo
 */
class Apartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apartment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc', 'address', 'photo'], 'string'],
            [['source_id', 'floor', 'floor_total', 'price_rub'], 'integer'],
            [['dt'], 'safe'],
            [['sq'], 'number'],
            [['name', 'country', 'city', 'metro', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'desc' => 'Desc',
            'source_id' => 'Source ID',
            'dt' => 'Dt',
            'country' => 'Country',
            'city' => 'City',
            'metro' => 'Metro',
            'address' => 'Address',
            'sq' => 'Sq',
            'floor' => 'Floor',
            'floor_total' => 'Floor Total',
            'price_rub' => 'Price Rub',
            'phone' => 'Phone',
            'photo' => 'Photo',
        ];
    }
}
