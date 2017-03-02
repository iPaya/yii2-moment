<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

namespace iPaya\moment;

use yii\web\AssetBundle;

/**
 *
 * @package iPaya\moment
 */
class MomentAsset extends AssetBundle
{
    public $sourcePath = '@bower/moment/min';
    public $js = [
        'moment-with-locales.js'
    ];
}