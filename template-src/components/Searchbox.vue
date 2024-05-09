<script setup>
    const state = reactive({
        dropDown: false,
        advanceSearch: false
    })

    const showDropDown = (evt) => {
        state.dropDown = true
    }

    onMounted(() => {
        document.querySelector('body')?.addEventListener('click', function(el) {
            if (el.target.getAttribute('id') !== 'showDropDown') {
                state.dropDown = false
            }
        })
    })
</script>
<template>
    <section class="text-white text-center py-16 md:py-22">
        <h1 class="text-5xl font-bold">Find Something Awesome</h1>
        <p class="text-xl py-3">We have many collection to you, lets type some keyword and we will serve you</p>
        <div class="flex justify-start bg-white mx-64">
            <div class="flex flex-row text-gray-800 w-full">
                <button @click="showDropDown($event)" id="showDropDown" class="text-left cursor-pointer w-2/12 h-12 px-4 py-3">Any field</button>
                <ul v-if="state.dropDown" class="absolute bg-white text-left min-w-48 max-w-fit p-5 mt-14">
                    <li class="pt-1 cursor-pointer" v-for="li in ['Author','Subject','ISBN/ISSN']">{{ li }}</li>
                </ul>
                <input type="text" class="outline-none h-12 py-3 px-2 curor-pointer w-8/12" placeholder="keyword(s)"/>
                <div class="flex w-2/12 h-12 justify-end">
                    <button class="px-3 my-1 mr-4 bg-blue-600 text-white">Search</button>
                </div>
            </div>
        </div>
        <button class="py-5">Advance Search</button>
        <div v-if="advanceSearch" class="flex justify-start bg-white mx-64">
            <h1>Hai</h1>
        </div>
    </section>
</template>