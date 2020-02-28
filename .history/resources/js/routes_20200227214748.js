import Logo from './components/Logo'
import LogoSymbol from './components/LogoSymbol'
import Colors from './components/Colors'
import LoadersAndAnimations from './components/LoadersAndAnimations'
import Colors from './components/Colors'
import Colors from './components/Colors'

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
            // name: 'about'
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations,
            // name: 'about'
        },


    ]
}
