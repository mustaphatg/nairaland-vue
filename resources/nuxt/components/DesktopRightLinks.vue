<template>

    <div class="w-full  h-full mt-9">

        <smooth-scrollbar>
            <!-- general -->
            <ul v-show="show == 'general' " class="menu   bg-white shadow-md border  rounded-lg p-2">
                <li v-for="(link, index) in general" :key="index"><NuxtLink :to=" '/general'+link.href" >{{ link.text }}</NuxtLink></li>
            </ul>


            <!-- enterainment -->
            <ul v-show="show == 'entertainment' " class="menu bg-white shadow-md border  rounded-lg p-2">
                <li v-for="(link, index) in entertainment" :key="index"><NuxtLink :to=" '/entertainment'+link.href" >{{ link.text }}</NuxtLink></li>
            </ul>


            <!-- science -->
            <ul v-show="show == 'science' " class="menu  bg-white shadow-md border rounded-lg p-2">
                <li v-for="(link, index) in science" :key="index"><NuxtLink :to=" '/science'+link.href" >{{ link.text }}</NuxtLink></li>
            </ul>


        </smooth-scrollbar>
    </div>

</template>




<script>


import {section} from '../data/section.js'

export default {

    props : {
        show : String
    },

    data(){
        return {
            general : section.general,
            entertainment : section.entertainment,
            science : section.science
        }
    },
    
    mounted(){

        

    }

}
</script>

<style scoped>
.general_menu{
    max-height: 70%;
}
</style>