<template>
    <div class="min-h-screen pt-12 pb-12 flex flex-col bg-white">
        <main class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex-shrink-0 flex justify-center">
                <a href="/" class="inline-flex">
                    <span class="sr-only">Laravel Community Tanzania</span>

                    <img class="h-12 w-auto"
                         src="https://laravel.com/img/logomark.min.svg" alt="Laravel">
                </a>
            </div>

            <div class="py-4">
                <div class="text-center">
                    <p class="text-sm font-semibold text-blue-600 uppercase tracking-wide">
                        Welcome
                    </p>

                    <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">
                        Laravel Community Tanzania
                    </h1>

                    <p class="mt-2 text-base text-gray-500">
                        A community for Laravel beginners, experts and artisans <i> from across the entire Tanzania. </i>
                    </p>

                    <div class="mt-6">
                        <Subscribe/>
                    </div>
                </div>
            </div>
        </main>

        <footer class="flex-shrink-0 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex justify-center space-x-4">
                <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-600">Facebook</a>

                <span class="inline-block border-l border-gray-300" aria-hidden="true"></span>

                <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-600">Instagram</a>

                <span class="inline-block border-l border-gray-300" aria-hidden="true"></span>

                <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-600">Twitter</a>
            </nav>
        </footer>
    </div>

</template>

<script>
import Subscribe from "@/Community/Subscribe";

export default {
    components: {
        Subscribe
    }
}
</script>
