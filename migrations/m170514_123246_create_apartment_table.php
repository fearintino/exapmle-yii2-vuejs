<?php

use yii\db\Migration;


/**
 * Handles the creation of table `apartment`.
 */
class m170514_123246_create_apartment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('apartment', [
            'id'          => $this->primaryKey(),
            'name'        => $this->string(),
            'desc'        => $this->text(),
            'source_id'   => $this->integer(),
            'dt'          => $this->dateTime(),
            'country'     => $this->string(),
            'city'        => $this->string(),
            'metro'       => $this->string(),
            'address'     => $this->text(),
            'sq'          => $this->float(),
            'floor'       => $this->integer(),
            'floor_total' => $this->integer()->defaultValue(0),
            'price_rub'   => $this->integer(),
            'phone'       => $this->string(),
            'photo'       => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('apartment');
    }
}
