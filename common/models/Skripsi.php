<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "skripsi".
 *
 * @property string $nim
 * @property string $nama
 * @property string $judul
 * @property string $penguji
 * @property string $pembimbing
 * @property string $tahun
 * @property string $perguruan_tinggi
 */
class Skripsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skripsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'judul', 'tahun', 'perguruan_tinggi'], 'required'],
            [['tahun'], 'safe'],
            [['nim'], 'string', 'max' => 11],
            [['nama', 'penguji', 'pembimbing', 'perguruan_tinggi'], 'string', 'max' => 100],
            [['judul'], 'string', 'max' => 255],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'judul' => 'Judul',
            'penguji' => 'Penguji',
            'pembimbing' => 'Pembimbing',
            'tahun' => 'Tahun',
            'perguruan_tinggi' => 'Perguruan Tinggi',
        ];
    }
}
