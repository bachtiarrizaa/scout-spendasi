<x-navbar></x-navbar>
<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-2 mx-auto">
            <div class="flex justify-between items-center">
                <div class="text-left">
                    <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">Artikel Scout Spendasi</h1>
                </div>
                <div>
                    <form class="flex items-center space-x-2">
                        <input 
                            type="text" 
                            class="px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"
                            placeholder="Search...">
                        <button 
                            type="submit" 
                            class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            Search
                        </button>
                    </form>
                </div>
            </div>
    
            <div class="grid grid-cols-1 gap-8 mt-4 md:mt-8 md:grid-cols-2 xl:grid-cols-4">
                <!-- Konten blog -->
                <div>
                    <div class="relative">
                        <img class="object-cover object-center w-full h-64 rounded-lg lg:h-40" src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
    
                        <div class="absolute bottom-0 flex p-3 bg-white dark:bg-gray-900 ">
                            <img class="object-cover object-center w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
    
                            <div class="mx-4">
                                <h1 class="text-sm text-gray-700 dark:text-gray-200">Tom Hank</h1>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Creative Director</p>
                            </div>
                        </div>
                    </div>
    
                    <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                        What do you want to know about UI
                    </h1>
    
                    <hr class="w-32 my-4 text-blue-500">
    
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores
                        praesentium, alias nam? Tempore
                    </p>
    
                    <a href="#" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Read more</a>
                </div>
    
                <!-- Konten blog lainnya -->
                <div>
                    <div class="relative">
                        <img class="object-cover object-center w-full h-64 rounded-lg lg:h-40" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
    
                        <div class="absolute bottom-0 flex p-3 bg-white dark:bg-gray-900 ">
                            <img class="object-cover object-center w-10 h-10 rounded-full"src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"alt="">
    
                            <div class="mx-4">
                                <h1 class="text-sm text-gray-700 dark:text-gray-200">arthur melo</h1>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Creative Director</p>
                            </div>
                        </div>
                    </div>
    
                    <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                        All the features you want to know
                    </h1>
    
                    <hr class="w-32 my-4 text-blue-500">
    
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores
                        praesentium, alias nam? Tempore
                    </p>
    
                    <a href="#" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Read more</a>
                </div>
    
                <div>
                    <div class="relative">
                        <img class="object-cover object-center w-full h-64 rounded-lg lg:h-40" src="https://images.unsplash.com/photo-1597534458220-9fb4969f2df5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" alt="">
    
                        <div class="absolute bottom-0 flex p-3 bg-white dark:bg-gray-900 ">
                            <img class="object-cover object-center w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">
    
                            <div class="mx-4">
                                <h1 class="text-sm text-gray-700 dark:text-gray-200">Amelia. Anderson</h1>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
                            </div>
                        </div>
                    </div>
    
                    <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                        Which services you get from Meraki UI
                    </h1>
    
                    <hr class="w-32 my-4 text-blue-500">
    
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores
                        praesentium, alias nam? Tempore
                    </p>
    
                    <a href="#" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Read more</a>
                </div>
                
                <div>
                    <div class="relative">
                        <img class="object-cover object-center w-full h-64 rounded-lg lg:h-40" src="https://images.unsplash.com/photo-1597534458220-9fb4969f2df5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" alt="">
    
                        <div class="absolute bottom-0 flex p-3 bg-white dark:bg-gray-900 ">
                            <img class="object-cover object-center w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">
    
                            <div class="mx-4">
                                <h1 class="text-sm text-gray-700 dark:text-gray-200">Amelia. Anderson</h1>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
                            </div>
                        </div>
                    </div>
    
                    <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                        Which services you get from Meraki UI
                    </h1>
    
                    <hr class="w-32 my-4 text-blue-500">
    
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores
                        praesentium, alias nam? Tempore
                    </p>
    
                    <a href="#" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Read more</a>
                </div>
                
            </div>
        </div>
        <div class="flex justify-center">
            <x-paginate></x-paginate>
        </div>        
    </section>
</x-layout>
