<?php

namespace NoCheatPE\cheats;

use pocketmine\Player;

class NoCheatPlayer extends Player{
  
  public function __construct(SourceInterface $interface, $clientID, $ip, $port){
        parent::__construct($interface, $clientID, $ip, $port);
        
  }
  
}
