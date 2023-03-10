




<div class="h-screen space-y-2 transition-all duration-300 bg-gray-900"
 x-bind:class="{'w-64':$store.sidebar.full, 'w-64 sm:w-20':!$store.sidebar.full,'top-0 left-0':$store.sidebar.navOpen,'top-0 -left-64 sm:left-0':!$store.sidebar.navOpen}">

<h1 class="py-4 font-black text-white"
    x-bind:class="$store.sidebar.full ? 'text-2xl px-4' : 'px-2 xm:px-2 text-[12px] text-center'">Command Center</h1>

    <!-- SideBar Toggle -->
    <button @click="$store.sidebar.full = !$store.sidebar.full"
            class="absolute hidden p-2 bg-gray-900 rounded-full shadow-md sm:block focus:outline-none -right-3 top-10">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4 text-white transition-all duration-300 transform"
             x-bind:class="$store.sidebar.full ? 'rotate-90':'-rotate-90 '"
             viewBox="0 0 20 20"
             fill="currentColor">
            <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd" />
        </svg>
    </button>


<div class="px-4 space-y-2">


    <!-- Home -->
    <div x-data="tooltip"
         x-on:mouseover="show = true"
         x-on:mouseleave="show = false"
         @click="$store.sidebar.active = 'home' "
         class="relative flex items-center p-2 space-x-2 rounded-md cursor-pointer hover:text-gray-200 hover:bg-gray-800"
         x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'home','text-gray-400 ':$store.sidebar.active != 'home'}">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-6 h-6"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <h1 x-cloak
            x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
            Dashboard</h1>
    </div>

    <!-- Audience -->
    <div x-data="dropdown"
         class="relative">
        <!-- Dropdown head -->
        <div @click="toggle('audience')"
             x-data="tooltip"
             x-on:mouseover="show = true"
             x-on:mouseleave="show = false"
             class="flex items-center justify-between p-2 space-x-2 text-gray-400 rounded-md cursor-pointer hover:text-gray-200 hover:bg-gray-800"
             x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full, 'text-gray-200 bg-gray-800':$store.sidebar.active == 'audience','text-gray-400 ':$store.sidebar.active != 'audience'}">
            <div class="relative flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <h1 x-cloak
                    x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
                    Audience</h1>
            </div>
            <svg x-cloak x-bind:class="$store.sidebar.full ? '':'sm:hidden'"
                 xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 viewBox="0 0 20 20"
                 fill="currentColor">
                <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
            </svg>
        </div>
        <!-- Dropdown content -->
        <div x-cloak x-show="open"
             @click.outside="open =false"
             x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
             class="space-y-3 text-gray-400 ">
            <h1 class="cursor-pointer hover:text-gray-200">Item 1</h1>
            <h1 class="cursor-pointer hover:text-gray-200">Item 2</h1>
            <h1 class="cursor-pointer hover:text-gray-200">Item 3</h1>
            <h1 class="cursor-pointer hover:text-gray-200">Item 4</h1>
        </div>
    </div>

    <!-- Posts -->
    <div @click="$store.sidebar.active = 'posts' "
         x-data="tooltip"
         x-on:mouseover="show = true"
         x-on:mouseleave="show = false"
         class="relative flex items-center justify-between p-2 space-x-2 text-gray-400 rounded-md cursor-pointer hover:text-gray-200 hover:bg-gray-800"
         x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'posts','text-gray-400 ':$store.sidebar.active != 'posts'}">
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h1 x-cloak
                x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
                Posts</h1>
        </div>
        <h1 x-cloak x-bind:class="$store.sidebar.full ? '' :'sm:hidden'"
            class="w-5 h-5 p-1 text-sm leading-3 text-center text-gray-900 bg-green-400 rounded-sm">8</h1>
    </div>

    <!-- Schedules -->
    <div @click="$store.sidebar.active = 'home' "
         x-data="tooltip"
         x-on:mouseover="show = true"
         x-on:mouseleave="show = false"
         class="relative flex items-center justify-between p-2 space-x-2 text-gray-400 rounded-md cursor-pointer hover:text-gray-200 hover:bg-gray-800"
         x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'schedules','text-gray-400 ':$store.sidebar.active != 'schedules'}">
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <h1 x-cloak
                x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
                Schedules</h1>
        </div>
        <div x-cloak x-bind:class="$store.sidebar.full ? '':'sm:hidden'"
             class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="1"
                      d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h1 class="w-5 h-5 p-1 text-sm leading-3 text-center text-gray-900 bg-pink-400 rounded-sm">3
            </h1>

        </div>
    </div>

    <!-- Income -->
    <div x-data="dropdown"
         class="relative">
        <!-- Dropdown head -->
        <div @click="toggle('income')"
             x-data="tooltip"
             x-on:mouseover="show = true"
             x-on:mouseleave="show = false"
             class="flex items-center justify-between p-2 space-x-2 text-gray-400 rounded-md cursor-pointer hover:text-gray-200 hover:bg-gray-800"
             x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'income','text-gray-400 ':$store.sidebar.active != 'income'}">
            <div class="relative flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                </svg>
                <h1 x-cloak
                    x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
                    Income</h1>
            </div>
            <svg x-cloak x-bind:class="$store.sidebar.full ? '':'sm:hidden'"
                 xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 viewBox="0 0 20 20"
                 fill="currentColor">
                <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
            </svg>
        </div>
        <!-- Dropdown content -->
        <div x-cloak x-show="open"
             @click.outside="open=false"
             x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
             class="space-y-3 text-gray-400">
            <h1 class="cursor-pointer hover:text-gray-200">Item 1</h1>
            <h1 class="cursor-pointer hover:text-gray-200">Item 2</h1>
            <!-- Sub Dropdown  -->
            <div x-data="sub_dropdown"
                 class="relative w-full ">
                <div @click="sub_toggle()"
                     class="flex items-center justify-between cursor-pointer">
                    <h1 class="cursor-pointer hover:text-gray-200">Item 3</h1>
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-4 h-4"
                         viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd" />
                    </svg>
                </div>
                <div x-show="sub_open"
                     @click.outside="sub_open = false"
                     x-bind:class="$store.sidebar.full ? sub_expandedClass:sub_shrinkedClass">
                    <h1 class="cursor-pointer hover:text-gray-200 ">Sub Item 1</h1>
                    <h1 class="cursor-pointer hover:text-gray-200 ">Sub Item 2</h1>
                    <h1 class="cursor-pointer hover:text-gray-200 ">Sub Item 3</h1>
                </div>
            </div>
            <h1 class="cursor-pointer hover:text-gray-200">Item 4</h1>
        </div>
    </div>

    <!-- Promote -->
    <div x-data="dropdown"
         class="relative">
        <!-- Dropdown head -->
        <div @click="toggle('promote')"
             x-data="tooltip"
             x-on:mouseover="show = true"
             x-on:mouseleave="show = false"
             class="flex items-center justify-between p-2 space-x-2 text-gray-400 rounded-md cursor-pointer hover:text-gray-200 hover:bg-gray-800"
             x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'promote','text-gray-400 ':$store.sidebar.active != 'promote'}">
            <div class="relative flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                </svg>
                <h1 x-cloak
                    x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
                    Promote</h1>
            </div>
            <svg x-cloak x-bind:class="$store.sidebar.full ? '':'sm:hidden'"
                 xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 viewBox="0 0 20 20"
                 fill="currentColor">
                <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
            </svg>
        </div>
        <!-- Dropdown content -->
        <div x-cloak x-show="open"
             @click.outside="open=false"
             x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
             class="space-y-3 text-gray-400">
            <h1 class="cursor-pointer hover:text-gray-200">Item 1</h1>
            <h1 class="cursor-pointer hover:text-gray-200">Item 2</h1>
            <h1 class="cursor-pointer hover:text-gray-200">Item 3</h1>
            <h1 class="cursor-pointer hover:text-gray-200">Item 4</h1>
        </div>
    </div>

    <!-- Home -->
    <div x-data="tooltip"
    x-on:mouseover="show = true"
    x-on:mouseleave="show = false"
    @click="$store.sidebar.active = 'mode' "
    class="relative flex items-center p-2 space-x-2 rounded-md cursor-pointer hover:text-gray-200 hover:bg-gray-800"
    x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'mode','text-gray-400 ':$store.sidebar.active != 'mode'}">
   <svg xmlns="http://www.w3.org/2000/svg"
        class="w-6 h-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor">
       <path stroke-linecap="round"
             stroke-linejoin="round"
             stroke-width="2"
             d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
   </svg>
   <h1 x-cloak
       x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
       Dark Mode</h1>
</div>                
    
</div>
</div>



