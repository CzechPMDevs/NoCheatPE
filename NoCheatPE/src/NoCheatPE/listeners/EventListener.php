?<php

namespace NoCheatPE\listeners;
      
use pocketmine\event\Listener;
use NoCheatPE\NoCheatPlayer;
      
class EventListener implements Listener{
      
      /** @var NoCheatPE $plugin */
      public $plugin;

      public function __construct(NoCheatPE $plugin){
           $this->plugin = $plugin;
      }
  
      public function onPlayerCreation(PlayerCreationEvent $e){
          $e->setPlayerClass(NoCheatPlayer::class);
      }
}
