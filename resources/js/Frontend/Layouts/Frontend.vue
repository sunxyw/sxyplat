<script setup>
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue';
import {Link} from '@inertiajs/inertia-vue3';

import "wowjs/css/libs/animate.css";
import wow from "wowjs";
import LogoWhite from '../../../images/logo/logo-white.svg';
import Header from "@/Frontend/Components/Layout/Header.vue";
import Footer from "@/Frontend/Components/Layout/Footer.vue";
import BackToTop from "@/Frontend/Components/BackToTop.vue";
import {setupSticky} from "@/Plugins/chore.js"
import {nextTick, onMounted} from "vue";

onMounted(() => {
    setupSticky();
    nextTick(() => {
        new wow.WOW({live: true}).init();
    });
});
</script>

<template>
    <Header></Header>

    <slot></slot>

    <!-- ====== Faq Section Start -->
    <section
        class="relative z-20 overflow-hidden bg-[#f3f4ff] pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
    >
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[620px] text-center lg:mb-20">
              <span class="mb-2 block text-lg font-semibold text-primary">
                FAQ
              </span>
                        <h2
                            class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]"
                        >
                            Any Questions? Answered
                        </h2>
                        <p
                            class="text-lg leading-relaxed text-body-color sm:text-xl sm:leading-relaxed"
                        >
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".1s
              "
                    >
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary"
                            >
                                <svg
                                    width="17"
                                    height="10"
                                    viewBox="0 0 17 10"
                                    class="icon fill-current"
                                >
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3"
                                        stroke="#3056D3"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    How to use TailGrids?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div
                        class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".15s
              "
                    >
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary"
                            >
                                <svg
                                    width="17"
                                    height="10"
                                    viewBox="0 0 17 10"
                                    class="icon fill-current"
                                >
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3"
                                        stroke="#3056D3"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    How to download icons from LineIcons?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div
                        class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".2s
              "
                    >
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary"
                            >
                                <svg
                                    width="17"
                                    height="10"
                                    viewBox="0 0 17 10"
                                    class="icon fill-current"
                                >
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3"
                                        stroke="#3056D3"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    Is GrayGrids part of UIdeck?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".1s
              "
                    >
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary"
                            >
                                <svg
                                    width="17"
                                    height="10"
                                    viewBox="0 0 17 10"
                                    class="icon fill-current"
                                >
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3"
                                        stroke="#3056D3"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    Can I use this template for commercial project?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div
                        class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".15s
              "
                    >
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary"
                            >
                                <svg
                                    width="17"
                                    height="10"
                                    viewBox="0 0 17 10"
                                    class="icon fill-current"
                                >
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3"
                                        stroke="#3056D3"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    Do you have plan to releasing Play Pro?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div
                        class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".2s
              "
                    >
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary"
                            >
                                <svg
                                    width="17"
                                    height="10"
                                    viewBox="0 0 17 10"
                                    class="icon fill-current"
                                >
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3"
                                        stroke="#3056D3"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    Where and how to host this template?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg
                width="1440"
                height="886"
                viewBox="0 0 1440 886"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)"
                />
                <defs>
                    <linearGradient
                        id="paint0_linear"
                        x1="1308.65"
                        y1="1142.58"
                        x2="602.827"
                        y2="-418.681"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop stop-color="#3056D3" stop-opacity="0.36"/>
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0"/>
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
    <!-- ====== Faq Section End -->

    <!-- ====== Testimonials Start ====== -->
    <section id="testimonials" class="pt-20 md:pt-[120px]">
        <div class="container px-4">
            <div class="flex flex-wrap">
                <div class="mx-4 w-full">
                    <div class="mx-auto mb-[60px] max-w-[620px] text-center lg:mb-20">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Testimonials
              </span>
                        <h2
                            class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]"
                        >
                            What our Client Say
                        </h2>
                        <p
                            class="text-lg leading-relaxed text-body-color sm:text-xl sm:leading-relaxed"
                        >
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="ud-single-testimonial wow fadeInUp mb-12 bg-white p-8 shadow-testimonial"
                        data-wow-delay=".1s
              "
                    >
                        <div class="ud-testimonial-ratings mb-3 flex items-center">
                <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                        </div>
                        <div class="ud-testimonial-content mb-6">
                            <p class="text-base tracking-wide text-body-color">
                                “Our members are so impressed. It's intuitive. It's clean.
                                It's distraction free. If you're building a community.
                            </p>
                        </div>
                        <div class="ud-testimonial-info flex items-center">
                            <div
                                class="ud-testimonial-image mr-5 h-[50px] w-[50px] overflow-hidden rounded-full"
                            >
                                <img
                                    src="assets/images/testimonials/author-01.png"
                                    alt="author"
                                />
                            </div>
                            <div class="ud-testimonial-meta">
                                <h4 class="text-sm font-semibold">Sabo Masties</h4>
                                <p class="text-xs text-[#969696]">Founder @ Rolex</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="ud-single-testimonial wow fadeInUp mb-12 bg-white p-8 shadow-testimonial"
                        data-wow-delay=".15s
              "
                    >
                        <div class="ud-testimonial-ratings mb-3 flex items-center">
                <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                        </div>
                        <div class="ud-testimonial-content mb-6">
                            <p class="text-base tracking-wide text-body-color">
                                “Our members are so impressed. It's intuitive. It's clean.
                                It's distraction free. If you're building a community.
                            </p>
                        </div>
                        <div class="ud-testimonial-info flex items-center">
                            <div
                                class="ud-testimonial-image mr-5 h-[50px] w-[50px] overflow-hidden rounded-full"
                            >
                                <img
                                    src="assets/images/testimonials/author-02.png"
                                    alt="author"
                                />
                            </div>
                            <div class="ud-testimonial-meta">
                                <h4 class="text-sm font-semibold">Margin Gesmu</h4>
                                <p class="text-xs text-[#969696]">Founder @ UI Hunter</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="ud-single-testimonial wow fadeInUp mb-12 bg-white p-8 shadow-testimonial"
                        data-wow-delay=".2s
              "
                    >
                        <div class="ud-testimonial-ratings mb-3 flex items-center">
                <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                            <span class="mr-1 text-[#fbb040]">
                  <svg
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      class="fill-current"
                  >
                    <path
                        d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                    />
                  </svg>
                </span>
                        </div>
                        <div class="ud-testimonial-content mb-6">
                            <p class="text-base tracking-wide text-body-color">
                                “Our members are so impressed. It's intuitive. It's clean.
                                It's distraction free. If you're building a community.
                            </p>
                        </div>
                        <div class="ud-testimonial-info flex items-center">
                            <div
                                class="ud-testimonial-image mr-5 h-[50px] w-[50px] overflow-hidden rounded-full"
                            >
                                <img
                                    src="assets/images/testimonials/author-03.png"
                                    alt="author"
                                />
                            </div>
                            <div class="ud-testimonial-meta">
                                <h4 class="text-sm font-semibold">William Smith</h4>
                                <p class="text-xs text-[#969696]">Founder @ Trorex</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="mx-4 w-full">
                    <div class="wow fadeInUp" data-wow-delay=".2s">
                        <div class="ud-title mb-8">
                            <h6
                                class="relative inline-flex items-center text-xs font-normal text-body-color"
                            >
                                Some Of Our Clients
                                <span class="ml-4 inline-block h-[1px] w-8 bg-[#afb2b5]">
                  </span>
                            </h6>
                        </div>
                        <div class="ud-brands-logo flex flex-wrap items-center">
                            <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                                <a
                                    href="https://tailgrids.com"
                                    target="_blank"
                                    rel="nofollow noopner"
                                >
                                    <img
                                        src="assets/images/brands/tailgrids.svg"
                                        alt="tailgrids"
                                        class="grayscale duration-300 hover:filter-none"
                                    />
                                </a>
                            </div>
                            <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                                <a
                                    href="https://ayroui.com"
                                    target="_blank"
                                    rel="nofollow noopner"
                                >
                                    <img
                                        src="assets/images/brands/ayroui.svg"
                                        alt="ayroui"
                                        class="grayscale duration-300 hover:filter-none"
                                    />
                                </a>
                            </div>
                            <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                                <a
                                    href="https://uideck.com"
                                    target="_blank"
                                    rel="nofollow noopner"
                                >
                                    <img
                                        src="assets/images/brands/uideck.svg"
                                        alt="uideck"
                                        class="grayscale duration-300 hover:filter-none"
                                    />
                                </a>
                            </div>
                            <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                                <a
                                    href="https://graygrids.com"
                                    target="_blank"
                                    rel="nofollow noopner"
                                >
                                    <img
                                        src="assets/images/brands/graygrids.svg"
                                        alt="graygrids"
                                        class="grayscale duration-300 hover:filter-none"
                                    />
                                </a>
                            </div>
                            <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                                <a
                                    href="https://lineicons.com"
                                    target="_blank"
                                    rel="nofollow noopner"
                                >
                                    <img
                                        src="assets/images/brands/lineicons.svg"
                                        alt="lineicons"
                                        class="grayscale duration-300 hover:filter-none"
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Testimonials End ====== -->

    <!-- ====== Team Section Start -->
    <section id="team" class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[620px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Our Team
              </span>
                        <h2
                            class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]"
                        >
                            Meet Our Team
                        </h2>
                        <p
                            class="text-lg leading-relaxed text-body-color sm:text-xl sm:leading-relaxed"
                        >
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp mb-10" data-wow-delay=".1s">
                        <div
                            class="h-170px] relative z-10 mx-auto mb-6 w-[170px] rounded-full"
                        >
                            <img
                                src="assets/images/team/team-01.png"
                                alt="image"
                                class="w-full rounded-full"
                            />
                            <span class="absolute top-0 left-0 z-[-1]">
                  <svg
                      width="71"
                      height="82"
                      viewBox="0 0 71 82"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                        cx="1.29337"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 1.29337 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 12.6747 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 24.0575 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 35.4379 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 46.8197 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 68.807 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 57.9443 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 1.29337 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 12.6747 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 24.0575 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 35.4379 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 46.8197 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 68.807 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 57.9433 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 1.29337 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 1.29337 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 12.6747 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 12.6747 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 24.0575 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 24.0575 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 35.4379 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 35.4379 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 46.8197 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 46.8197 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 68.807 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 68.807 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 57.9433 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 57.9443 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 1.29337 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 1.29337 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 12.6747 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 12.6747 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 24.0575 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 24.0575 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 35.4379 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 35.4379 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 46.8197 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 46.8197 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 68.807 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 68.807 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 57.9433 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 57.9443 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 1.29337 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 1.29337 1.2933)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 12.6747 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 12.6747 1.2933)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 24.0575 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 24.0575 1.29336)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 35.4379 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 35.4379 1.29336)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 46.8197 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 46.8197 1.29354)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 68.807 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 68.807 1.29354)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 57.9443 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 57.9443 1.29354)"
                        fill="#3056D3"
                    />
                  </svg>
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
                            <div class="flex items-center justify-center">
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="10"
                                        height="18"
                                        viewBox="0 0 10 18"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M9.29878 7.2H7.74898H7.19548V6.61935V4.81936V4.23871H7.74898H8.91133C9.21575 4.23871 9.46483 4.00645 9.46483 3.65806V0.580645C9.46483 0.26129 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.62581 3.18262 4.03548V6.56129V7.14194H2.62912H0.747223C0.359774 7.14194 0 7.46129 0 7.92581V10.0161C0 10.4226 0.304424 10.8 0.747223 10.8H2.57377H3.12727V11.3806V17.2161C3.12727 17.6226 3.43169 18 3.87449 18H6.47593C6.64198 18 6.78036 17.9129 6.89106 17.7968C7.00176 17.6806 7.08478 17.4774 7.08478 17.3032V11.4097V10.829H7.66596H8.91133C9.2711 10.829 9.54785 10.5968 9.6032 10.2484V10.2194V10.1903L9.99065 8.1871C10.0183 7.98387 9.99065 7.75161 9.8246 7.51935C9.76925 7.37419 9.52018 7.22903 9.29878 7.2Z"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="18"
                                        height="14"
                                        viewBox="0 0 18 14"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M15.9968 2.41096L17.1 1.09589C17.4194 0.739726 17.5065 0.465753 17.5355 0.328767C16.6645 0.821918 15.8516 0.986301 15.329 0.986301H15.1258L15.0097 0.876712C14.3129 0.30137 13.4419 0 12.5129 0C10.4806 0 8.88387 1.58904 8.88387 3.42466C8.88387 3.53425 8.88387 3.69863 8.9129 3.80822L9 4.35616L8.39032 4.32877C4.67419 4.21918 1.62581 1.20548 1.13226 0.684932C0.319355 2.05479 0.783871 3.36986 1.27742 4.19178L2.26452 5.72603L0.696774 4.90411C0.725806 6.05479 1.19032 6.9589 2.09032 7.61644L2.87419 8.16438L2.09032 8.46575C2.58387 9.86301 3.6871 10.4384 4.5 10.6575L5.57419 10.9315L4.55806 11.589C2.93226 12.6849 0.9 12.6027 0 12.5205C1.82903 13.726 4.00645 14 5.51613 14C6.64839 14 7.49032 13.8904 7.69355 13.8082C15.8226 12 16.2 5.15068 16.2 3.78082V3.58904L16.3742 3.47945C17.3613 2.60274 17.7677 2.13699 18 1.86301C17.9129 1.89041 17.7968 1.94521 17.6806 1.9726L15.9968 2.41096Z"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"
                                        />
                                        <path
                                            d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"
                                        />
                                        <path
                                            d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp mb-10" data-wow-delay=".15s">
                        <div
                            class="h-170px] relative z-10 mx-auto mb-6 w-[170px] rounded-full"
                        >
                            <img
                                src="assets/images/team/team-02.png"
                                alt="image"
                                class="w-full rounded-full"
                            />
                            <span class="absolute top-0 left-0 z-[-1]">
                  <svg
                      width="71"
                      height="82"
                      viewBox="0 0 71 82"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                        cx="1.29337"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 1.29337 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 12.6747 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 24.0575 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 35.4379 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 46.8197 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 68.807 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 57.9443 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 1.29337 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 12.6747 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 24.0575 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 35.4379 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 46.8197 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 68.807 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 57.9433 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 1.29337 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 1.29337 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 12.6747 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 12.6747 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 24.0575 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 24.0575 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 35.4379 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 35.4379 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 46.8197 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 46.8197 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 68.807 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 68.807 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 57.9433 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 57.9443 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 1.29337 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 1.29337 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 12.6747 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 12.6747 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 24.0575 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 24.0575 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 35.4379 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 35.4379 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 46.8197 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 46.8197 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 68.807 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 68.807 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 57.9433 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 57.9443 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 1.29337 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 1.29337 1.2933)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 12.6747 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 12.6747 1.2933)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 24.0575 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 24.0575 1.29336)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 35.4379 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 35.4379 1.29336)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 46.8197 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 46.8197 1.29354)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 68.807 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 68.807 1.29354)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 57.9443 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 57.9443 1.29354)"
                        fill="#3056D3"
                    />
                  </svg>
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
                            <h4 class="mb-2 text-lg font-medium text-dark">Jezmin uniya</h4>
                            <p class="mb-5 text-sm font-medium text-body-color">
                                Product Designer
                            </p>
                            <div class="flex items-center justify-center">
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="10"
                                        height="18"
                                        viewBox="0 0 10 18"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M9.29878 7.2H7.74898H7.19548V6.61935V4.81936V4.23871H7.74898H8.91133C9.21575 4.23871 9.46483 4.00645 9.46483 3.65806V0.580645C9.46483 0.26129 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.62581 3.18262 4.03548V6.56129V7.14194H2.62912H0.747223C0.359774 7.14194 0 7.46129 0 7.92581V10.0161C0 10.4226 0.304424 10.8 0.747223 10.8H2.57377H3.12727V11.3806V17.2161C3.12727 17.6226 3.43169 18 3.87449 18H6.47593C6.64198 18 6.78036 17.9129 6.89106 17.7968C7.00176 17.6806 7.08478 17.4774 7.08478 17.3032V11.4097V10.829H7.66596H8.91133C9.2711 10.829 9.54785 10.5968 9.6032 10.2484V10.2194V10.1903L9.99065 8.1871C10.0183 7.98387 9.99065 7.75161 9.8246 7.51935C9.76925 7.37419 9.52018 7.22903 9.29878 7.2Z"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="18"
                                        height="14"
                                        viewBox="0 0 18 14"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M15.9968 2.41096L17.1 1.09589C17.4194 0.739726 17.5065 0.465753 17.5355 0.328767C16.6645 0.821918 15.8516 0.986301 15.329 0.986301H15.1258L15.0097 0.876712C14.3129 0.30137 13.4419 0 12.5129 0C10.4806 0 8.88387 1.58904 8.88387 3.42466C8.88387 3.53425 8.88387 3.69863 8.9129 3.80822L9 4.35616L8.39032 4.32877C4.67419 4.21918 1.62581 1.20548 1.13226 0.684932C0.319355 2.05479 0.783871 3.36986 1.27742 4.19178L2.26452 5.72603L0.696774 4.90411C0.725806 6.05479 1.19032 6.9589 2.09032 7.61644L2.87419 8.16438L2.09032 8.46575C2.58387 9.86301 3.6871 10.4384 4.5 10.6575L5.57419 10.9315L4.55806 11.589C2.93226 12.6849 0.9 12.6027 0 12.5205C1.82903 13.726 4.00645 14 5.51613 14C6.64839 14 7.49032 13.8904 7.69355 13.8082C15.8226 12 16.2 5.15068 16.2 3.78082V3.58904L16.3742 3.47945C17.3613 2.60274 17.7677 2.13699 18 1.86301C17.9129 1.89041 17.7968 1.94521 17.6806 1.9726L15.9968 2.41096Z"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"
                                        />
                                        <path
                                            d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"
                                        />
                                        <path
                                            d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp mb-10" data-wow-delay=".2s">
                        <div
                            class="h-170px] relative z-10 mx-auto mb-6 w-[170px] rounded-full"
                        >
                            <img
                                src="assets/images/team/team-03.png"
                                alt="image"
                                class="w-full rounded-full"
                            />
                            <span class="absolute top-0 left-0 z-[-1]">
                  <svg
                      width="71"
                      height="82"
                      viewBox="0 0 71 82"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                        cx="1.29337"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 1.29337 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 12.6747 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 24.0575 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 35.4379 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 46.8197 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 68.807 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 57.9443 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 1.29337 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 12.6747 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 24.0575 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 35.4379 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 46.8197 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 68.807 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 57.9433 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 1.29337 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 1.29337 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 12.6747 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 12.6747 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 24.0575 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 24.0575 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 35.4379 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 35.4379 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 46.8197 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 46.8197 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 68.807 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 68.807 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 57.9433 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 57.9443 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 1.29337 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 1.29337 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 12.6747 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 12.6747 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 24.0575 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 24.0575 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 35.4379 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 35.4379 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 46.8197 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 46.8197 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 68.807 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 68.807 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 57.9433 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 57.9443 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 1.29337 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 1.29337 1.2933)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 12.6747 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 12.6747 1.2933)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 24.0575 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 24.0575 1.29336)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 35.4379 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 35.4379 1.29336)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 46.8197 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 46.8197 1.29354)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 68.807 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 68.807 1.29354)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 57.9443 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 57.9443 1.29354)"
                        fill="#3056D3"
                    />
                  </svg>
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
                                Andrieo Gloree
                            </h4>
                            <p class="mb-5 text-sm font-medium text-body-color">
                                App Developer
                            </p>
                            <div class="flex items-center justify-center">
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="10"
                                        height="18"
                                        viewBox="0 0 10 18"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M9.29878 7.2H7.74898H7.19548V6.61935V4.81936V4.23871H7.74898H8.91133C9.21575 4.23871 9.46483 4.00645 9.46483 3.65806V0.580645C9.46483 0.26129 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.62581 3.18262 4.03548V6.56129V7.14194H2.62912H0.747223C0.359774 7.14194 0 7.46129 0 7.92581V10.0161C0 10.4226 0.304424 10.8 0.747223 10.8H2.57377H3.12727V11.3806V17.2161C3.12727 17.6226 3.43169 18 3.87449 18H6.47593C6.64198 18 6.78036 17.9129 6.89106 17.7968C7.00176 17.6806 7.08478 17.4774 7.08478 17.3032V11.4097V10.829H7.66596H8.91133C9.2711 10.829 9.54785 10.5968 9.6032 10.2484V10.2194V10.1903L9.99065 8.1871C10.0183 7.98387 9.99065 7.75161 9.8246 7.51935C9.76925 7.37419 9.52018 7.22903 9.29878 7.2Z"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="18"
                                        height="14"
                                        viewBox="0 0 18 14"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M15.9968 2.41096L17.1 1.09589C17.4194 0.739726 17.5065 0.465753 17.5355 0.328767C16.6645 0.821918 15.8516 0.986301 15.329 0.986301H15.1258L15.0097 0.876712C14.3129 0.30137 13.4419 0 12.5129 0C10.4806 0 8.88387 1.58904 8.88387 3.42466C8.88387 3.53425 8.88387 3.69863 8.9129 3.80822L9 4.35616L8.39032 4.32877C4.67419 4.21918 1.62581 1.20548 1.13226 0.684932C0.319355 2.05479 0.783871 3.36986 1.27742 4.19178L2.26452 5.72603L0.696774 4.90411C0.725806 6.05479 1.19032 6.9589 2.09032 7.61644L2.87419 8.16438L2.09032 8.46575C2.58387 9.86301 3.6871 10.4384 4.5 10.6575L5.57419 10.9315L4.55806 11.589C2.93226 12.6849 0.9 12.6027 0 12.5205C1.82903 13.726 4.00645 14 5.51613 14C6.64839 14 7.49032 13.8904 7.69355 13.8082C15.8226 12 16.2 5.15068 16.2 3.78082V3.58904L16.3742 3.47945C17.3613 2.60274 17.7677 2.13699 18 1.86301C17.9129 1.89041 17.7968 1.94521 17.6806 1.9726L15.9968 2.41096Z"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"
                                        />
                                        <path
                                            d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"
                                        />
                                        <path
                                            d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp mb-10" data-wow-delay=".25s">
                        <div
                            class="h-170px] relative z-10 mx-auto mb-6 w-[170px] rounded-full"
                        >
                            <img
                                src="assets/images/team/team-01.png"
                                alt="image"
                                class="w-full rounded-full"
                            />
                            <span class="absolute top-0 left-0 z-[-1]">
                  <svg
                      width="71"
                      height="82"
                      viewBox="0 0 71 82"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                        cx="1.29337"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 1.29337 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 12.6747 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 24.0575 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 35.4379 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 46.8197 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 68.807 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 57.9443 80.7066)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 1.29337 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 12.6747 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 24.0575 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 35.4379 69.3249)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 46.8197 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 68.807 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 57.9433 69.325)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 1.29337 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 1.29337 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 12.6747 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 12.6747 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 24.0575 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 24.0575 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 35.4379 57.9433)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 35.4379 24.0568)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 46.8197 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 46.8197 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 68.807 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 68.807 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 57.9433 57.9431)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 57.9443 24.0567)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 1.29337 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 1.29337 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 12.6747 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 12.6747 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 24.0575 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 24.0575 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 35.4379 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 35.4379 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 46.8197 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 46.8197 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 68.807 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 68.807 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9433"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 57.9433 46.5615)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 57.9443 12.6751)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 1.29337 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="1.29337"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 1.29337 1.2933)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 12.6747 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="12.6747"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 12.6747 1.2933)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 24.0575 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="24.0575"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 24.0575 1.29336)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 35.4379 35.1798)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="35.4379"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 35.4379 1.29336)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 46.8197 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="46.8197"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 46.8197 1.29354)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 68.807 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="68.807"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 68.807 1.29354)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 57.9443 35.18)"
                        fill="#3056D3"
                    />
                    <circle
                        cx="57.9443"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 57.9443 1.29354)"
                        fill="#3056D3"
                    />
                  </svg>
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
                                Jackie Sanders
                            </h4>
                            <p class="mb-5 text-sm font-medium text-body-color">
                                Content Writer
                            </p>
                            <div class="flex items-center justify-center">
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="10"
                                        height="18"
                                        viewBox="0 0 10 18"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M9.29878 7.2H7.74898H7.19548V6.61935V4.81936V4.23871H7.74898H8.91133C9.21575 4.23871 9.46483 4.00645 9.46483 3.65806V0.580645C9.46483 0.26129 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.62581 3.18262 4.03548V6.56129V7.14194H2.62912H0.747223C0.359774 7.14194 0 7.46129 0 7.92581V10.0161C0 10.4226 0.304424 10.8 0.747223 10.8H2.57377H3.12727V11.3806V17.2161C3.12727 17.6226 3.43169 18 3.87449 18H6.47593C6.64198 18 6.78036 17.9129 6.89106 17.7968C7.00176 17.6806 7.08478 17.4774 7.08478 17.3032V11.4097V10.829H7.66596H8.91133C9.2711 10.829 9.54785 10.5968 9.6032 10.2484V10.2194V10.1903L9.99065 8.1871C10.0183 7.98387 9.99065 7.75161 9.8246 7.51935C9.76925 7.37419 9.52018 7.22903 9.29878 7.2Z"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="18"
                                        height="14"
                                        viewBox="0 0 18 14"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M15.9968 2.41096L17.1 1.09589C17.4194 0.739726 17.5065 0.465753 17.5355 0.328767C16.6645 0.821918 15.8516 0.986301 15.329 0.986301H15.1258L15.0097 0.876712C14.3129 0.30137 13.4419 0 12.5129 0C10.4806 0 8.88387 1.58904 8.88387 3.42466C8.88387 3.53425 8.88387 3.69863 8.9129 3.80822L9 4.35616L8.39032 4.32877C4.67419 4.21918 1.62581 1.20548 1.13226 0.684932C0.319355 2.05479 0.783871 3.36986 1.27742 4.19178L2.26452 5.72603L0.696774 4.90411C0.725806 6.05479 1.19032 6.9589 2.09032 7.61644L2.87419 8.16438L2.09032 8.46575C2.58387 9.86301 3.6871 10.4384 4.5 10.6575L5.57419 10.9315L4.55806 11.589C2.93226 12.6849 0.9 12.6027 0 12.5205C1.82903 13.726 4.00645 14 5.51613 14C6.64839 14 7.49032 13.8904 7.69355 13.8082C15.8226 12 16.2 5.15068 16.2 3.78082V3.58904L16.3742 3.47945C17.3613 2.60274 17.7677 2.13699 18 1.86301C17.9129 1.89041 17.7968 1.94521 17.6806 1.9726L15.9968 2.41096Z"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="mx-2 flex h-8 w-8 items-center justify-center text-[#cdced6] hover:text-primary"
                                >
                                    <svg
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"
                                        />
                                        <path
                                            d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"
                                        />
                                        <path
                                            d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Team Section End -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="relative py-20 md:py-[120px]">
        <div
            class="absolute top-0 left-0 z-[-1] h-1/2 w-full bg-[#f3f4fe] lg:h-[45%] xl:h-1/2"
        ></div>
        <div class="container px-4">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
                    <div class="ud-contact-content-wrapper">
                        <div class="ud-contact-title mb-12 lg:mb-[150px]">
                <span class="mb-5 text-base font-semibold text-dark">
                  CONTACT US
                </span>
                            <h2 class="text-[35px] font-semibold">
                                Let's talk about <br/>
                                Love to hear from you!
                            </h2>
                        </div>
                        <div class="mb-12 flex flex-wrap justify-between lg:mb-0">
                            <div class="mb-8 flex w-[330px] max-w-full">
                                <div class="mr-6 text-[32px] text-primary">
                                    <svg
                                        width="29"
                                        height="35"
                                        viewBox="0 0 29 35"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z"
                                        />
                                        <path
                                            d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z"
                                        />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-6 text-lg font-semibold">Our Location</h5>
                                    <p class="text-base text-body-color">
                                        401 Broadway, 24th Floor, Orchard Cloud View, London
                                    </p>
                                </div>
                            </div>
                            <div class="mb-8 flex w-[330px] max-w-full">
                                <div class="mr-6 text-[32px] text-primary">
                                    <svg
                                        width="34"
                                        height="25"
                                        viewBox="0 0 34 25"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z"
                                        />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-6 text-lg font-semibold">How Can We Help?</h5>
                                    <p class="text-base text-body-color">info@yourdomain.com</p>
                                    <p class="text-base text-body-color">
                                        contact@yourdomain.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
                    <div
                        class="wow fadeInUp rounded-lg bg-white py-10 px-8 shadow-testimonial sm:py-12 sm:px-10 md:p-[60px] lg:p-10 lg:py-12 lg:px-10 2xl:p-[60px]"
                        data-wow-delay=".2s
              "
                    >
                        <h3 class="mb-8 text-2xl font-semibold md:text-[26px]">
                            Send us a Message
                        </h3>
                        <form>
                            <div class="mb-6">
                                <label for="fullName" class="block text-xs text-dark"
                                >Full Name*</label
                                >
                                <input
                                    type="text"
                                    name="fullName"
                                    placeholder="Adam Gelius"
                                    class="w-full border-0 border-b border-[#f1f1f1] py-4 focus:border-primary focus:outline-none"
                                />
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block text-xs text-dark"
                                >Email*</label
                                >
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="example@yourmail.com"
                                    class="w-full border-0 border-b border-[#f1f1f1] py-4 focus:border-primary focus:outline-none"
                                />
                            </div>
                            <div class="mb-6">
                                <label for="phone" class="block text-xs text-dark"
                                >Phone*</label
                                >
                                <input
                                    type="text"
                                    name="phone"
                                    placeholder="+885 1254 5211 552"
                                    class="w-full border-0 border-b border-[#f1f1f1] py-4 focus:border-primary focus:outline-none"
                                />
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-xs text-dark"
                                >Message*</label
                                >
                                <textarea
                                    name="message"
                                    rows="1"
                                    placeholder="type your message here"
                                    class="w-full resize-none border-0 border-b border-[#f1f1f1] py-4 focus:border-primary focus:outline-none"
                                ></textarea>
                            </div>
                            <div class="mb-0">
                                <button
                                    type="submit"
                                    class="inline-flex items-center justify-center rounded bg-primary py-4 px-6 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-dark"
                                >
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->

    <Footer></Footer>

    <BackToTop></BackToTop>

    <!-- ====== All Scripts -->
</template>

<script></script>
