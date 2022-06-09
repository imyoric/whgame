<?php
use app\modules\whapi; //Портируем класс WHApi
use php\lang\Thread; //Портируем класс Thread для создания потоков
use Exception; //Портируем доп класс
use php\gui\UXApplication; //Портируем доп класс

(new Thread(function (){  //Создаем поток
$GLOBALS['var']['testvar'] = '0'; //Устанавливаем переменную testvar (Имя может быть любое) в секции "var" - которая специально отделена под доп переменные
while ($GLOBALS['var']['testvar'] == '0'){ //Создаем цикл который будет работать пока переменная $GLOBALS['var']['testvar'] будет равна нулю
if($GLOBALS['var']['var-api']['form'] == 'MainForm'){ //Проверяем какая форма открыта
            UXApplication::runLater(function () use () { //Если открылась форма MainForm то переходим в главный поток
            echo whapi::newobject('simple_proto.money','22','34','bbv'); //Создаем обьект "монета" и результат отправляем в консоль
            }); //Закрываем главный поток
   $GLOBALS['var']['testvar'] = '1'; //Если открылась форма MainForm то устанавливаем переменную  $GLOBALS['var']['testvar'] = 1
  }//Закрываем условие
}//Закрываем цикл
 }))->start(); //Закрываем поток + запускаем его
