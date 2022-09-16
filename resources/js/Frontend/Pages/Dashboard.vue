<script setup>
import Frontend from "@/Frontend/Layouts/Frontend.vue";
import Banner from "@/Frontend/Components/Banner.vue";
import MessDot from "@/Frontend/Components/Decoration/MessDot.vue";
</script>

<template>
    <Frontend>
        <Banner title="Dashboard"></Banner>

        <section id="team" class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
            <div class="container">

                <div class="-mx-4 flex flex-wrap justify-center">
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                        <div class="wow fadeInUp mb-10" data-wow-delay=".1s">
                            <div
                                class="h-[170px] relative z-10 mx-auto mb-6 w-[170px] rounded-full"
                            >
                                <img
                                    src="assets/images/team/team-01.png"
                                    alt="image"
                                    class="w-full rounded-full"
                                />
                                <span class="absolute top-0 left-0 z-[-1]">
                                    <MessDot dot-style="lite"></MessDot>
                                </span>
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
                            </div>
                            <div class="text-center">
                                <h4 class="mb-2 text-lg font-medium text-dark">
                                    Adveen Desuza
                                </h4>
                                <p class="mb-5 text-sm font-medium text-body-color">
                                    UI Designer
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </Frontend>
</template>
