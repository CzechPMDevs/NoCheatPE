<?php

namespace NoCheatPlus;

use pocketmine\plugin\PluginBase;
use NoCheatPE\listeners\EventListener;

class NoCheatPE extends PluginBase{
  
  /** @var NoCheatPE $instance */
  public static $instance;
  
  public $num;
  
  /** @var CheatDetection[] $cheats */
  public $cheats = [];
  
  /** @var int $cheatsCount */
  public $cheatsCount = 0;
  
  
  
  /** @var EventListener $eventListener */
  public $eventListener;
  
  public function onEnable(){
    self::$instance = $this;
    
    $this->getServer()->getPluginManager()->registerEvents($this->eventListener = new EventListener($this), $this);
    
    PluginBase::onEnable();
  }
  
  public function getCheats(){
    return $this->cheats;
  }
  
  public function registerCheat($class){
     if(is_a($class, CheatDetection::class, true) !== false){
     $this->cheatsCount++;
     $cheat = "cheat" . $this->cheatsCount;
     $this->cheatsCount[$cheat] = $class;
     $this->getLogger()->info("Registred cheat" . $cheat);
     }
  }
  
  public static function getInstance(){
    if(!is_null(self::$instance)){
      return self::$instance;
     }
    return null;
  }
}
