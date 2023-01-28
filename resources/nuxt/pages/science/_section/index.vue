<template>
       <Section :section="section" :topic_url="topic_url"></Section>
   
</template>


<script>
export default {

    layout : 'science',

    head : {
        title : 'Science'
    },

     data(){
        return {
            section : this.$route.params.section
        }
    },

     computed : {

        topic_url(){
            return "/science/" + this.$data.section + "/t?q="
        }
    }
}
</script>