<?php

namespace NoCheatPE\cheats;

use pocketmine\Player;

class NoCheatPlayer extends Player{
	
	
  
  public function __construct(SourceInterface $interface, $clientID, $ip, $port){
        
			$cheats = NoCheatPE::getInstance()->getCheats();
		
			foreach($cheats as $cheatClass) {
				/** @var CheatDetection $cheat */
				$cheat = new $cheatClass($this);
				$this->cheats[] = $cheat;
			}
		}

    
        parent::__construct($interface, $clientID, $ip, $port);
        
  }
  
}
