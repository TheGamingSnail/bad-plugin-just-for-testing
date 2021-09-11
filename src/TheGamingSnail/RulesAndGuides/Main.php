<?php

namespace TheGamingSnail\RulesAndGuides;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

    public function onEnable(){

 }

    public function onCommand(CommandSender $sender, Command $cmd, String $Label, Array $args) : bool {

        switch($command->getName()){
            case "guide":
            if($sender instanceof Player){
                $this->opendaguideboi($sender);
            }
        }
        return true;
    }
    
    public function opendaguideboi($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
            return true;
            }
            switch($result){
                case 0:
                $this->showmedarules($player);
                break;

                case 1:
                $this->showmedaguides($player);
                break;
            }
        });
        $form->setTitle("LunarBlock Rules And Guides");
        $form->setContent("Pick One");
        $form->addButton("Rules");
        $form->addButton("Guides");
        $form->sendToPlayer($player);
        return $form;
    }
}
