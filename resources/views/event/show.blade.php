<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Readers Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="relative">
                <div class="mx-auto max-w-7xl bg-white">
                    <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                        <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
                            viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                            <polygon points="0,0 90,0 50,100 0,100" />
                        </svg>
                        <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    <span class="block xl:inline">Readers Event</span>
                                </h1>
                                <p class="mt-6 text-lg leading-8 text-gray-600">Calling all book lovers to engage in lively discussions,
                                    and connect with fellow bibliophiles from around the world. Don't miss out on this opportunity to
                                    expand your literary horizons and embark on a journey of endless imagination.
                                    Sign up now and let the pages come alive!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                    <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full"
                        src="https://images.unsplash.com/photo-1610116306796-6fea9f4fae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                        alt="">
                </div>
            </div>


            <div class="overflow-hidden bg-white">
                <div class="px-4 py-6 sm:px-6">
                    <h3 class="text-lg font-medium leading-7 text-gray-900">Information</h3>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Event details</p>
                </div>
                <div class="border-t border-gray-100">
                    <dl class="divide-y divide-gray-100">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Name</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Weekly Readers Event</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">About</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Looking to explore the fascinating world of books? Join our
                                book readers community and embark on a literary journey like no other!
                                Discover captivating stories, engage in thought-provoking discussions,
                                and connect with fellow readers who share your passion for the written word.
                                Don't miss out on the opportunity to expand your literary horizons and immerse
                                 yourself in a world of imagination and knowledge. Sign up today
                                 and unlock a treasure trove of literary adventures!</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Location</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Colombo Public Library
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Contact hoster</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                chamith@gmail.com
                            </dd>
                        </div>

                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Registration Price</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Rs.10,000</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Reserve</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                <a href="{{ route('event.reservation', 1) }}" class="text-indigo-600 hover:text-indigo-900">
                                    Click here to reserve
                                </a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class="bg-white">
                <div class="px-6 pt-6">
                    <h3 class="text-lg font-medium leading-7 text-gray-900">Reviews</h3>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Event reviews</p>
                    <div class="mt-6 space-y-10 divide-y divide-gray-200 border-b border-t border-gray-200 pb-10">
                        <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
                            <div
                                class="lg:col-span-8 lg:col-start-5 xl:col-span-9 xl:col-start-4 xl:grid xl:grid-cols-3 xl:items-start xl:gap-x-8">
                                <div class="flex items-center xl:col-span-1">
                                    <div class="flex items-center">
                                        <!-- Active: "text-yellow-400", Inactive: "text-gray-200" -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm text-gray-700">5<span class="sr-only"> out of 5 stars</span>
                                    </p>
                                </div>

                                <div class="mt-4 lg:mt-6 xl:col-span-2 xl:mt-0">
                                    <h3 class="text-sm font-medium text-gray-900">BEST INDOOR EVENT EVER</h3>

                                    <div class="mt-3 space-y-6 text-sm text-gray-500">
                                        <p>I had an incredible experience attending the readers event.
                                            The organizers went above and beyond to make it memorable.
                                            The atmosphere was captivating, and the speakers were inspiring.</p>
                                        <p>The selection of books was outstanding,
                                            and I couldn't resist purchasing a few.
                                             The event left me feeling motivated and excited to dive into the world of literature.
                                              I highly recommend attending this event to fellow book lovers!</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="mt-6 flex items-center text-sm lg:col-span-4 lg:col-start-1 lg:row-start-1 lg:mt-0 lg:flex-col lg:items-start xl:col-span-3">
                                <p class="font-medium text-gray-900">Thisok M</p>
                                <time datetime="2021-01-06"
                                    class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">May
                                    16, 2021</time>
                            </div>
                        </div>
                    </div>
                    <div class="pt-5">
                        <h3 class="text-lg font-medium leading-7 text-gray-900">Post A Review</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Write about your experince during your stay</p>
                        <form action="#" class="relative bg-white pt-4">
                            <div
                                class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                                <label for="title" class="sr-only">Title</label>
                                <input type="text" name="title" id="title"
                                    class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0"
                                    placeholder="Title">
                                <label for="description" class="sr-only">Description</label>
                                <textarea rows="2" name="description" id="description"
                                    class="block w-full resize-none border-0 py-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Write a description..."></textarea>

                                <!-- Spacer element to match the height of the toolbar -->
                                <div aria-hidden="true">
                                    <div class="py-2">
                                        <div class="h-9"></div>
                                    </div>
                                    <div class="h-px"></div>
                                    <div class="py-2">
                                        <div class="py-px">
                                            <div class="h-9"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="flex  space-x-3 border-t border-gray-200 py-2">
                                <div class="flex-shrink-0">
                                    <button type="submit"
                                        class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>



        </div>

    </div>
</x-app-layout>
