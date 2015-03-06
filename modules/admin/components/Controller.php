<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03.03.15
 * Time: 17:33
 */

namespace app\modules\admin\components;


class Controller extends \yii\web\Controller
{
    /**
     * @inheritdoc
     */
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
    }
}