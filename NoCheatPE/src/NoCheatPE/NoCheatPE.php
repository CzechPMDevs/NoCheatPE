<?php

namespace NoCheatPlus;

use pocketmine\plugin\PluginBase;
class NoCheatPE extends PluginBase{
  
  /** @var NoCheatPE $instance */
  public static $instance;
  
  public $movement_cheats = [];
  
  public function onEnable(){
    self::$instance = $this;
    PluginBase::onEnable();
  }
  
  public static function getInstance(){
    if(!is_null(self::$instance)){
      return self::$instance;
     }
    return null;
  }
}
