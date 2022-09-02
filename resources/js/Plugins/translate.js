import {nextTick} from 'vue'
import {createI18n} from 'vue-i18n'

export const SUPPORT_LOCALES = ['en', 'zh-Hans']

export function setupI18n(options = {locale: 'en'}) {
    const i18n = createI18n(options)
    loadLocaleMessages(i18n, options.locale)
        .then(() => {
            setI18nLanguage(i18n, options.locale)
        })
        .catch((e) => {
            console.error(e)
        })
    return i18n
}

export function setI18nLanguage(i18n, locale) {
    if (i18n.mode === 'legacy') {
        i18n.global.locale = locale
    } else {
        i18n.global.locale.value = locale
    }
    /**
     * NOTE:
     * If you need to specify the language setting for headers, such as the `fetch` API, set it here.
     * The following is an example for axios.
     *
     * axios.defaults.headers.common['Accept-Language'] = locale
     */
    document.querySelector('html').setAttribute('lang', locale)
}

export async function loadLocaleMessages(i18n, locale) {
    if (!SUPPORT_LOCALES.includes(locale)) {
        locale = 'en'
    }

    // load locale messages with dynamic import
    const messages = await import(
        /* webpackChunkName: "locale-[request]" */ `../../../lang/${locale}.json`
        )

    // set locale and locale message
    i18n.global.setLocaleMessage(locale, messages.default)

    return nextTick()
}

const plugin = {
    install(Vue, options) {
        const i18n = setupI18n(options);

        Vue.use(i18n);
        Object.defineProperty(Vue.config.globalProperties, '__', {
            get: () => {
                return i18n.global.t.bind(i18n.global);
            }
        })
    }
};

export default plugin;
