//Задача 8:
//1. есть переменная $language. В ней может быть 2 варианта значений: 'en_GB' и ‘ru_RU‘'
//2. нужно написать код, который в случае, если $language имеет значение 'en_GB' -  в переменную $months запишет массив из 12 месяцев года на английском языке, если language === ‘ru_RU’ – то на русском;
//3. нужно выполнить задание с помощью 3 способов: через 2 if, через switch-case, через многомерный массив и без if’ов и switch-case.

<?php
//способ 1
$language = 'en_GB';
switch ($language) {
    case "en_GB" ;
        $months = array('month1', 'month2', 'month3', 'month4', 'month5', 'month6', 'month7', 'month8','month9', 'month10', 'month11', 'month12');
        echo "$months[0], $months[1], $months[2], $months[3], $months[4], $months[5], $months[6], $months[7], $months[8], $months[9], $months[10], $months[11]";
}
switch ($language) {
 case "ru_Ru";
$months = array('месяц0', 'месяц1', 'месяц2', 'месяц3', 'месяц4', 'месяц5', 'месяц6', 'месяц7', 'месяц8', 'месяц9', 'месяц10', 'месяц11');
echo "$months[0], $months[1], $months[2], $months[3], $months[4], $months[5], $months[6], $months[7], $months[8], $months[9], $months[10], $months[11]";
}
//способ 2
$language = 'en_GB';
if($language == 'en_GB'){
    echo 'month1, month2, month3, month4, months5, months6, months7, months8, months9, months10, months12';
}
if($language == 'ru_Ru'){
    echo 'месяц1, месяц2, месяц3, месяц4, месяц5, месяц6, месяц7, месяц8, месяц9, месяц10, месяц11 месяц12';
}
