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
            switch($result){
                case 0:
                    $this->opendaguideboi($player);
                break;
            }
        });
        $form->setTitle("LunarBlock Rules");
        $form->setContent("#1 Do not say anything controversial or offensive\n#2 Be kind\n#3 Do not say anything NSFW\n#4 Swearing is allowed but do not swear at someone in a mean way\n #5 If you wish to report someone, please make a support ticket in #support in our discord server, do not report people in chat, our moderators may not check chat\n#6 Do not send any viruses, shady links, or anything of that sort (instant ban)\n#7 Do not advertise, advertising will result in a mute or a kick\n#8 Do not raid other people's islands, doing so will result in a non-appealable 30-day ban");
        $form->addButton("Back");
        $form->sendToPlayer($player);
        return $form;
    }

    public function showmedaguides($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
            return true;
            }
            switch($result){
                case 0:
                    $this->beginnerguide1($player);
                break;

                case 1:
                    $this->smallmoneyguide1($player);
                break;

                case 2:
                    $this->opendaguideboi($player);
                break;
            }
        });
        $form->setTitle("LunarBlock Guides");
        $form->setContent("Pick A Guide");
        $form->addButton("Beginner's Guide");
        $form->addButton("How To Start Making Money");
        $form->addButton("Back");
        $form->sendToPlayer($player);
        return $form;
    }

    public function beginnerguide1($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
            return true;
            }
            switch($result){
                case 0:
                    $this->beginnerguide2($player);
                break;

                case 1:
                    $this->showmedaguides($player);
                break;
                }
        });
        $form->setTitle("LunarBlock Beginner's Guide");
        $form->setContent("So You Just Started Playing LunarBlock And Want To Know The Basics?\nIf yes, Then This Guide Is For You!");
        $form->addButton("Next");
        $form->addButton("Back");
        $form->sendToPlayer($player);
        return $form;
    }

    public function beginnerguide2($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
            return true;
            }
            switch($result){
                case 0:
                    $this->beginnerguide3($player);
                break;

                case 1:
                    $this->beginnerguide1($player);
                break;
            }
        });
        $form->setTitle("LunarBlock Beginner's Guide");
        $form->setContent("First Step In All Skyblock Servers Is Creating An Island!\nThis Goes For LunarBlock Aswell!\n\nDo /is create Or /isui To Create Your Island!\nYou Can Also Join A Friends Island If They Invite You!");
        $form->addButton("Next");
        $form->addButton("Back");
        $form->sendToPlayer($player);
        return $form;
    }

    public function beginnerguide3($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
            return true;
            }
            switch($result){
                case 0:
                    $this->beginnerguide4($player);
                break;

                case 1:
                    $this->beginnerguide2($player);
                break;
            }
        });
        $form->setTitle("LunarBlock Beginner's Guide");
        $form->setContent("After Creating Your Island You Should Break The Tree On The Island\n\nAfter That Use The Iron Pickaxe You Got From The Island Chest And Make A Cobble Generator\nAlternetively, You Can Go To The Mine, But Beware, PvP Is On At The Mine!\n\nSell The Cobblestone And Other Ores You Got By Doing /sell inv(Note: Do Not Do Just /sell, Doing So Will Resut In An Internal Server Error)");
        $form->addButton("Next");
        $form->addButton("Back");
        $form->sendToPlayer($player);
        return $form;
    }
}
