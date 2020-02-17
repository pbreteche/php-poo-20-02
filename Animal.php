<?php

class Animal
{
    public static function dormir()
    {
        echo 'je suis un'.self::class."\n";
        echo 'je suis un'.static::class."\n";
    }
}

class Chat extends Animal
{

}

Animal::dormir();
Chat::dormir();
