<template>
    <Section :section="section" :topic_url="topic_url"></Section>
</template>

<script>
export default {
    layout: "general",
    data() {
        return {
            section: this.$route.params.section,
        };
    },
    head: {
        title: "Nairaland -- General",
    },

    computed: {
        topic_url() {
            return "/general/" + this.$data.section + "/t?q=";
        },
    },
};
</script>
