<script setup>
    // import asset from '../assets/json/attribute.json'
    const {$api} = useNuxtApp()

    const asset = reactive({
        status: false,
        detail: {}
    })

    const list = reactive({
        items: [
            {label: 'Home', url: '/'},
            {label: 'Information', url: '/page/information'},
        ]
    })

    try {
        let response = await $api('static')
        if (response.status) {
            asset.status = true
            asset.detail = response.data
        }
    } catch (error) {
        
    }
    
</script>

<template>
    <nav class="bg-transparent text-white w-full flex relative justify-between items-center mx-auto px-4 md:px-8 h-20">
        <!-- logo -->
        <div class="inline-flex">
            <div class="_o6689fn">
                <div class="hidden md:block">
                    <div v-if="asset.status" class="flex items-center justify-center gap-2">
                        <img :src="asset.detail.logo" width="40px" height="11px"/>
                        <h1 class="font-bold text-xl">{{ asset.detail.name }}</h1>
                        <div>
                            <NuxtLink v-for="item in list.items" class="hidden md:inline-block p-3 hover:text-gray-300 rounded-full" :to="item.url">
                                <div class="flex items-center relative cursor-pointer whitespace-nowrap">{{ item.label }}</div>
                            </NuxtLink>
                        </div>
                    </div>
                </div>
                <div class="block md:hidden">
                    <img :src="asset.detail.logo" width="40px" height="11px"/>
                </div>
            </div>
        </div>

        <!-- end logo -->


        <!-- login -->
        <div class="flex-initial">
        <div class="flex justify-end items-center relative">
        
            <div class="flex mr-4 items-center">
            <NuxtLink class="hidden md:inline-block py-2 px-3 hover:bg-gray-200 hover:text-gray-800 rounded-full" to="/page/member">
                <div class="flex items-center relative cursor-pointer whitespace-nowrap">Member Area</div>
            </NuxtLink>
            <div class="block md:hidden relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </div>
            </div>
        </div>
        </div>
        <!-- end login -->
    </nav>
</template>