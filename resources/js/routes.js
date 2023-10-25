const Home = () => import('./components/Home.vue');
const Contacto = () => import('./components/Contacto.vue');

//importamos los componentes para el blog
const Mostrar = ()=> import('./components/blog/Mostrar.vue');
const Crear = ()=> import('./components/blog/Crear.vue');
const Editar = ()=> import('./components/blog/Editar.vue');

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'contacto',
        path: '/contacto',
        component: Contacto
    },
    //rutas para el blog
    {
        name: 'mostrarBlogs',
        path: '/blog',
        component: Mostrar
    },
    {
        name: 'crear',
        path: '/blog/crear',
        component: Crear
    },
    {
        name: 'editar',
        path: '/blog/editar/:id',
        component: Editar
    }
]