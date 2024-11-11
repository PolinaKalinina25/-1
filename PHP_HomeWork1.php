<?php
//1. Проверка, отрицательно число или нет
function checkNegative($number)
{
	//Проверяем, меньше ли число нуля
	if ($number < 0){
		echo "Число отрицательное"; //Если меньше, выводим сообщение 
	}
	else{
		echo "Число положительное";//Если больше нуля, выводим сообщение
	}
}
//Вызываем функцию
checkNegative(-23);

//2. Вывод длины строки
function getStringLength($string)
{
	//С помощью strlen() посчитаем кол-во символов в строке
	echo "Длина строки".mb_strlen($string);
}
getStringLength("Привет, мир!");

//3. Вывод последнего символа строки
function getLastCharecter($string)
{
	//с помощью substr() получим символ с конца строки указав -1
	echo "Последний символ строки: ".mb_substr($string, -1);
}
getLastCharecter("Привет");

//4. Проверка, четное ли число
function checkEvenOdd($number)
{
	//Проверям, равен ли остаток от деления числа на 2 нулю
	if ($number % 2 == 0)
	{
		echo "Число четное" //Выводим сообщение если четное
	}
	else
	{
		echo "Число нечетное" //Выводим если число нечетное
	}
}
checkEvenOdd(22);

//5. Проверка, совпадают ли первые буквы двух слов
function checkFirstLetter($word1, $word2)
{
	//С помощью substr() сравниваем первые буквы
	if (mb_substr($word1, 0, 1) === mb_substr($word2, 0, 1))
	{
		echo "Первые буквы совпадают";
	}
	else 
	{
		echo "Первые буквы не совпадают"
	}
}
checkFirstLetter("Good", "Bad");

//6. Вывод первой цифры числа
function getFirstDigit($number)
{
	//Преобразуем число в строку, чтобы найти первый символ
	echo "Первая цифра числа: ".mb_substr((string)$number, 0, 1);
}
getFirstDigit(457);

//7. Вывод предпоследнего символа строки (если более одного символа)
function getPenultimateCharacter($string)
{
	//Проверим, что длина строки >1
	if (mb_strlen($string) > 1) 
	{
		echo "Предпоследний символ строки: ".mb_substr($string, -2, 1);
	}
	else
	{
		echo "Строка содержит только один символ";
	}
}
getPenultimateCharacter("Hello!");

//8. Функция, округляющая все числа в массиве
<?php
function roundArray($array)
{
	//Перебираем массив с помощью foreach
	foreach ($array as &$i)
	{
		if (is_numeric($i))
		{
			//Проверяем, является ли элемент массива числом
			$i = round($i); //Округляем число
		}
	}
	return $array; //Возвращаем измененный массив
}
$numbers = [1.5, 5.2, 8.4]; //добавляем переменную в которой будет храниться массив
print_r(roundArray($numbers)); //print_r - выводит удобочитаемую информацию о переменной

//9. Функция, обрезающая строки до 5 символов или добавляющая букву, если в строке меньше 5 символов
<?php
function trimOrExtendArray($array)
{
	foreach($array as &$i)
	{
		if (is_string($i))//Проверка, является ли элемент строкой
		{
			if (mb_strlen($i) > 5) //Если длина больше 5, обрезаем
			{
				$i = mb_substr($i, 0, 5);
			}
			elseif (mb_strlen($i) < 5) //Если меньше 5, добавляем символ !
			{
				//str_pad дополянет строку другой строкой до заданной длинны
				$i = str_pad($i, 5, "!"); //Добавляем символ "!" до длины 5
			}
		}
	}
	return $array; //Возвращаем изменненый массив
}
$string = ["Привет", "море", "Dog", "Sumtimes"]; //Добавляем переменную в которой будет храниться массив
print_r(trimOrExtendArray($string));
