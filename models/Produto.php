<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $id
 * @property string|null $nome
 * @property float|null $preco
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preco'], 'number'],
            [['nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome'),
            'preco' => Yii::t('app', 'Preco'),
        ];
    }
}
