<script setup>
defineProps({
    title: {
        type: String,
        required: true,
    },
    description: {
        type: String,
        required: true,
    },
    action: {
        type: String,
        required: false,
        default: 'Learn more',
    },
    link: {
        type: String,
        required: false,
        default: 'javascript:void(0)',
    },
});
</script>

<template>
    <div class="w-full px-4 md:w-1/2 lg:w-1/4">
        <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".1s">
            <div
                class="relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary"
            >
                <span
                    class="absolute top-0 left-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"
                ></span>
                <slot name="icon"></slot>
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">
                {{ $props.title }}
            </h4>
            <p class="mb-8 text-body-color lg:mb-11">
                {{ $props.description }}
            </p>
            <a
                :href="$props.link"
                class="text-base font-medium text-body-color hover:text-primary"
            >
                {{ $props.action }}
            </a>
        </div>
    </div>
</template>
