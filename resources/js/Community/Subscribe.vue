<template>
    <div class="bg-white dark:bg-gray-800">
        <div class="max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
            <div class="px-6 py-6 bg-blue-700 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
                <div class="xl:w-0 xl:flex-1">
                    <h2 class="text-2xl leading-8 font-extrabold tracking-tight text-white sm:text-3xl sm:leading-9">
                        Laravel Community Tanzania
                    </h2>

                    <p class="mt-3 max-w-3xl text-lg leading-6 text-blue-200" id="newsletter-headline">
                        We will keep you updated  with news and events in our Community.
                    </p>
                </div>

                <Notification/>

                <div @submit.prevent="store" class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
                    <form class="sm:flex" aria-labelledby="newsletter-headline">
                        <input aria-label="Email address" type="email" v-model="form.email" required
                               class="appearance-none w-full dark:bg-gray-800 dark:text-gray-100 px-5 py-3 border border-transparent text-base leading-6 rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 transition duration-150 ease-in-out"
                               placeholder="Enter your email address.">

                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                            <button :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                                class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-500 hover:bg-blue-400 focus:outline-none focus:bg-blue-400 transition duration-150 ease-in-out">
                                Subscribe
                            </button>
                        </div>
                    </form>

                    <p class="mt-3 text-sm leading-5 text-blue-200">
                        We care about the protection of your data. Read our
                        <a href="/privacy" class="text-white font-medium underline">
                            Privacy Policy
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {CheckCircleIcon} from "@heroicons/vue/solid/esm";
import Notification from "@/Community/Notification";

export default {
    name: 'Subscribe',

    data() {
        return {
            form: this.$inertia.form({
                email: '',
            })
        }
    },

    components: {
        Notification,
        CheckCircleIcon,
    },

    props: ['sessions'],

    methods: {
        store() {
            this.form.post(this.route('subscribe.store'), {
                preserveScroll: true,
                onSuccess: () => this.form.reset()
            })
        }
    }
}
</script>
