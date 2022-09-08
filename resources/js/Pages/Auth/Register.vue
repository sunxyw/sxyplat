<script setup>
import {Head, useForm} from '@inertiajs/inertia-vue3';
import FlashMessageAlert from "@/Components/FlashMessageAlert.vue";

const props = defineProps({
    email: String
})

const form = useForm({
    name: '',
    email: props.email,
    password: '',
    terms: false,
});

const submit = () => {
    form.post(route('register.store'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Register"/>

    <div class="navbar fixed">
        <a class="btn btn-ghost normal-case text-xl mr-5">{{ __('SXYPlat') }}</a>
        <FlashMessageAlert></FlashMessageAlert>
    </div>

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">{{ __('Last Step!') }}</h1>
                <p class="py-6">{{ __('You are almost to get there.') }}</p>
            </div>
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <form class="card-body" @submit.prevent="submit">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">{{ __('Name') }}</span>
                        </label>
                        <input type="text" :placeholder="__('Name')" class="input input-bordered"
                               v-model="form.name"/>
                        <label class="label">
                            <span class="label-text-alt">{{ form.errors.name }}</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">{{ __('Email') }}</span>
                        </label>
                        <input type="email" :placeholder="__('Email')" class="input input-bordered"
                               :value="form.email + __('(Auto filled)')" readonly/>
                        <label class="label">
                            <span class="label-text-alt">{{ form.errors.email }}</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">{{ __('Password') }}</span>
                        </label>
                        <input type="password" :placeholder="__('Password')" v-model="form.password"
                               class="input input-bordered"/>
                        <label class="label">
                            <span class="label-text-alt">{{ form.errors.password }}</span>
                        </label>
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary" :class="{loading: form.processing}">
                            {{ __('Create Account') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
