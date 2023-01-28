<template>
    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content flex-1" style="overflow: hidden">
            <!-- header -->
            <Header></Header>

            <!-- custom div -->
            <div  class="w-full lg:w-5/6 mx-auto h-full flex  justify-center lg:flex">

                <!-- desktop nav -->
                <div class="w-3/12 h-full rounded-md p-3 hidden lg:block">
                    <DesktopSideMenu />
                </div>

                <!-- page content -->
                <smooth-scrollbar class="flex-1">
                    <Nuxt
                        keep-alive
                        class="flex-1 h-full p-4 lg:overflow-auto "
                    />
                </smooth-scrollbar>

                <div  class=" w-3/12 h-4/5 pl-3  hidden lg:block">
                    <About />
                </div>

            </div>
        </div>

        <!-- drawer side -->
        <div class="drawer-side">
            <label for="my-drawer" class="drawer-overlay"></label>

            <!-- side menu -->
            <SideMenu />
        </div>
    </div>
</template>

<script>
import Vue from "vue";
import SmoothScrollbar from "vue-smooth-scrollbar";
Vue.use(SmoothScrollbar);

export default {};
</script>



<style>
</style>
