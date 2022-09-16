<script setup>
import Frontend from "@/Frontend/Layouts/Frontend.vue";
import Banner from "@/Frontend/Components/Banner.vue";
import MessDot from "@/Frontend/Components/Decoration/MessDot.vue";
import {Link} from "@inertiajs/inertia-vue3";

defineProps({
    tenants: {
        type: Array,
        required: true,
    },
})
</script>

<template>
    <Frontend>
        <Banner title="Dashboard"></Banner>

        <section id="team" class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
            <div class="container">
                <div class="-mx-4 flex flex-wrap justify-center">
                    <a :href="tenant.domain" class="w-full px-4 sm:w-1/2 lg:w-1/6 cursor-pointer"
                          v-for="tenant in tenants">
                        <div class="wow fadeInUp mb-6" data-wow-delay=".1s">
                            <div
                                class="relative z-10 mx-auto mb-6 w-[170px] rounded-full"
                            >
                                <span class="absolute right-0 bottom-0">
                                    <svg
                                        width="22"
                                        height="22"
                                        viewBox="0 0 22 22"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                                            stroke="#13C296"
                                        />
                                    </svg>
                                </span>
                                <div class="text-center">
                                    <h4 class="mb-2 text-lg font-medium text-dark">
                                        {{ tenant.id }}
                                    </h4>
                                    <p class="text-sm font-medium text-body-color">
                                        N/A
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </Frontend>
</template>
