<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';
import MinecraftLogo from '../../images/icons8-minecraft-logo-100.png';
import ApiLogo from '../../images/icons8-api-100.png';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome"/>

    <header>
        <nav class="fixed w-full bg-white">
            <div class="container m-auto px-6 md:px-12 lg:px-6">
                <div class="flex flex-wrap items-center justify-between py-6 gap-6 md:py-4 md:gap-0">
                    <div class="w-full flex justify-between lg:w-auto">
                        <a href="#" aria-label="logo">
                            <img src="images/logo.svg" class="w-36" alt="tailus logo" width="144" height="48">
                        </a>

                        <button aria-label="humburger" id="hamburger" class="relative w-10 h-10 -mr-2 lg:hidden">
                            <div aria-hidden="true" id="line"
                                 class="inset-0 w-6 h-0.5 m-auto rounded bg-gray-500 transtion duration-300"></div>
                            <div aria-hidden="true" id="line2"
                                 class="inset-0 w-6 h-0.5 mt-2 m-auto rounded bg-gray-500 transtion duration-300"></div>
                        </button>
                    </div>

                    <div hidden
                         class="w-full bg-white md:space-y-0 md:p-0 md:flex-nowrap md:bg-transparent lg:w-auto lg:flex">
                        <div class="block w-full lg:items-center lg:flex">
                            <ul class="space-y-6 pb-6 tracking-wide font-medium text-gray-600 lg:pb-0 lg:pr-6 lg:items-center lg:flex lg:space-y-0">
                                <li>
                                    <a href="#" class="block md:px-3">
                                        <span>{{ __('Solutions') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block md:px-3">
                                        <span>{{ __('Use Cases') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block md:px-3">
                                        <span>{{ __('Pricing') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block md:px-3">
                                        <span>{{ __('Blog') }}</span>
                                    </a>
                                </li>
                            </ul>

                            <ul class="border-t space-y-2 pt-2 lg:space-y-0 lg:space-x-2 lg:pt-0 lg:pl-2 lg:border-t-0 lg:border-l lg:items-center lg:flex">
                                <li>
                                    <button type="button" title="Start buying"
                                            class="w-full py-3 px-6 rounded-md text-center transition active:bg-sky-200 focus:bg-sky-100 sm:w-max">
                                    <span class="block text-cyan-600 font-semibold">
                                        {{ __('Sign in') }}
                                    </span>
                                    </button>
                                </li>

                                <li>
                                    <button type="button" title="Start buying"
                                            class="w-full py-3 px-6 rounded-md text-center transition bg-cyan-500 hover:bg-cyan-600 active:bg-cyan-700 focus:bg-sky-600 sm:w-max">
                                    <span class="block text-white font-semibold">
                                        {{ __('Try it for free') }}
                                    </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="pt-32 pb-20 md:pt-40">
        <div class="container m-auto px-6 md:px-12 lg:px-6">
            <div class="lg:flex lg:items-center lg:gap-x-16">
                <div class="space-y-8 lg:w-7/12">
                    <h1 class=" font-bold text-gray-900 text-4xl md:text-5xl">
                        {{ __('Integrate your Minecraft server with 10+ platforms') }}</h1>
                    <p class="text-gray-600 lg:w-11/12">
                        {{
                            __('SXYPlat is a SaaS platform that provides you powerful functionality and scalability with your Minecraft server, making it easy to integrate with other platforms, or even create your own usage.')
                        }}
                    </p>

                    <span class="block font-semibold">{{ __('Only platform that enables your server to enter the "information age"') }}</span>

                    <div class="grid grid-cols-3 space-x-4 md:space-x-6 md:flex">
                        <a aria-label="add to slack" href="#"
                           class="p-4 border border-gray-200 rounded-md hover:border-cyan-400 hover:shadow-lg">
                            <div class="flex justify-center space-x-4">
                                <img class="w-6"
                                     :src="MinecraftLogo"
                                     alt="minecraft logo" loading="lazy" width="128" height="128">
                                <span class="hidden font-medium md:block">{{ __('Install Minecraft Plugin') }}</span>
                            </div>
                        </a>
                        <a aria-label="add to chat" href="#"
                           class="p-4 border border-gray-200 rounded-md hover:border-green-400 hover:shadow-lg">
                            <div class="flex justify-center space-x-4">
                                <img class="w-6"
                                     :src="ApiLogo"
                                     alt="api logo" loading="lazy" width="128" height="128">
                                <span class="hidden font-medium md:block">{{ __('Using API') }}</span>
                            </div>
                        </a>
                    </div>

                    <div>
                        🔥🌟
                        <span>{{ __('Other usages: ') }}</span>
                        <a href="#" class="font-semibold text-gray-700">{{ __('Discord') }}</a>,
                        <a href="#" class="font-semibold text-gray-700">{{ __('QQ Bot') }}</a>
                    </div>
                </div>

                <div hidden class="lg:block lg:w-5/12">
                    <img src="https://img.icons8.com/bubbles/500/000000/module.png" class="w-full"
                         alt="wath illustration" loading="lazy" style="max-height: 340px;width: auto">
                </div>
            </div>
        </div>
    </div>

    <div class="pb-8">
        <div class="container m-auto px-6 md:px-12 lg:px-6">
            <div class="py-8 px-12 bg-cyan-50 rounded-2xl">
                <span class="block text-center font-medium text-cyan-700">{{ __('Trusted by your favorite groups') }}</span>
                <div class="mt-8 flex justify-center flex-wrap items-center gap-4 md:gap-6 lg:gap-8">
                    <div class="flex items-center">
                        <img class="w-36"
                             src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/microsoft.png"
                             alt="client logo" loading="lazy" width="584" height="122">
                    </div>
                    <div class="flex items-center">
                        <img class="w-28"
                             src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/myob.png"
                             alt="client logo" loading="lazy" width="400" height="219">
                    </div>
                    <div class="flex items-center">
                        <img class="w-28"
                             src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/grabyo.png"
                             alt="client logo" loading="lazy" width="400" height="219">
                    </div>
                    <div class="flex items-center">
                        <img class="w-32"
                             src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/lifegroups.png"
                             alt="client logo" loading="lazy" width="400" height="219">
                    </div>
                    <div class="flex items-center">
                        <img class="w-24"
                             src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/lilly.png"
                             alt="client logo" loading="lazy" width="400" height="219">
                    </div>
                    <div class="flex items-center">
                        <img class="w-28"
                             src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/grabyo.png"
                             alt="client logo" loading="lazy" width="400" height="219">
                    </div>
                    <div class="flex items-center">
                        <img class="w-32"
                             src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/lifegroups.png"
                             alt="client logo" loading="lazy" width="400" height="219">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
