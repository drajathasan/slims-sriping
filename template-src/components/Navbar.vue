<script setup>
    import asset from '../assets/json/attribute.json'
</script>

<template>
    <nav class="bg-transparent text-white w-full flex relative justify-between items-center mx-auto px-4 md:px-8 h-20">
        <!-- logo -->
        <div class="inline-flex">
            <a class="_o6689fn" href="/"
                ><div class="hidden md:block">
                    <div class="flex items-center justify-center gap-2">
                        <img :src="asset.logo" width="40px" height="11px"/>
                        <h1 class="font-bold text-2xl">{{ asset.name }}</h1>
                    </div>
                </div>
                <div class="block md:hidden">
                    <img :src="asset.logo" width="40px" height="11px"/>
                </div>
            </a>
        </div>

        <!-- end logo -->

        <!-- search bar -->
        <!-- <div class="hidden sm:block flex-shrink flex-grow-0 justify-start px-2">
            <div class="inline-block">
                <div class="inline-flex items-center max-w-full">
                    <button class="flex items-center flex-grow-0 flex-shrink pl-2 relative w-60 border rounded-full px-1  py-1" type="button">
                        <div class="block flex-grow flex-shrink overflow-hidden">Start your search</div>
                        <div class="flex items-center justify-center relative  h-8 w-8 rounded-full">
                            <svg
                                viewBox="0 0 32 32"
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true"
                                role="presentation"
                                focusable="false"
                                style="
                                    display: block;
                                    fill: none;
                                    height: 12px;
                                    width: 12px;
                                    stroke: currentcolor;
                                    stroke-width: 5.33333;
                                    overflow: visible;
                                "
                            >
                                <g fill="none">
                                    <path
                                        d="m13 24c6.0751322 0 11-4.9248678 11-11 0-6.07513225-4.9248678-11-11-11-6.07513225 0-11 4.92486775-11 11 0 6.0751322 4.92486775 11 11 11zm8-3 9 9"
                                    ></path>
                                </g>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div> -->
        <!-- end search bar -->

        <!-- login -->
        <div class="flex-initial">
        <div class="flex justify-end items-center relative">
        
            <div class="flex mr-4 items-center">
            <a class="hidden md:inline-block py-2 px-3 hover:bg-gray-200 hover:text-gray-800 rounded-full" href="#">
                <div class="flex items-center relative cursor-pointer whitespace-nowrap">Become a host</div>
            </a>
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