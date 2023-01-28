<template>
    <Section :section="section" :topic_url="topic_url" ></Section>
</template>

<script>
export default {
    layout: "entertainment",

    head: {
        title: "Entertainment",
    },

    data() {
        return {
            section: this.$route.params.section,
        };
    },

    computed : {

        topic_url(){
            return "/entertainment/" + this.$data.section + "/t?q="
        }
    }
};
</script>
