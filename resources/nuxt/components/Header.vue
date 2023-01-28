<template>


    <div class="navbar bg-white    shadow " >

        <!-- toggle drawer -->
        <div class="flex-none font-bold lg:hidden text-green-900">
            <label for="my-drawer" class="btn btn-square btn-ghost  drawer-button">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="inline-block w-5 h-5 stroke-current"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    ></path>
                </svg>
            </label>
        </div>

        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-2xl  font-bold  font-sans">Nairaland</a>
        </div>



        
    </div>


</template>



<style scoped>
    .navbar {
        height: 60px !important;
        max-height: 30px;
    }
</style>
