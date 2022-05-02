import {createApp, h} from 'vue'
import {createInertiaApp, Link} from '@inertiajs/inertia-vue3'

createInertiaApp({
    resolve: name => require(`./pages/${name}`),
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .component('Link', Link)
            .mount(el)
    },
})
