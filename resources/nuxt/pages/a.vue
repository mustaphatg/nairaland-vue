<template>
    <div>
        <h3>how are you</h3>
        <p>it is {{nn}} </p>
    </div>
</template>



<script>

import numeral from 'numeral'

export default {
    
    layout : 'home_page',

    data(){
        return {
            nn : numeral(4325).format('0.0a')
        }
    },

    mounted(){
        fetch('/api/home')
        .then(r => r.json())
        .then(d => console.log(d))
    }

}
</script>