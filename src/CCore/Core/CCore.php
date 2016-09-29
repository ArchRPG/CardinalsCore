<?php

namespace CCore\Core;

//player
use pocketmine\Player;
//inventory
use pocketmine\inventory\Inventory;
use pocketmine\inventory\ChestInventory;
use pocketmine\inventory\DoubleChestInventory;
//events
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\entity\EntityInventoryChangeEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\entity\EntityTeleportEvent;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\event\entity\EntityShootBowEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageByChildEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\event\level\LevelLoadEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerBedEnterEvent;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\event\player\PlayerHungerChangeEvent;
//items
use pocketmine\item\Slimeball;
use pocketmine\item\Item;
//commands
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\command\ConsoleCommandSender;
//utils
use pocketmine\utils\TextFormat;
use pocketmine\utils\config;
use pocketmine\utils\TextFormat as Color;
use pocketmine\utils\TextFormat as TF;
use pocketmine\utils\TextFormat as MT;
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\BinaryStream;
use pocketmine\utils\Binary;
//entity
use pocketmine\entity\Entity;
use pocketmine\entity\Effect;
use pocketmine\entity\Arrow;
//level
use pocketmine\level\sound\BlazeShootSound;
use pocketmine\level\sound\GhastShootSound;
use pocketmine\level\sound\EndermanTeleportSound;
use pocketmine\level\sound\AnvilFallSound;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\level\particle\ExplodeParticle;
use pocketmine\level\particle\BubbleParticle;
use pocketmine\level\particle\Particle;
use pocketmine\level\particle\DustParticle;
use pocketmine\level\Position;
use pocketmine\level\Location;
use pocketmine\level\Position\getLevel;
use pocketmine\level\format\Chunk;
use pocketmine\level\format\FullChunk;
use pocketmine\level\Level;
//block
use pocketmine\block\IronOre;
use pocketmine\block\GoldOre;
use pocketmine\block\Block;
//plugin
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginManager;
use pocketmine\plugin\Plugin;
//server
use pocketmine\Server;
//network
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\network\protocol\PlayerActionPacket;
use pocketmine\network\protocol\MovePlayerPacket;
use pocketmine\network\protocol\BlockEventPacket;
//math
use pocketmine\math\Vector3;
use pocketmine\math\Math;
use pocketmine\math\AxisAlignedBB;
//scheduler
use pocketmine\scheduler\PluginTask;
use pocketmine\scheduler\CallbackTask;
//nbt
use pocketmine\nbt\tag\DoubleTag;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\nbt\tag\CompoundTag;
//permission
use pocketmine\permission\Permission;

class CCore extends PluginBase implements Listener{

   public function onEnable(){

       $this->getServer()->getPluginManager()->registerEvents($this ,$this);

       $this->getLogger()->info("Loading...");
       $this->getLogger()->notice("Load Complete");
			}

   
/*Plugins OnDisable*/
   public function onDisable(){

       $this->getLogger()->info("Saving Data..");
       $this->getLogger()->warning("Shutdown Complete!"); 
   }
}
?>
