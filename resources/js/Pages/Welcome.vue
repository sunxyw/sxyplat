<script setup>
import {Head, useForm} from '@inertiajs/inertia-vue3';
import FlashMessageAlert from "@/Components/FlashMessageAlert.vue";
import Frontend from "@/Frontend/Layouts/Frontend.vue";

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('register.request'));
};
</script>

<template>
    <Head title="Welcome"/>

    <Frontend></Frontend>
</template>
