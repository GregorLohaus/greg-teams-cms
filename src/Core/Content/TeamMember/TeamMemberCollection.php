<?php declare(strict_types=1);
namespace Greg\TeamCms\Core\Content\TeamMember;
use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;


/**
 * @method void               add(ExampleEntity $entity)
 * @method void               set(string $key, TeamMemberEntiy $entity)
 * @method TeamMemberEntiy[]    getIterator()
 * @method TeamMemberEntiy[]    getElements()
 * @method TeamMemberEntiy|null get(string $key)
 * @method TeamMemberEntiy|null first()
 * @method TeamMemberEntiy|null last()
 */
class TeamMemberCollection extends EntityCollection{
    protected function getExpectedClass(): string
    {
        return TeamMemberEntiy::class;
    }
}
