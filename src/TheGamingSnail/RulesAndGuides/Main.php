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

        switch($cmd->getName()){
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
    
    public function showmedarules($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
            return true;
            }
        });
        $form->setTitle("LunarBlock Rules");
        $form->setContent("#1 Do not say anything controversial or offensive\n
        #2 Be kind\n
        #3 Do not say anything NSFW\n
        #4 Swearing is allowed but do not swear at someone in a mean way\n
        #5 If you wish to report someone, please make a support ticket in #support in our discord server, do not report people in chat, our moderators may not check chat\n
        #6 Do not send any viruses, shady links, or anything of that sort (instant ban)\n
        #7 Do not advertise, advertising will result in a mute or a kick\n
        #8 Do not raid other people's islands, doing so will result in a non-appealable 30-day ban");
        $form->sendToPlayer($player);
        return $form;
    }
}
