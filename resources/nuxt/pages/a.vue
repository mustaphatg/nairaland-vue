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
    }

}
</script>