<?php

namespace NoCheatPlus;

use pocketmine\plugin\PluginBase;
class NoCheatPE extends PluginBase{
  
  /** @var NoCheatPE $instance */
  public static $instance;
  
  public $movement_cheats = [];
  
  /** @var EventListener $eventListener */
  public $eventListener;
  
  public function onEnable(){
    self::$instance = $this;
    
    $this->getServer()->getPluginManager()->registerEvents($this->eventListener = new EventListener($this), $this);
    
    PluginBase::onEnable();
  }
  
  public static function getInstance(){
    if(!is_null(self::$instance)){
      return self::$instance;
     }
    return null;
  }
}
