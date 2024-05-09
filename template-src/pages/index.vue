<script setup>
    const {$api} = useNuxtApp()
    const meta = reactive({
        title: 'SLiMS',
        meta: []
    })

    try {
        let req = await $api('static')

        if (req.status) {
            meta.title = req.data.name
        }

    } catch (error) {
        console.log(error)
    }

</script>
<template>
    <NuxtLayout :title="meta.title">
       <Banner>
            <Navbar/>
            <Searchbox/>
       </Banner>
    </NuxtLayout>
</template>