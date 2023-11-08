<?php
namespace core;

abstract class controller
{
	public function render($template, $data = array())
	{
		extract($data);
		ob_start();

		include realpath('app/views/'.$template.'.php');
		$content = ob_get_contents();
		ob_end_clean();

		include_once realpath('app/views/layout/index.php');
	}

    public function renderPartial ($template, $data = array())
    {
        extract($data);
        ob_start();

        include realpath('app/views/'.$template.'.php');
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    public function translit($cyrillicString) {
        $letters = [
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '-',   'ы' => 'y',   'ъ' => '-',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'Y',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => '-',   'Ы' => 'Y',   'Ъ' => '-',
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',

            ' ' => '-',   '_' => '-',   '`' => '-',
            '~' => '-',   '!' => '-',   '@' => '-',
            '#' => '-',   '$' => '-',   '%' => '-',
            '^' => '-',   '&' => '-',   '*' => '-',
            '(' => '-',   ')' => '-',   '=' => '-',
            '+' => '-',   '[' => '-',   ']' => '-',
            '\\' => '-',   '|' => '-',   '/' => '-',
            '.' => '-',   ',' => '-',   '{' => '-',
            '}' => '-',   '\'' => '-',   '"' => '-',
            ';' => '-',   ':' => '-',   '?' => '-',
            '<' => '-',   '>' => '-',   '№' => '-',
            '«' => '-',   '»' => '-',   '—' => '-'
        ];

        return strtr($cyrillicString, $letters);
    }

    public function getTimeAgoFrom($timestampValue)
    {
        $result = [];
        $words = [
            'лет'   => $timestampValue / 31556926 % 12,
            'месяцев'   => $timestampValue / 2592000 % 12,
            'дней'    => $timestampValue / 86400 % 30,
            'часов'   => $timestampValue / 3600 % 24,
            'минут' => $timestampValue / 60 % 60,
            'секунд' => $timestampValue % 60
        ];

        foreach($words as $key => $value){
            if ($value != 0) {
                $result[] = $value .' '. $key;
            }
        }

        while (count($result)>2){
            array_pop($result);
        }

        $result[] = 'назад';

        return join(' ', $result);
    }
}