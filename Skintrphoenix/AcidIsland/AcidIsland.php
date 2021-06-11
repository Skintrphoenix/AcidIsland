<?php

namespace Skintrphoenix\AcidIsland;

use pocketmine\level\generator\GeneratorManager;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\block\BlockFactory;
use pocketmine\Player;

#commands
use Skintrphoenix\AcidIsland\Command\Home;
use Skintrphoenix\AcidIsland\Command\Create;
use Skintrphoenix\AcidIsland\Command\Team;
use Skintrphoenix\AcidIsland\Command\Settings;
use Skintrphoenix\AcidIsland\Command\Warp;
use Skintrphoenix\AcidIsland\Command\Setspawn;
use Skintrphoenix\AcidIsland\Command\Reset;

class AcidIsland extends PluginBase implements Listener
{
	private static $instance;
	
	private $home;
	private $create;
	private $team;
	private $settings;
	private $warp;
	private $setspawn;
	private $reset;
	
	
	public static function getInstance(): AcidIsland {
        return self::$instance;
    }
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
		$this->saveResource("config.yml");
		$this->saveResource("IslandWorld.yml");
		$this->config = new Config($this->getDataFolder()."config.yml", Config::YAML);
		$this->acid = new Config($this->getDataFolder()."IslandWorld.yml", Config::YAML);
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
        switch($cmd->getName()){                    
            case "island":
                if($sender instanceof Player){
                    if(!isset($args[0])){
                    	$sender->sendMessage(" - /island home \n - /island create \n - /island team \n -/island settings \n - /island warp \n - /island setspawn \n - /island reset");
                        return true;
                    }
                    $arg = array_shift($args);
                    switch($arg){
                    	case "home":
                        break;
                        case "create":
                        break;
                        case "team":
                        break;
                        case "settings":
                        break;
                        case "warp":
                        break;
                        case "setspawn":
                        break;
                        case "reset":
                        break;
                        case "help":
                        $sender->sendMessage(" - /island home \n - /island create \n - /island team \n -/island settings \n - /island warp \n - /island setspawn \n - /island reset");
                        break;
                    }
                }
            break;
        }
        return true;
    }
    
  
}
