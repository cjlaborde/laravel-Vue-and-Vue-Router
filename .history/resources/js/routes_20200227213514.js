import Logo from './components/Logo'
import LogoSymbol from './components/LogoSymbol'

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home
        },

        {
            path: '/about',
            component: About,
            // name: 'about'
        },

    ]
}
