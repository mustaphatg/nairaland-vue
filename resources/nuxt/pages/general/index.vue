<template>
    <div>
        <!-- general index page
        I will work on the the front page of each main section
        general, enterainment and science -->
    </div>
</template>


<script>
export default {
    
    layout : 'general',

    mounted(){
        // redirect(200, 'politics')
        this.$router.push('/general/politics')
    }

}
</script>