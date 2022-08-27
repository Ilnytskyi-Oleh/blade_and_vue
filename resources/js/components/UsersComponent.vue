<template>
    <div v-for="user in users" :key="user.id">
        {{ user.name }}
    </div>
</template>

<script>
export default {
    props:['users']

}
</script>

<style scoped>

</style>
