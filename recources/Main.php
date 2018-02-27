<?php
namespace test;
#PocketMine-Based imports
use pocketmine\plugin\PluginBase;
use pocketmine\{Server, Player};
use pocketmine\utils\{Config, TextFormat};
#class declaration(Name should be filename)
class Main extends PluginBase{
	#Function when the plugin loads the first time
	public function onEnable(){
		#New Config created for the startup message
		$config = new Config($this->getDataFolder()."config.yml", Config::YAML);
		if(empty($config)){
			#Setting a string to the yaml file
			$config->set("Startup-Message", "TestPlugin was started");
			#saving the yaml file
			$config->save();
			#registering plugin events[!IMPORTANT]
			$this->getServer()->getLogger()->info("Initial Basic config successfully created!");
			}
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	#message every time the server starts
	public function onLoad(){
		$cfg = new Config($this->getDataFolder()."config.yml", Config::YAML);
		#sending message to console
		$this->getServer()->getLogger()->info($cfg->get(TextFormat::RED . "Startup-Message");
		}
	}
		
