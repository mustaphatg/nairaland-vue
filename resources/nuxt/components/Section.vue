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
        <p v-if="$fetchState.error" class="text-red-900 font-bold text-center mt-10">An error occured while fetching this page !!!</p>



        <!-- topics -->
        <div>

            <NuxtLink :to="topic_url + topic.href" class="hover:shadow-md topic bg-white border  my-5 shadow rounded p-5 block" v-for="(topic, index) in topics" :key="index">
                <h3 class="m-3 mb-5 text-green-800 font-semibold hover:underline">{{topic.text}}</h3>

                <div class="flex mt-3  justify-center font-small text-zinc-800 font-mono">
                    <span class=" btn-ghost btn-sm"> Author: {{topic.creator}}</span>
                    <span class=" btn-ghost btn-sm"> {{topic.views}} views </span>
                    <span class=" btn-ghost btn-sm"> {{topic.replies}} replies</span>
                </div>
            </NuxtLink>

        </div>

    </div>
</template>





<script>
import ClipLoader from "vue-spinner/src/ClipLoader.vue";

export default {

    props : ['section', 'topic_url'],

    mounted(){
        console.log(this.topic_url)
    },

    components : {
        ClipLoader
    },

    data() {
        return {
            topics: [],
            loading: true,
            size: "50px",
        };
    },

    async fetch() {
        var dd = await this.$axios.post("/api/category", {
            name: this.$props.section,
        });

        this.topics = await dd.data

    },


};
</script>



