import Logo from './components/Logo'
import LogoSymbol from './components/LogoSymbol'
import Colors from './components/Colors'
import Typography from './components/Typography'
import Mascot from './components/Mascot'
import Illustrations from './components/Illustrations'
import Wallpapers from './components/Wallpapers'
import SiteStats from './components/SiteStats'
import Archievements from './components/Archievements'
import NotFound from './components/NotFound'

let LoadersAndAnimations = () =>
    import(/* webpackChunkName: "loaders-and-animations.bundle" */ './components/LoadersAndAnimations');

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '*',
            component: NotFound
        },

        {
            path: '/assets',
            component: Logo
        },

        {
            path: '/assets/logo-symbol',
            component: LogoSymbol,
            // name: 'about'
        },

        {
            path: '/assets/colors',
            component: Colors,
        },

        {
            path: '/assets/typography',
            component: Typography,
        },

        {
            path: '/assets/mascot',
            component: Mascot,
        },

        {
            path: '/assets/illustrations',
            component: Illustrations,
        },
        
        {
            path: '/assets/loaders-and-animations',
            component: LoadersAndAnimations,
        },
 
        {
            path: '/assets/typography',
            component: Typography,
        },

        {
            path: '/assets/wallpapers',
            component: Wallpapers,
        },

        {
            path: '/assets/site-stats',
            component: SiteStats,
        },
        {
            path: '/assets/your-archievements',
            component: Archievements,
        },
    ]
}
