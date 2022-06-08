## **RU:**

**-Необходимо использовать Java JRE 8!**

**-Запуск программы в отладочном режиме: (java -jar whgame.jar).**

**//~~-Версии до Pre-beta 1.4.3.02 можно найти на сайте thms.gq~~**

**-Крч все версии можно найти на сайте thms.gq! Гитхаб капец как лагает!**

### Моды:

#### **Портирование классов USE;**
**Для начала нам надо портировать все необходимые классы:**
> use app\modules\whapi; //Класс WHAPI
> 
> use php\lang\Thread; //Класс для создания потоков, пожалуйста используйте потоки.
> 
> use Exception; //Доп. класс
> 
> use php\gui\UXApplication; //Доп. Класс

#### **Потоки**

**Создать поток:**

*use() - Используется для портирования обычных переменных! Не глобальных.*

> (new Thread(function () use (){  
> 
> //Тут код
> 
> }))->start(); //Запуск потока

**Для выполнения GUI задач из под потока(Мы переходим в главный поток, нельзя выполнять операции с интерфейсом из под вторичного потока!):**

*use() - Используется для портирования обычных переменных! Не глобальных.*

> UXApplication::runLater(function () use () {
>
> //Тут скрипт
> 
>  });


## **EN: **

**-Must use Java JRE 8!**

**-Run the program in debug mode: (java -jar whgame.jar).**

**-Attention! English is not supported by the program!**

**//~~-Versions up to Pre-beta 1.4.3.02 can be found at thms.gq**

**Sorry, but I'm too lazy to translate the entire instruction)**
