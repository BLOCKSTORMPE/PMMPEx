
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
if(!is_dir($this->getDataFolder())){

mkdir($this->getDataFolder());

}


		#New Config created for the startup message
		$config = new Config($this->getDataFolder()."config.yml", Config::YAML);
			#Setting a string to the yaml file
			$config->set("Startup-Message", "TestPlugin was started");
			#saving the yaml file
			$config->save();
			$this->getServer()->getLogger()->info("Initial Basic config successfully created!");
	}
	#message every time the server starts
	public function onLoad(){
		$cfg = new Config($this->getDataFolder()."config.yml", Config::YAML);
		#sending message to console
		$this->getServer()->getLogger()->info(TextFormat::RED . $cfg->get("Startup-Message"));
		}
	}
		
