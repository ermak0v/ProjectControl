<template>
    <div class="SearchPopUp">
        <a v-for="(item, index) in action" :key="index" :href="item.description" class="panel-block">
            <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
            </span>
            {{item.name}}
        </a>
    </div>
</template>

<script>
    export default {
        name: "SearchPopUp",
        props: ["action"],
    }
</script>

<style scoped>
    .SearchPopUp {
        position: absolute;
        width: 94.5%;
    }

    .panel-block {
        background: #00d1b2;
    }
</style>
