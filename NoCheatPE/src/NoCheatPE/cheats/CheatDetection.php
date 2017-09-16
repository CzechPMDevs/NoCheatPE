<?php

namespace NoCheatPE\cheats;

abstract class CheatDetection{
  
  
  /** @var NoCheatPlayer $player */
  public $player;
  
  public function __construct(NoCheatPlayer $player){
    $this->player = $player;
  }
  
  public function onCheatDetect($cheatType){
    //Call event to make devs able to use it in another plugins TODO
    //add point TODO
    //Check player status about points TODO
  }
  
  
  public function getPlayer(){
    return $this->player;
  }
  
  public function onTick(){ //Will be used in player class tick function
    
  }
  
  
  
  
}
