<script setup>
    const props = defineProps({
        title: {
            type: String,
            default: 'My App'
        }
    })
</script>
<template>
    <section class="bg-gray-200 min-h-[100vh]">
        <Head>
            <Title>{{ props.title }}</Title>
            <Meta name="description" content="My app description"/>
        </Head>
        <slot />
    </section>
</template>