<?php

namespace angga7togk\topvote;

use pocketmine\math\Vector3;
use pocketmine\Server;
use pocketmine\world\particle\FloatingTextParticle;

class FloatingText extends FloatingTextParticle
{


    private $world;
    private $pos;
	
    public function __construct(Vector3 $pos){
		parent::__construct($pos, "");
		$this->world = Server::getInstance()->getWorldManager()->getDefaultWorld();
        $this->pos = $pos;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
        $this->update();
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function update(): void
    {
        $this->world->addParticle($this->pos, $this);
    }
}