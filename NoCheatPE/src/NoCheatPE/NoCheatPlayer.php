<?php
namespace NoCheatPE\cheats;
use pocketmine\Player;
class NoCheatPlayer extends Player{

  /** @var CheatDetection[] $cheats */ 
  public $cheats = [];
	
  public function __construct(SourceInterface $interface, $clientID, $ip, $port){
			$cheats = NoCheatPE::getInstance()->getCheats();
			if(count($cheats > 0){
			foreach($cheats as $cheatClass) {
				/** @var CheatDetection $cheat */
				$cheat = new $cheatClass($this);
				$this->cheats[] = $cheat;
		}
		}
        parent::__construct($interface, $clientID, $ip, $port);      
  }
  
  public function onTick($ticks){
         foreach($this->cheats as $cheat){
             //Tick
         }
  }
  
}
