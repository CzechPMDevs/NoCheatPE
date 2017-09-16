<?php

namespace NoCheatPE\cheats;

use pocketmine\math\Position;
use pocketmine\math\Vector3;

class AntiFlyDetection extends CheatDetection{
  
  /** @var Position $oldPos */
  public $oldPos;
  
  /** @var Vector3 $oldMot */
  public $oldMot;
  
  /** @var int $lastTick */
  public $lastCheck = 0;
  
  
  
  public function onTick($currentTick){
    $o = $this->oldPos;
    $mo =$this->oldMot;
    $c = $this->getPlayer()->getPosition();
    
    if(!($o instanceof Position) or !($mo instanceof Vector3)){
      return;
    }
    
    $dist = sqrt(abs(($o->getY() - $c->getY()));
    if($o->getY() <= $c->getY(){ //Prevent from detecting when falling
      if($this->getPlayer()->getInAirTicks() >= 38){
         $dd = $mo->getY()->distance($this->getPlayer()->getMotion()->getY());
        if($dd >= 2){ //Ideal for 38 air ticks
          
       }
     }
    }
       
       
    $this->oldPos = $this->getPlayer()->getPosition();
       
    
  
  
}
