<?php
namespace Clik\DayAndNight;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;

class Main extends PluginBase{
	 
	public $fts = "§4[§bOrionAtmosphere§4]";
 
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) {

        if($cmd->getName() == "day") {
            if($sender instanceof Player) {
             if($sender->hasPermission("day.use")) {
                $sender->getLevel()->setTime(6000);
                 $sender->sendMessage($this->fts . TF::GREEN . " You have set the time to day!");
                 }else{
                 $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
                    }
                 }
               return true;
           } 

           if($cmd->getName() == "night") {
            if($sender instanceof Player) {
             if($sender->hasPermission("night.use")) {
                $sender->getLevel()->setTime(16000);
                 $sender->sendMessage($this->fts . TF::GREEN . " You have set the time to night!");
                 }else{
                 $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
                    }
                 }
               return true;
           }
        }
    }
}