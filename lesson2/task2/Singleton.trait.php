<?php

trait Singletoner
{
    public static function getInstance()
    {
        if (empty(self::$_instance)) {
        	self::$_instance = new self();
        } 
        return self::$_instance;
    }
// Защищаем от создания через new Singleton
	private function __construct() {}
	// Защищаем от создания через клонирование
	private function __clone() { 
		return self::getInstance(); 
	}
	// Защищаем от создания через unserialize
	private function __wakeup() { 
		return self::getInstance(); 
	}
	// Возвращает единственный экземпляр класса. @return Singleton
    public static function write1(){
    	echo '<br /><h2>Singleton may be created with traits</h2>';
    }

    public function __get($_instance){
    	return false;
    }
}