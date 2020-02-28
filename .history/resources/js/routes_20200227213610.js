import Logo from './components/Logo'
import LogoSymbol from './components/LogoSymbol'

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

    ]
}
