<template>
    <div>
        <!-- loading -->
        <p v-if="$fetchState.pending" class="mt-5">
            <clip-loader
                :loading="loading"
                color="green"
                :size="size"
            ></clip-loader>
        </p>

        <!-- loading error -->
        <p v-if="$fetchState.error">An error occured</p>


        <!-- topic -->
        <div v-if="!$fetchState.pending">

            <!-- header -->
            <div class=" topic_detail bg-white border  my-5 shadow rounded p-5 " >

                <h3 class="m-3 mb-5 text-center text-xl border-b-4 text-green-800 font-semibold ">{{topic.title}}</h3>
                
                <!-- topic body -->
                <p class="body" v-html="topic.body"></p>

                <!-- topic image -->
                <div class=" mt-4 " v-if="topic.images">
                     <viewer :images="topic.images" class="flex flex-wrap justify-start" >
                        <img style="width:200px; height:200px" class="border  rounded" v-for="(image, index) in topic.images " :key="index" :src="image" />
                    </viewer> 
                </div>

                <div class="flex mt-3  justify-start font-small text-zinc-800 font-mono">
                    <span class=" btn-ghost btn-sm font-bold"> Author : {{topic.creator}}.</span>
                    <!-- <span class=" btn-ghost btn-sm"> {{topic.views}} views </span>
                    <span class=" btn-ghost btn-sm"> {{topic.replies}} replies</span> -->
                </div>
            </div>


            <!-- replies -->
            <div  class="reply bg-white border text-black-400 my-5 border-t-2 rounded p-5 block" v-for="(reply, index) in topic.replies" :key="index" >

                <!-- reply with quote -->
                <div class="reply_with_quote" v-if="reply.blockquote">
                    
                    <!-- quote -->
                    <div class="chat chat-start">
                        <div class="chat-header font-bold text-green-800 ">{{reply.blockquote.author}}</div>
                        <div class="chat-bubble quote" v-html="reply.blockquote.quote"></div>
                    </div>

                    <!-- actual reply -->
                    <div  class="chat chat-end">
                        <div class="chat-header font-bold text-green-800 ">{{reply.user}}</div>
                        <div class="chat-bubble  reply_body" v-html="reply.body"></div>
                    </div>

                </div>


                <!-- reply without quote -->
                <div v-else class="reply_without_quote chat chat-start">
                    <div class="chat-header font-bold text-green-800 ">{{reply.user}}</div>
                    <div class="chat-bubble  reply_body" v-html="reply.body"></div>
                </div>


                <!-- topic reply images -->
                <div class=" mt-4 " v-if="reply.images">
                    <viewer :images="reply.images" class="flex flex-wrap justify-start" >
                        <img style="width:200px; height:200px" class="border  rounded" v-for="(image, index) in reply.images " :key="index" :src="image" />
                    </viewer> 
                </div>

            </div>


            <br><br><br><br>
        </div>

    </div>

</template>





<script>

import ClipLoader from "vue-spinner/src/ClipLoader.vue";
import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'
import Vue from 'vue'
import {tt} from '../data/test'

Vue.use(VueViewer)


export default {


    components : {
        ClipLoader
    },


    data() {
        return {
            topic : {},
            // topic  : tt,
            loading: true,
            size: "50px",
        };
    },


    mounted(){
        console.log(this.$route.query.q)
    },


    watch: {
        '$route.query': '$fetch'
    },

    async fetch() {
        var dd = await this.$axios.post("/api/topic", {
            topic_url : this.$route.query.q,
        });

        this.topic = await dd.data

    },


};
</script>



<style  >


    /* links in topic header */
    .topic_detail .body a {
        color: green;
        text-decoration: underline;
    }


    /* images in topic header */
    /* .topic_detail .topic_images img{
        object-fit: contain;
        flex-basis: 47%;
        flex-grow: 1;
    } */


    /* hide images in replies */
    .reply .reply_body p img{
        display: none;
    }


   /* hide the first link in quote which is the username, because it has been extracted */
   .reply_with_quote .quote a:first-child::after{
        display: none;
   }

</style>



