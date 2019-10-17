<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $meta_title
 * @property string $name
 * @property int $category_id
 * @property string $image
 * @property string $screen1
 * @property string $screen2
 * @property string $screen3
 * @property string $short_content
 * @property string $content
 * @property int $status
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['title', 'name', 'content', 'status'], 'required'],
            [['status'], 'integer'],
            [['short_content', 'content','music'], 'string'],
            [['title', 'name', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'name' => 'Name',
            'category_id' => 'Category ID',
            'image' => 'Image',
            'screen1' => 'Screen1',
            'screen2' => 'Screen2',
            'screen3' => 'Screen3',
            'short_content' => 'Short Content',
            'content' => 'Content',
            'music' => 'Music',
            'status' => 'Status',
        ];
    }

    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }
    public function getImage()
    {
        return ($this->image) ? '/uploads/' . $this->image : '/no-image.png';
    }
    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }

}
