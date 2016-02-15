<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "publication".
 *
 * @property integer $id
 * @property string $title
 * @property string $date
 * @property string $descriptoin
 * @property string $text
 */
class Publication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publication';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'date', 'descriptoin', 'text'], 'required'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['descriptoin'], 'string', 'max' => 300],
            [['text'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'date' => 'Date',
            'descriptoin' => 'Descriptoin',
            'text' => 'Text',
        ];
    }
}
