<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03.03.15
 * Time: 18:37
 */

namespace app\helpers;


class StringHelper extends \yii\helpers\StringHelper
{
    /**
     * @param string $string
     * @param bool $toLatin
     * @return mixed
     */
    public static function transliterate($string, $toLatin = true)
    {
        $rules = array(
            'щ' => 'shch',	'ж' => 'zh',	'х' => 'kh',	'ц' => 'ts',
            'ч' => 'ch',	'ш' => 'sh',	'ю' => 'iu',	'я' => 'ia',
            'а' => 'a',		'б' => 'b',		'в' => 'v',		'г' => 'g',
            'д' => 'd',		'ё' => 'e',		'е' => 'e',		'з' => 'z',
            'й' => 'i',		'и' => 'i',		'к' => 'k',		'л' => 'l',
            'м' => 'm',		'н' => 'n',		'о' => 'o',		'п' => 'p',
            'р' => 'r',		'с' => 's',		'т' => 't',		'у' => 'u',
            'ф' => 'f',		'ы' => 'y',		'э' => 'e',
        );
        $rules = $toLatin ? $rules : array_flip($rules);
        return str_replace(array_keys($rules), $rules, $string);
    }

}