<?php
namespace lo\modules\page\meta;

use Yii;
use common\db\MetaFields;


/**
 * Class PageMeta
 * Мета описание модели страницы
 * @package app\modules\banners\models\meta
 */
class PageMeta extends MetaFields
{
    /**
     * @inheritdoc
     */
    protected function config()
    {
        return [
            "name" => [
                "definition" => [
                    "class" => \common\db\fields\TextField::className(),
                    "title" => Yii::t('common', 'Name'),
                    "showInGrid" => true,
                    "showInFilter" => true,
                    "isRequired" => true,
                    "editInGrid" => true,
                ],
                "params" => [$this->owner, "name"]
            ],
            "slug" => [
                "definition" => [
                    "class" => \common\db\fields\SlugField::className(),
                    "title" => Yii::t('common', 'Slug'),
                    "isRequired" => true,
                    "showInGrid" => true,
                    "generateFrom" => "name",
                ],
                "params" => [$this->owner, "slug"]
            ],
            "text" => [
                "definition" => [
                    "class" => \common\db\fields\TextAreaField::className(),
                    "title" => Yii::t('common', 'Text'),
                    "showInGrid" => false,
                    "isRequired" => true,
                ],
                "params" => [$this->owner, "text"]
            ],
        ];
    }
}