<script setup>
import {Head, useForm} from '@inertiajs/inertia-vue3';

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('register'));
};
</script>

<template>
    <Head title="Welcome"/>

    <div class="navbar fixed">
        <a class="btn btn-ghost normal-case text-xl">{{ __('SXYPlat') }}</a>
    </div>

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row space-x-5">
            <img src="https://placeimg.com/720/600/arch" class="max-w-sm rounded-lg shadow-2xl" alt=""/>
            <div>
                <h1 class="text-5xl font-bold">{{ __('Integrate your Minecraft server with 10+ platforms') }}</h1>
                <p class="py-6">{{
                        __('SXYPlat is a SaaS platform that provides you powerful functionality and scalability with your Minecraft server, making it easy to integrate with other platforms, or even create your own usage.')
                    }}</p>

                <form class="flex space-x-4" @submit.prevent="submit">
                    <div class="form-control w-full max-w-xs">
                        <input type="email" :placeholder="__('Your Email')" v-model="form.email"
                               class="input w-full max-w-xs relative"/>
                        <label class="label">
                            <span class="label-text-alt">{{ form.errors.email }}</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary inline-flex">{{ __('Try it for free') }}</button>
                </form>
            </div>
        </div>
    </div>
</template>
