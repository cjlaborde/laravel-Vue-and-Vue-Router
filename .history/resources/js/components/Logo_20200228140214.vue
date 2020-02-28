<template>
    <div class="container">
       <h1 class="font-normal text-3xl text-gray-800 leading-none mb-8">Full Logo</h1>

        <div class="mb-10">
            <picture 
                style="height: 382px;" 
                class="block shadow flex items-center justify-center mb-6 rounded-lg"
            >
                <img src="/images/logo.svg" alt="logo" />
            </picture>

            <div class="flex justify-between items-center">
                <p>Original logo on <strong>white</strong> background</p>

                <a href="/images/logo.svg" class="border border-gray-300 font-bold py-2 px-8 rounded-full text-black text-xs">logo.svg</a>
            </div>

        </div>
        
        <div>
            <picture 
                style="height: 382px;" 
                class="block shadow flex items-center justify-center mb-6 bg-blue-700 rounded-lg"
            >
                <img src="/images/negative-logo.svg" alt="logo" />
            </picture>

            <div class="flex justify-between items-center">
                <p>Negative logo on <strong>white</strong> background</p>

                <a href="/images/negative-logo.svg" class="border border-gray-300 font-bold py-2 px-8 rounded-full text-black text-xs">negative-logo.svg</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
