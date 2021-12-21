<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://tailwindui.com/js/components-v2.js?id=c08ed7087921a2a8b1bf"></script>
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
    @livewireStyles
</head>

<body>
    <div>
        <div class="relative bg-white" x-data="Components.popover({ open: false, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
            <div class="absolute inset-0 shadow z-30 pointer-events-none" aria-hidden="true"></div>
            <div class="relative z-20">
                <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-5 sm:px-6 sm:py-4 lg:px-8 md:justify-start md:space-x-10">
                    <div>
                        <a href="#" class="flex">
                            <span class="sr-only">Workflow</span>
                            <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                        </a>
                    </div>
                    <div class="-mr-2 -my-2 md:hidden">
                        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="true" :aria-expanded="open.toString()">
                            <span class="sr-only">Open menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden md:flex-1 md:flex md:items-center md:justify-between">

                        <nav class="flex space-x-10" x-data="Components.popoverGroup()" x-init="init()">
                            <div x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                                <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-gray-900" :class="{ 'text-gray-900': open, 'text-gray-500': !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="true" :aria-expanded="open.toString()">
                                    <span>Categorias</span>
                                    <svg x-state:on="Item active" x-state:off="Item inactive" class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-600" :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>

                                <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" x-description="'Solutions' flyout menu, show/hide based on flyout menu state." class="hidden md:block absolute z-10 top-full inset-x-0 transform shadow-lg bg-white" x-ref="panel" @click.away="open = false">
                                    <div class="max-w-7xl mx-auto grid gap-y-6 px-4 py-6 sm:grid-cols-2 sm:gap-8 sm:px-6 sm:py-8 lg:grid-cols-4 lg:px-8 lg:py-12 xl:py-16">

                                        <a href="#" class="-m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50">
                                            <div class="flex md:h-full lg:flex-col">
                                                <div class="flex-shrink-0">
                                                    <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="ml-4 md:flex-1 md:flex md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                                    <div>
                                                        <p class="text-base font-medium text-gray-900">
                                                            Analytics
                                                        </p>
                                                        <p class="mt-1 text-sm text-gray-500">
                                                            Get a better understanding of where your traffic is coming from.
                                                        </p>
                                                    </div>
                                                    <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">Learn more <span aria-hidden="true">→</span></p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="-m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50">
                                            <div class="flex md:h-full lg:flex-col">
                                                <div class="flex-shrink-0">
                                                    <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/cursor-click" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="ml-4 md:flex-1 md:flex md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                                    <div>
                                                        <p class="text-base font-medium text-gray-900">
                                                            Engagement
                                                        </p>
                                                        <p class="mt-1 text-sm text-gray-500">
                                                            Speak directly to your customers in a more meaningful way.
                                                        </p>
                                                    </div>
                                                    <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">Learn more <span aria-hidden="true">→</span></p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="-m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50">
                                            <div class="flex md:h-full lg:flex-col">
                                                <div class="flex-shrink-0">
                                                    <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="ml-4 md:flex-1 md:flex md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                                    <div>
                                                        <p class="text-base font-medium text-gray-900">
                                                            Security
                                                        </p>
                                                        <p class="mt-1 text-sm text-gray-500">
                                                            Your customers' data will be safe and secure.
                                                        </p>
                                                    </div>
                                                    <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">Learn more <span aria-hidden="true">→</span></p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="-m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50">
                                            <div class="flex md:h-full lg:flex-col">
                                                <div class="flex-shrink-0">
                                                    <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/view-grid" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="ml-4 md:flex-1 md:flex md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                                    <div>
                                                        <p class="text-base font-medium text-gray-900">
                                                            Integrations
                                                        </p>
                                                        <p class="mt-1 text-sm text-gray-500">
                                                            Connect with third-party tools that you're already using.
                                                        </p>
                                                    </div>
                                                    <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">Learn more <span aria-hidden="true">→</span></p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="bg-gray-50">
                                        <div class="max-w-7xl mx-auto space-y-6 px-4 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-6 lg:px-8">
                                            <div class="flow-root">
                                                <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/check-circle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <span class="ml-3">Todas Categorias</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @auth
                            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Meus Anúncios
                            </a>
                            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Chat
                            </a>
                            @endauth

                            <div x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                                <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" :class="{ 'text-gray-900': open, 'text-gray-500': !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                                    <span>Categorias</span>
                                    <svg x-state:on="Item active" x-state:off="Item inactive" class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>

                                <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" x-description="'More' flyout menu, show/hide based on flyout menu state." class="hidden md:block absolute z-10 top-full inset-x-0 transform shadow-lg" x-ref="panel" @click.away="open = false" style="display: none;">
                                    <div class="absolute inset-0 flex">
                                        <div class="bg-white w-1/2"></div>
                                        <div class="bg-gray-50 w-1/2"></div>
                                    </div>
                                    <div class="relative max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2">
                                        <nav class="grid gap-y-10 px-4 py-8 bg-white sm:grid-cols-2 sm:gap-x-8 sm:py-12 sm:px-6 lg:px-8 xl:pr-12">
                                            <div>
                                                <h3 class="text-sm font-medium tracking-wide text-gray-500 uppercase">
                                                    Company
                                                </h3>
                                                <ul role="list" class="mt-5 space-y-6">

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/information-circle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                            <span class="ml-4">About</span>
                                                        </a>
                                                    </li>

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/office-building" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                            </svg>
                                                            <span class="ml-4">Customers</span>
                                                        </a>
                                                    </li>

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/newspaper" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                                            </svg>
                                                            <span class="ml-4">Press</span>
                                                        </a>
                                                    </li>

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/briefcase" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                            </svg>
                                                            <span class="ml-4">Careers</span>
                                                        </a>
                                                    </li>

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                                            </svg>
                                                            <span class="ml-4">Privacy</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <h3 class="text-sm font-medium tracking-wide text-gray-500 uppercase">
                                                    Resources
                                                </h3>
                                                <ul role="list" class="mt-5 space-y-6">

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/user-group" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                            </svg>
                                                            <span class="ml-4">Community</span>
                                                        </a>
                                                    </li>

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/globe-alt" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                                            </svg>
                                                            <span class="ml-4">Partners</span>
                                                        </a>
                                                    </li>

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/bookmark-alt" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                            </svg>
                                                            <span class="ml-4">Guides</span>
                                                        </a>
                                                    </li>

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/desktop-computer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                            </svg>
                                                            <span class="ml-4">Webinars</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </nav>
                                        <div class="bg-gray-50 px-4 py-8 sm:py-12 sm:px-6 lg:px-8 xl:pl-12">
                                            <div>
                                                <h3 class="text-sm font-medium tracking-wide text-gray-500 uppercase">
                                                    From the blog
                                                </h3>
                                                <ul role="list" class="mt-6 space-y-6">

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex rounded-lg hover:bg-gray-100">
                                                            <div class="hidden sm:block flex-shrink-0">
                                                                <img class="w-32 h-20 object-cover rounded-md" src="https://images.unsplash.com/photo-1558478551-1a378f63328e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2849&amp;q=80" alt="">
                                                            </div>
                                                            <div class="w-0 flex-1 sm:ml-8">
                                                                <h4 class="text-base font-medium text-gray-900 truncate">
                                                                    Boost your conversion rate
                                                                </h4>
                                                                <p class="mt-1 text-sm text-gray-500">
                                                                    Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum. Viverra tempor id mus.
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="flow-root">
                                                        <a href="#" class="-m-3 p-3 flex rounded-lg hover:bg-gray-100">
                                                            <div class="hidden sm:block flex-shrink-0">
                                                                <img class="w-32 h-20 object-cover rounded-md" src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2300&amp;q=80" alt="">
                                                            </div>
                                                            <div class="w-0 flex-1 sm:ml-8">
                                                                <h4 class="text-base font-medium text-gray-900 truncate">
                                                                    How to use search engine optimization to drive traffic to your site
                                                                </h4>
                                                                <p class="mt-1 text-sm text-gray-500">
                                                                    Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum. Viverra tempor id mus.
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="mt-6 text-sm font-medium">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-500"> View all posts <span aria-hidden="true">→</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </nav>
                        @if (Route::has('login'))
                        <div class="flex items-center md:ml-12">
                            @guest

                            <a href="{{ route('login') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Entrar
                            </a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Cadastro
                            </a>
                            @endif

                            @endguest

                            @auth
                            <a href="{{ route('dashboard') }}" class="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Minha Conta
                            </a>
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!--
                Mobile menu.
            -->
            <div x-show="open" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-description="Mobile menu, show/hide based on mobile menu state." class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-ref="panel" @click.away="open = false">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5 sm:pb-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                            </div>
                            <div class="-mr-2">
                                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="toggle">
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6 sm:mt-8">
                            <nav>
                                <div class="grid gap-7 sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4">

                                    <a href="#" class="-m-3 flex items-center p-3 rounded-lg hover:bg-gray-50">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" x-description="Heroicon name: outline/chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">
                                            Analytics
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 flex items-center p-3 rounded-lg hover:bg-gray-50">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" x-description="Heroicon name: outline/cursor-click" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">
                                            Engagement
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 flex items-center p-3 rounded-lg hover:bg-gray-50">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" x-description="Heroicon name: outline/shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">
                                            Security
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 flex items-center p-3 rounded-lg hover:bg-gray-50">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" x-description="Heroicon name: outline/view-grid" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">
                                            Integrations
                                        </div>
                                    </a>

                                </div>
                                <div class="mt-8 text-base">
                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all products <span aria-hidden="true">→</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="py-6 px-5">
                        <div class="grid grid-cols-2 gap-4">
                            <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                                Pricing
                            </a>

                            <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                                Docs
                            </a>

                            <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                                Company
                            </a>

                            <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                                Resources
                            </a>

                            <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                                Blog
                            </a>

                            <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                                Contact Sales
                            </a>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Sign up
                            </a>
                            <p class="mt-6 text-center text-base font-medium text-gray-500">
                                Existing customer?
                                <!-- space -->
                                <a href="#" class="text-indigo-600 hover:text-indigo-500">
                                    Sign in
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div>
        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block xl:inline">Não usa mais? </span>
                <span class="block text-indigo-600 xl:inline"> Desapegue</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Aquele celular antigo, monitor encostado, esteira parada ou qualquer outro item que você não quer mais, desapegue e granhe uma grana.
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                <div class="rounded-md shadow">
                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                    Anuncie
                    </a>
                </div>
                </div>
            </div>
        </main>
    </div>
    <livewire:home.product-list /> 
    @livewireScripts
</body>

</html>