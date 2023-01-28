<template>
    <div class="w-full h-full mt-5 p-2">
        <ul class=" menu hadow-md rounded-lg p-2 bg-white border">
            <li><NuxtLink class='left_home' to='/'>Home</NuxtLink></li>
            <li><NuxtLink to='/general'>General</NuxtLink></li>
            <li><NuxtLink to='/entertainment'>Entertainment</NuxtLink></li>
            <li><NuxtLink to='/science'>Science</NuxtLink></li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
        };
    },

     mounted() {
        var m = document.querySelector('.left_home')
        m.classList.remove('nuxt-link-active')
    },
};
</script>
