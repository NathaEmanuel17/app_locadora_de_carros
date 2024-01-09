<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination" style="cursor: pointer;">
            <slot></slot>
        </ul>
    </nav>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
