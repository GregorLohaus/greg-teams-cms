import './page/teamlist'

Shopware.Module.register('greg-team',{
    type: 'plugin',
    name: 'Team',
    title: 'Team',
    description: 'Team Plugin',
    color: '#ffffff',
    icon: 'default-avatar-multiple',
    routes: {
        teamlist: {
            component: 'teamlist',
            path: 'teamlist'
        }
    },
    navigation: [{
        label: 'Team',
        color: '#ffffff',
        path: 'greg.team.teamlist',
        icon: 'default-avatar-multiple',
        position: 100,
        parent: 'sw-extension'
    }]
})
