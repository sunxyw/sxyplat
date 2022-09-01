import Lang from 'lang.js';

const plugin = {
    install(Vue, options) {
        // Default options

        const Locale = options.locale || 'en';
        const fallbackLocale = options.fallback || 'en';
        const messages = options.messages || {};
        console.log(Locale);

        const lang = new Lang({
            messages: messages,
            locale: Locale,
            fallback: fallbackLocale
        });

        lang.setLocale = function (locale) {
            if (locale !== this.locale && locale !== this.fallback) {
                console.warn('locale not loaded');
            }
            this.locale = locale;
        }

        var translate = function (key, options) {
            return lang.trans(key, options);
        };

        Object.defineProperty(Vue.config.globalProperties, '$lang', {get: () => lang})

        Object.defineProperty(Vue.config.globalProperties, '$trans', {get: () => translate})
        Object.defineProperty(Vue.config.globalProperties, '$t', {get: () => translate})
        Object.defineProperty(Vue.config.globalProperties, '__', {get: () => translate})
    }
};

export default plugin;
