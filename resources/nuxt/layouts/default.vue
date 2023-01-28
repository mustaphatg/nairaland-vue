<template>
    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content flex-1" style="overflow: hidden">
            <!-- header -->
            <Header></Header>

            <!-- custom div -->
            <div class="w-full h-full flex lg:flex ">
                <!-- desktop nav -->
                <div
                    class="w-3/12 border-r-2 h-full border-b-2 rounded-md p-4 hidden lg:block"
                >
                    <DesktopSideMenu />
                </div>

                <!-- page content -->
                <smooth-scrollbar class="flex-1">
                    <Nuxt
                        keep-alive keep-alive-props="{ max: 10 }"
                        class="flex-1 h-full p-4 lg:overflow-auto overflow-scroll"
                    />
                </smooth-scrollbar>
            


                <div  class=" w-3/12 h-4/5 pl-3  hidden lg:block">
                    <About></About>
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



