@extends('layouts.app')
@section('content')
    <section class="md:pt-16 md:my-0" style="max-height: 860px;">
        <div class="container mx-auto items-center flex flex-col md:flex-row-reverse">
            <img src="/images/laravel_vue.svg"
                 alt="fundraising illustration"
                 class="w-full mt-48 md:w-6/12 md:mt-0 px-2 mx-2"
                 style="max-height: 860px;">
            <div class="w-full md:w-6/12 px-2">
                <div class="pt-16 md:pt-32"><h2 class="font-semibold text-4xl text-gray-700">
                        Solomon Antoine
                    </h2>
                    <p class="mt-4 text-lg leading-relaxed text-gray-600">
                        I am a full stack developer with experience in a variety of technologies
                        such as: Laravel, VueJS, Angular 2+, Ionic Native and more!
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Project Portfolio
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-red-700 bg-red-100 hover:text-red-600 hover:bg-red-50 focus:outline-none focus:shadow-outline-red focus:border-red-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Work History
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 my-16 bg-gray-50 overflow-hidden lg:py-24 bg-gray-100">
        <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-screen-xl">
            <svg class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-1/4" width="404"
                 height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)"/>
            </svg>

            <div class="relative">
                <h3 class="text-center text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Work History
                </h3>
                <p class="mt-4 max-w-3xl mx-auto text-center text-xl leading-7 text-gray-500">
                    View a timeline of my current and past jobs & roles.
                </p>
            </div>

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-2">
                        <a href="https://www.askfavr.com" target="_blank">
                            <img class="relative mx-auto" width="300" src="{{asset('images/favr.png')}}"
                                 alt="Icodestuff logo"/>
                        </a>
                    </div>

                    <div class="lg:col-start-1">
                        <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                            Founder & CEO
                        </h4>
                        <h6 class="text-gray-600 font-light leading-5 my-1">Gigwerk (formerly FAVR) -
                            Minneapolis/Rochester, MN</h6>
                        <h6 class="text-gray-600 font-light leading-5 my-1">December 2017 - Present</h6>
                        <div class="mt-3 text-lg leading-7 text-gray-500">
                            Gigwerk, formerly known as FAVR, started as a two sided marketplace where customers could
                            request to have chores by a high school/college aged worker. However, we transitioned to a
                            B2B SAAS company that essentially bridges businesses looking to employ gig workers, as well
                            as for gig workers looking for temporary work opportunities (gigs).
                        </div>
                    </div>
                </div>
            </div>

            <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404"
                 height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"/>
            </svg>

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                        <a href="https://www.nerdery.com/" target="_blank">
                        <img class="relative mx-auto" width="300" src="{{asset('images/nerdery.png')}}"
                             alt="Nerdery logo"/>
                        </a>
                    </div>

                    <div class="lg:col-start-2">
                        <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                            Software Engineer
                        </h4>
                        <h6 class="text-gray-600 font-light leading-5 my-1">Nerdery - Bloomington, MN</h6>
                        <h6 class="text-gray-600 font-light leading-5 my-1">November 2019 - Present</h6>
                        <p class="mt-3 text-lg leading-7 text-gray-500">
                            I, along with other developers, am responsible for developing and servicing our client
                            Purina. I work with Drupal to consistently deliver stakeholder requirements. Prior to
                            Purina, I worked on the project team servicing Petfinder, where I used Symfony on a daily
                            basis to develop for their public API.
                        </p>
                    </div>
                </div>
            </div>

            <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404"
                 height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"/>
            </svg>

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-2">
                        <a href="https://www.youtube.com/channel/UCBZ2iNYgoDhqmXIXoZ-peZQ/videos?view=0&sort=p&flow=grid" target="_blank">
                        <img class="relative mx-auto" width="300" src="{{asset('images/icodestuff.png')}}"
                             alt="Icodestuff logo"/>
                        </a>
                    </div>

                    <div class="lg:col-start-1">
                        <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                            Founder & Teacher
                        </h4>
                        <h6 class="text-gray-600 font-light leading-5 my-1">Icodestuff - Rochester, MN</h6>
                        <h6 class="text-gray-600 font-light leading-5 my-1">May 2018 - Present</h6>
                        <p class="mt-3 text-lg leading-7 text-gray-500">
                            I am responsible for delivering screencast tutorials to Youtube on a variety of developer
                            topics. I have more than 15 videos teaching Laravel, ExpressJS, and React topics. The
                            channel currently has approximately 30,000 total views.
                        </p>
                    </div>
                </div>
            </div>

            <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404"
                 height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"/>
            </svg>

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                        <a href="https://www.guns.com" target="_blank">
                        <img class="relative mx-auto" width="300" src="{{asset('images/gdc.png')}}"
                             alt="Guns.com logo"/>
                        </a>
                    </div>

                    <div class="lg:col-start-2">
                        <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                            Software Engineer
                        </h4>
                        <h6 class="text-gray-600 font-light leading-5 my-1">Guns.com - Bursville, MN</h6>
                        <h6 class="text-gray-600 font-light leading-5 my-1">June 2018 - February 2019</h6>
                        <p class="mt-3 text-lg leading-7 text-gray-500">
                            I was responsible for managing and integrating point of sale systems such as NCRCounterpoint
                            and Bravo into a Laravel and Magento based ecommerce platform. The primary technologies I
                            worked with were, Laravel, Magento, Symfony and Azure.
                        </p>
                    </div>
                </div>
            </div>

            <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404"
                 height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"/>
            </svg>

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-2">
                        <a href="http://area10labs.com/" target="_blank">
                        <img class="relative mx-auto" width="300" src="{{asset('images/area10.png')}}"
                             alt="area 10 labs"/>
                        </a>
                    </div>

                    <div class="lg:col-start-1">
                        <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                            Software Intern
                        </h4>
                        <h6 class="text-gray-600 font-light leading-5 my-1">Area 10 Labs - Rochester, MN</h6>
                        <h6 class="text-gray-600 font-light leading-5 my-1">October 2017 - May 2018</h6>
                        <p class="mt-3 text-lg leading-7 text-gray-500">
                            At Area10, I had initially started work on implementing software for VR as well as work with
                            CAD
                            programs and 3D printing. However, as time progressed, I migrated to web development with
                            NodeJS
                            and PHP.
                        </p>
                    </div>
                </div>
            </div>


            <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404"
                 height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"/>
            </svg>
        </div>
    </section>

    <section class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Project Portfolio
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                    Below is a collection of open source projects, clients projects and screencasts I've done.
                </p>
            </div>
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden my-3">
                    <a href="https://packagist.org/packages/solomon04/documentation" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object-cover" src="{{asset('images/documenter.png')}}"
                                 alt="documenter logo"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Open Source Project
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    LaRecipe API Documentation Generator
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    This package allows you to create API documentation by utilizing PHP annotations and
                                    LaRecipe documentation. I created it because the original Laravel API Doc Generator
                                    was no longer compatible with newer Laravel versions.
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #laravel</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #composer</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden my-3">
                    <a href="https://packagist.org/packages/fountain/fountain-php" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object-cover" src="{{asset('images/fountain.png')}}"
                                 alt="Fountain logo"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Open Source Project
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Fountain PHP Package
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Fountain is an automated tracking system. I built a PHP library accessible via
                                    composer from their cURL library. We had used it temporarily for FAVR/Gigwerk but
                                    have since abandoned it.
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #laravel</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #composer</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden my-3">
                    <a href="https://www.youtube.com/watch?v=bcLKiG4lC2s&list=PLwFwUQbkQiPUpnUQzbbh4i0FPRr540dlW" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object-cover" src="{{asset('images/laravel-stripe.jpg')}}"
                                 alt="Fountain logo"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Screencast
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Integrating Stripe Express
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    In this six part tutorial series I teach how to integrate Stripe Express accounts
                                    with Laravel. Express accounts are a type of Stripe connect account and are
                                    generally used for two sided marketplaces where there is a seller selling services
                                    or a product and a buyer of those services/product. In this series I cover Laravel
                                    specific topics such as migrations, controllers, routing, etc.
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #laravel</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #stripe</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden my-3">
                    <a href="https://www.youtube.com/watch?v=F5XbrtU4fh0&list=PLwFwUQbkQiPVtBRpg30P4y1S-3HGF1pZb" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object-cover" src="{{asset('images/sendgrid.jpg')}}"
                                 alt="Sendgrid logo"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Screencast
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Sending Emails with Sendgrid
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    This is a two part tutorial series where I teach how to send emails with an
                                    ExpressJS backend and a React frontend using the Sendgrid API.
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #expressjs</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #react</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden my-3">
                    <a href="https://youtu.be/0Rk7eUT1WT4" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object-cover" src="{{asset('images/laravel-tools.jpg')}}"
                                 alt="larave logo"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Screencast
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Automatic Database Backup
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    In this tutorial I will teach how to backup a database using the Laravel command
                                    line interface via the "Spaite/Db-Dumper" PHP package.
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #laravel</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #mysql</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden my-3">
                    <a href="https://youtu.be/h7zyPTNC2bk" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object-cover" src="{{asset('images/laravel-twilio.png')}}"
                                 alt="twilio laravel logo"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Screencast
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Masking Phone Numbers via Twilio
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    In this tutorial I teach how to utilize Twilio masked phone numbers feature which is
                                    very useful in two sided marketplaces where you have a buyer and seller that need to
                                    communicate with each other without exposing sensitive data like phone numbers.
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #laravel</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #twilio</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <a href="https://lumen.askfavr.com/" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object-cover" src="{{asset('images/lumen.png')}}"
                                 alt="Fountain logo"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    FAVR
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Legacy API
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    The REST API was responsible for powering the FAVR mobile app. The API was built
                                    using Lumen, a Laravel microframework for building API’s. The application utilizes
                                    continuous integration & continuous delivery using CircleCI and PHPUnit (unit
                                    testing). The application is hosted on AWS Ubuntu & Apache EC2 server
                                </p>

                                <p class="mt-3 font-bold leading-6 text-gray-500">
                                    This application is now outdated and is being replaced.
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #laravel</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #lumen</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #phpunit</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #circleci</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <a href="https://apps.apple.com/us/app/favr-get-things-done/id1449477383" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object" src="{{asset('images/pwa.svg')}}"
                                 alt="Fountain logo"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    FAVR
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Ionic Native Hybrid App
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    The FAVR app was a hybrid app built using Ionic Native and Angular2+ which allowed
                                    us to deploy to the Apple App store, Google Play Store, and to the web as a
                                    progressive web app. The app allowed customers to request tasks like home chores or
                                    mowing at their own price while having a freelancer in their community complete the
                                    job for them.
                                </p>

                                <p class="mt-3 font-bold leading-6 text-gray-500">
                                    This application is now outdated and is being removed.
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #angular</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #ionic</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #capacitor</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #cordova</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <a href="https://dev-fundraising.askfavr.com/" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object" src="{{asset('images/savings.svg')}}"
                                 alt="Fountain logo"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    FAVR
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Fundraising Dashboard
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    This FAVR app was a fundraising application for organizations like churches or
                                    schools looking to raise funds by doing services like chores or lawn work. The
                                    application was built using a Creative Tim template. The dashboard allows admins to
                                    add users, manage jobs, view statistics, etc.
                                </p>

                                <p class="mt-3 font-bold leading-6 text-gray-500">
                                    This application is now outdated and is being removed.
                                    username: antoinesolomon5@gmail.com password: secret
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #angular</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #protactor</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #s3</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #cloudfront</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <a href="https://orangerosedistrpopup.com/" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object" src="{{asset('images/popup.png')}}"
                                 alt="Orange Rose example"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Client Project
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Orange Rose Popup Store
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Orange Rose allows organizations to start fundraisers
                                    by giving each member their own popup shop. Members can
                                    share their popup stores and have people purchase from their
                                    store while keeping 50% of every purchase for their fundraiser.
                                    Organizers can create fundraisers and invite members. And for those
                                    not looking to start a fundraiser they can purchase popcorn directly
                                    from Orange Rose using the e-commerce feature.
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #laravel</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #vue</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #tailwindcss</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <a href="https://github.com/Solomon04/covid-reporter" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object" src="{{asset('images/covid.png')}}"
                                 alt="Covid Reporter example"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Open Source Project
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Covid Reporter
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    An application built with Laravel Zero that allows
                                    users to view the number of COVID cases within a given
                                    area. It is easily configurable with a cron that
                                    allows you to set daily reminders.
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #laravel</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <a href="#" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object-cover" src="{{asset('images/macken.png')}}"
                                 alt="Macken image"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Client Project
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Macken Cremation Application
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    The client Macken Funeral Home was in need of a more robust solution to managing the
                                    company’s cremations. The original application was developed using Visual Basic in
                                    2007, so they were in dire need of an updated application. The new application was
                                    created with Laravel, which uses React for the frontend. The application allows you
                                    to create cremation records, add employees (as an admin), switch organizations,
                                    print death certificates and labels.
                                </p>
                                <p class="mt-3 text-base leading-6 text-gray-500 font-bold">
                                    This is a private application. (ask me to see a demo)
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #laravel</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #react</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <a href="#" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object-cover" src="{{asset('images/ridin.png')}}"
                                 alt="Ridin Heavy image"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Client Project
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Ridin' Heavy
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Ridin Heavy is a content-aggregation urban car blog. The site is very similar to
                                    sites like VladTV and Worldstar Hip Hop with a focus solely on urban styled cars.
                                    The site was built with Laravel and allowed the site owners to create written and
                                    video posts about urban cars.
                                    <br>
                                    <span class="font-bold">It has since been abandoned. </span>
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #laravel</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #vue</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <a href="https://gema.gg/" target="_blank">
                        <div class="flex-shrink-0">
                            <img class="h-64 w-full object-cover" src="{{asset('images/gema.png')}}"
                                 alt="Gema logo"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-red-600">
                                <span class="hover:underline">
                                    Client Project
                                </span>
                                </p>
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    Gema GG
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Gema GG is a gaming discussion platform that initially had used vanilla PHP for
                                    application development. I was brought on the help in the migration to Laravel as
                                    the original developer hadn’t used any version control or package manager. I removed
                                    dozens of bugs and assisted in getting the product to a production ready stage.
                                    <br>
                                    <span class="font-bold">It has since been abandoned. </span>
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #php</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #composer</p>
                                <p class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                    #git</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
