<script setup>
defineProps({
    title: String,
    price: String,
    features: Array,
    promoted: Boolean,
    promotion: String,
});
</script>

<template>
    <div class="w-full md:w-1/2 lg:w-1/3">
        <div
            :data-wow-delay="promoted ? '.1s' : '.15s'"
            :class="{
                'wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-xl bg-primary bg-gradient-to-b from-primary to-[#179BEE] py-10 px-8 text-center shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12': promoted,
                'wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-xl border border-primary border-opacity-20 bg-white py-10 px-8 text-center shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12': !promoted,
            }"
        >
            <span v-if="promoted"
                  class="mb-5 inline-block rounded-full border border-white bg-white py-2 px-6 text-base font-semibold uppercase text-primary"
            >
                {{ promotion }}
            </span>
            <span class="mb-2 block text-base font-medium uppercase" :class="promoted ? 'text-white' : 'text-dark'">
                {{ title }}
            </span>
            <h2 class="mb-9 text-[28px] font-semibold" :class="promoted ? 'text-white' : 'text-primary'">
                {{ price }}
            </h2>

            <div class="mb-10">
                <p
                    v-for="feature in features"
                    class="mb-1 text-base font-medium leading-loose"
                    :class="promoted ? 'text-white' : 'text-body-color'"
                >
                    {{ feature }}
                </p>
            </div>
            <div class="w-full">
                <a
                    href="javascript:void(0)"
                    class="inline-block rounded-full border py-4 px-11 text-center text-base font-medium transition duration-300 ease-in-out hover:text-white"
                    :class="promoted ? 'border-white bg-white text-dark hover:border-dark hover:bg-dark' : 'border-[#D4DEFF] bg-transparent text-primary hover:border-primary hover:bg-primary'"
                >
                    {{ __('Purchase Now') }}
                </a>
            </div>
            <slot name="addition"></slot>
        </div>
    </div>
</template>
