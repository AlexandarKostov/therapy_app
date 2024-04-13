<x-app-layout>
@section('hero')
        <section class=" bg-green-500ray-50 pb-24 relative z-30">
            <div class="mx-auto   ">
                <div class="relative z-40 container mx-auto h-full       lg:px-8">
                    <div class="px-4 py-4      lg:px-8 lg:pt-20">
                        <div class="grid gap-10 lg:grid-cols-2 mx-24">
                            <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">

                                <div class="max-w-xl mb-6">
                                    <h2 class="max-w-lg mb-6   font-sans text-6xl font-bold       leading-normal">
                                        Key Services <br> We Serve
                                    </h2>

                                </div>
                                <div>
                                    <p class="inline-flex items-center justify-start w-full font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                                        Chat, Video with a counselor who understands. Your help is just one message away.
                                    </p>
                                </div>
                                <div class="my-4">
                                    <button class="text-white bg-black hover:bg-black-800 focus:ring-4 focus:ring-black-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-black-600 dark:hover:bg-black-700 focus:outline-none dark:focus:ring-black-800">
                                        Try Online Therapy
                                    </button>
                                </div>
                                <div class="px-3">
                                    <img class="object-cover rounded  sm:hbg-green-500ray-50-64 "
                                         src="{{asset('bg-images/certified-about.webp')}}"
                                         alt="">
                                </div>
                            </div>
                            <div class="flex items-center justify-center w-full   -mx-4 lg:pl-10">
                                <div class="flex flex-col items-end px-3">
                                    <img class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
                                         src="{{asset('bg-images/service-1.jpg')}}"
                                         alt="">
                                    <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40"
                                         src="{{asset('bg-images/service-2.jpg')}}"
                                         alt="">
                                </div>
                                <div class="px-3">
                                    <img class="object-cover w-40 h-40 rounded shadow-lg sm:hbg-green-500ray-50-64 xl:h-80 sm:w-full xl:w-80"
                                         src="{{asset('bg-images/service-3.jpg')}}"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-4 gap-2 mx-24">
                        @include('accesco-medical.service.partials.service-options')
                    </div>
                </div>
            </div>
            <div class="lg:text-[250px] varien absolute top-8 left-24 text-green-500/5  z-0    ">
                Accesco.co
            </div>
        </section>
        <!-- ====== About Section Start -->
        <section
            class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-white dark:bg-dark"
        >
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center justify-between -mx-4">
                    <div class="w-full px-4 lg:w-6/12">
                        <div class="flex items-center -mx-3 sm:-mx-4">
                            <div class="w-full px-3 sm:px-4 xl:w-1/2">

                                <div class="py-3 sm:py-4">
                                    <img
                                        src="{{asset('bg-images/service-6.jpg')}}"
                                        alt=""
                                        class="w-full rounded-2xl"
                                    />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                <div class="relative z-10 my-4">
                                    <img
                                        src="{{asset('bg-images/service-4.jpg')}}"
                                        alt=""
                                        class="w-full rounded-2xl"
                                    />
                                    <span class="absolute -right-7 -bottom-7 z-[-1]">
                     </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                        <div class="mt-10 lg:mt-0">
               <span class="block mb-4 text-lg font-semibold text-primary">
               Text therapy: Support at your fingertips
               </span>
                            <h2
                                class="mb-5 text-3xl font-bold text-dark dark:text-black sm:text-[40px]/[48px]"
                            >
                                Chat with a counselor who understands. Your help is just one message away.


                            </h2>
                            <p class="mb-5 text-base text-black dark:text-dark-6">
                                Intelligent counselor-matching process
                                Get replies from your counselor during their business hours
                                Private and encrypted therapy chatroom
                                Try online therapy
                            </p>
                            <p class="mb-8 text-base text-body-color dark:text-dark-6">
                                Therapy at your own pace:
                                No need to wait for an appointment.


                                Accessible anywhere:
                                Get help anywhere you are, as long as you have your phone.


                                Cost-effective:
                                No per-session pricing, just a flat monthly fee for unlimited texting.


                                Resource-rich platform:
                                Easy-to-follow tips and exercises to boost your mental well-being.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="overflow-hidden bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base font-semibold leading-7 text-indigo-600">Calmerry video chat therapy: support that feels personal</h2>
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Get the help you need through a private digital chatroom from the comfort of your home. Like traditional therapy but better.</p>
                            <p class="mt-6 text-lg leading-8 text-gray-600">What is video therapy?</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        Video therapy
                                    </dt>
                                    <dd class="inline">
                                        is just like traditional therapy, the only
                                        difference being that it’s conducted over a
                                        video session instead of in the counselor’s office. If you’ve ever been on a Zoom call,
                                        the experience will feel strikingly similar!
                                        </dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        Online therapy
                                    </dt>
                                    <dd class="inline">
                                        has been proven to be as effective as in-person therapy,
                                        so you’re not sacrificing quality by choosing this option.
                                        In fact, you may find the experience a lot more enjoyable
                                        as you don’t have to spend time getting to the office, waiting for an appointment,
                                        or even wearing pants!
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img src="{{asset('bg-images/service-5.jpg')}}"
                         alt="Product screenshot"
                         class="w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10"
                         width="2432"
                         height="1442">
                </div>
            </div>
        </div>
        <div class="overflow-hidden bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <img src="{{asset('bg-images/service-7.jpg')}}"
                         alt="Product screenshot"
                         class="w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10"
                         width="2432"
                         height="1442">
                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base font-semibold leading-7 text-indigo-600">Depression therapy from licensed counselors</h2>
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                                Feeling down, hopeless, isolated, and find no pleasure in things you once enjoyed?
                                Learn coping skills to manage depressive thoughts and feelings!Start depression therapy feeling happier and more empowered!
                            </p>
                            <p class="mt-6 text-lg leading-8 text-gray-600">Depression is a serious mood disorder that affects how you feel, think, carry out daily activities, and interact with other people.
                                The good news is that depression is highly treatable. With the right depression help and support, you can get better and make a full recovery.</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                       Depression
                                    </dt>
                                    <dd class="inline">
                                        Make the first step to feeling better at our platform. Here you’ll find support and tools you need to be happier. Our network has many experienced depression counselors. After you complete a survey, choose a subscription plan, and make a payment, we’ll connect you with a licensed depression therapist.

                                        Your therapist will send you a message to schedule an introductory session where you’ll set long-term therapy goals and short-term objectives. They will develop a personalized treatment plan and will guide you during the depression therapy process to help you take back control of your life.
                                    </dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        Depression therapy can help you
                                    </dt>
                                    <dd class="inline">
                                        Re-frame your thinking
                                        Develop self-awareness
                                        Learn to set realistic goals for your life
                                        Find better ways to cope and solve problems
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5">
            <div class="w-full">
                <div class="flex flex-col w-full mb-10 sm:flex-row">
                    <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                        <div class="relative h-full ml-0 mr-0 sm:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-500 rounded-lg"></span>
                            <div class="relative h-full p-5 bg-white border-2 border-indigo-500 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Feel Calm With Self Esteem Therapy</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-indigo-500 uppercase">------------</p>
                                <p class="mb-2 text-gray-600">
                                    Self-esteem is an important aspect of our spiritual and emotional life.
                                    When people doubt and criticize themselves pretty often and always put other people’s needs before their personal ones,
                                    it means a person has low self-esteem and needs professional treatment.
                                    Our qualified therapy team will help you work on yourself and change your self-esteem for the better.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2">
                        <div class="relative h-full ml-0 md:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"></span>
                            <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Be you, freely: LGBTQIA2S+ online therapy</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase">------------</p>
                                <p class="mb-2 text-gray-600">Being LGBTQIA2S+ comes with its challenges – societal judgment,
                                    identity struggles, or mental health issues like depression and anxiety.
                                    You’re not alone, and you deserve support.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full mb-5 sm:flex-row">
                    <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                        <div class="relative h-full ml-0 mr-0 sm:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"></span>
                            <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Individual relationship counseling</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-blue-400 uppercase">------------</p>
                                <p class="mb-2 text-gray-600">Whether it’s trust issues, communication gaps, or emotional disconnection,
                                    relationship problems can take a toll on your mental well-being. And sometimes, what you need is a fresh perspective.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                        <div class="relative h-full ml-0 mr-0 sm:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-yellow-400 rounded-lg"></span>
                            <div class="relative h-full p-5 bg-white border-2 border-yellow-400 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Online grief counseling – the support you need in the palm of your hand</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-yellow-400 uppercase">------------</p>
                                <p class="mb-2 text-gray-600">Don’t let the grief consume you. Find comfort and understanding through professional grief counseling from your home.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2">
                        <div class="relative h-full ml-0 md:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                            <div class="relative h-full p-5 bg-white border-2 border-green-500 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Therapy for Anxiety Disorders</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-green-500 uppercase">------------</p>
                                <p class="mb-2 text-gray-600">Is your life filled with tension and worries?
                                    Are you feeling restless, nervous, and can’t get rid of uncontrollable, obsessive thoughts? Learn coping skills to challenge negative anxious thinking.
                                    Start anxiety therapy to regain control of your life and feel happier.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center my-4">
                    <a href="#" class="text-white bg-black hover:bg-black-800 focus:ring-4 focus:ring-black-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-black-600 dark:hover:bg-black-700 focus:outline-none dark:focus:ring-black-800">
                        Try Online Therapy
                    </a>
                </div>
            </div>
        </div>
        <!-- source:https://tailwind.besoeasy.com -->

        <section class="relative overflow-hidden bg-white">
            <div class="mt-2 md:mt-0 py-12 pb-6 sm:py-16 lg:pb-24 overflow-hidden">
                <div class="text-center">
                    <p class="text-sm font-bold uppercase tracking-widest text-gray-700">How It Works</p>
                    <h2 class="mt-6 text-3xl font-bold tracking-tight text-black sm:text-4xl lg:text-5xl">
                        Your help is just a few steps away
                    </h2>
                </div>
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 relative">
                    <div class="relative mt-12 lg:mt-20">
                        <div class="absolute inset-x-0 hidden xl:px-44 top-2 md:block md:px-20 lg:px-28">
                            <svg class="w-full" xmlns="http://www.w3.org/2000/svg" width="875" height="48" viewBox="0 0 875 48"
                                 fill="none">
                                <path
                                    d="M2 29C20.2154 33.6961 38.9915 35.1324 57.6111 37.5555C80.2065 40.496 102.791 43.3231 125.556 44.5555C163.184 46.5927 201.26 45 238.944 45C312.75 45 385.368 30.7371 458.278 20.6666C495.231 15.5627 532.399 11.6429 569.278 6.11109C589.515 3.07551 609.767 2.09927 630.222 1.99998C655.606 1.87676 681.208 1.11809 706.556 2.44442C739.552 4.17096 772.539 6.75565 805.222 11.5C828 14.8064 850.34 20.2233 873 24"
                                    stroke="#D4D4D8" stroke-width="3" stroke-linecap="round" stroke-dasharray="1 12" />
                            </svg>
                        </div>
                        <div
                            class="relative grid grid-cols-1 text-center gap-y-8 sm:gap-y-10 md:gap-y-12 md:grid-cols-3 gap-x-12">
                            <div>
                                <div
                                    class="flex items-center justify-center w-16 h-16 mx-auto bg-white dark:bg-blue-600 border-2 border-blue-600 dark:border-blue-600 rounded-full shadow">
                                    <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">1</span>
                                </div>
                                <p class="mt-3 sm:mt-4 text-base text-gray-600 dark:text-gray-400">
                                    Pick your
                                    plan
                                </p>
                            </div>
                            <div>
                                <div
                                    class="flex items-center justify-center w-16 h-16 mx-auto bg-white dark:bg-green-300 border-2 border-green-300 dark:border-green-300 rounded-full shadow">
                                    <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">2</span>
                                </div>
                                <p class="mt-3 sm:mt-4 text-base text-gray-600 dark:text-gray-400">
                                    Start your
                                    therapy journey
                                </p>
                            </div>
                            <div>
                                <div
                                    class="flex items-center justify-center w-16 h-16 mx-auto bg-white dark:bg-green-500 border-2 border-green-500 dark:border-green-500 rounded-full shadow">
                                    <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">3</span>
                                </div>
                                <p class="mt-3 sm:mt-4 text-base text-gray-600 dark:text-gray-400">
                                    See
                                    the results
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-10">
                        <h2 class="mt-6 text-3xl font-bold tracking-tight text-black sm:text-4xl lg:text-5xl">
                            Don’t be alone. Find help you need.
                        </h2>
                        <div class="flex justify-center my-4">
                            <a href="#" class="text-white bg-black hover:bg-green-600 focus:ring-4 focus:ring-green-600 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-600 focus:outline-none dark:focus:ring-green-600">
                                Start your therapy journey
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
