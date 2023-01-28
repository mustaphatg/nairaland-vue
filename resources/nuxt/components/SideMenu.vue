<template>


    <div class="w-4/5 bg-white overflow-hidden">

        <smooth-scrollbar>
            <!-- general -->
            <div tabindex="0" class="collapse collapse-open my-3 collapse-arrow  bg-base-100 ">
                <div class="collapse-title text-xl font-medium">
                    General
                </div>
                <div class="collapse-content"> 
                <ul class="menu   bg-white shadow-md border  rounded-lg p-2">
                        <li @click="closeDrawer()" v-for="(link, index) in general" :key="index"><NuxtLink :to=" '/general'+link.href" >{{ link.text }}</NuxtLink></li>
                    </ul>
                </div>
            </div> 


            <!-- Enteratainment -->
            <div tabindex="0" class="collapse collapse-open my-3 collapse-arrow  bg-base-100">
                <div class="collapse-title text-xl font-medium">
                    Enteratainment
                </div>
                <div class="collapse-content"> 
                    <ul class="menu bg-white shadow-md border  rounded-lg p-2">
                        <li @click="closeDrawer()" v-for="(link, index) in entertainment" :key="index"><NuxtLink :to=" '/entertainment'+link.href" >{{ link.text }}</NuxtLink></li>
                    </ul>
                </div>
            </div>


            <!-- Science -->
            <div tabindex="0" class="collapse collapse-open my-3 collapse-arrow  bg-base-100 ">
                <div class="collapse-title text-xl font-medium">
                    Science 
                </div>
                <div class="collapse-content"> 
                    <ul class="menu  bg-white shadow-md border rounded-lg p-2">
                        <li v-for="(link, index) in science" :key="index"><NuxtLink :to=" '/science'+link.href" >{{ link.text }}</NuxtLink></li>
                    </ul>
                </div>
            </div>

        </smooth-scrollbar>

    </div>


</template>


<script>


import {section} from '../data/section.js'

export default {
    
    mounted(){
        // console.log('fetching secion')
    },


    data(){
        return {
            general : section.general,
            entertainment : section.entertainment,
            science : section.science
        }
    },

    methods: {

        closeDrawer(){
            var drawer = document.querySelector('#my-drawer')
            drawer.checked = !drawer.checked
        }
    }

}
</script>
