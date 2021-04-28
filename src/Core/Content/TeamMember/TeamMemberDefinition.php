<?php declare(strict_types=1);

namespace Greg\TeamCms\Core\Content\TeamMember;

use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class TeamMemberDefinition extends EntityDefinition {
    public function getEntityClass(): string
    {
        return TeamMemberEntiy::class;
    }
    public function getEntityName(): string
    {
        return 'greg_team';
    }
    public function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id','id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('name','name'))->addFlags(new Required())         ,
            new StringField('position', 'position'),
            new StringField('information','information'), //supposed to be editable html maybe custom field is needed
            //TODO add media
            (new FkField('media_id','mediaId',MediaDefinition::class))->addFlags(new ApiAware())
            (new ManyToOneAssociationField('media', 'media_id', MediaDefinition::class, 'id', false))->addFlags(new ApiAware()),
        ]);
    }
}
