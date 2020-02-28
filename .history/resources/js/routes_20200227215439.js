import Logo from './components/Logo'
import LogoSymbol from './components/LogoSymbol'
import Colors from './components/Colors'
import Typography from './components/Typography'
import Mascot from './components/Mascot'
import LoadersAndAnimations from './components/LoadersAndAnimations'
import Illustrations from './components/Illustrations'

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Logo
        },

        {
            path: '/about',
            component: LogoSymbol,
            // name: 'about'
        },

        {
            path: '/colors',
            component: Colors,
        },
        {
            path: '/typography',
            component: Typography,
        },
        {
            path: '/mascot',
            component: Mascot,
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations,
        },
        {
            path: '/illustrations',
            component: Illustrations,
        },
        {
            path: '/typography',
            component: Typography,
            // name: 'about'
        },
        
        {
            path: '/illustrations',
            component: Illustrations,
            // name: 'about'
        },

    ]
}
