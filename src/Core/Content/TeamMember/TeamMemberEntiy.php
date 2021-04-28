<?php declare(strict_types=1);
namespace Greg\TeamCms\Core\Content\TeamMember;

use League\OAuth2\Server\Entities\Traits\EntityTrait;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;

class TeamMemberEntiy extends Entity{
    use EntityTrait;

    /**
     * @var string|null
     */
     protected $name;
    /**
     * @var string|null
     */
     protected $position;
    /**
     * @var string|null
     */
     protected $information;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }



    // GETTERS AND SETTERS

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string|null $position
     */
    public function setPosition(?string $position): void
    {
        $this->position = $position;
    }

    /**
     * @return string|null
     */
    public function getInformation(): ?string
    {
        return $this->information;
    }

    /**
     * @param string|null $information
     */
    public function setInformation(?string $information): void
    {
        $this->information = $information;
    }


}
