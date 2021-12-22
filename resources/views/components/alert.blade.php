@props([
'timeout' => 3000,
'title' => '',
'subtitle' => '',
'level' => 'success',
])
<div
    x-data="
    {
        show: true,
    }"
    x-show="show"
    x-init="setTimeout(() => show = false, {{ $timeout }})"
    x-description="Notification panel, show/hide based on alert state."
    x-transition:enter="transform ease-out duration-100 transition"
    x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
    x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
    <div class="p-4">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                @if($level == 'success')
                    <x-icons.heroicons.outline.check-circle class="h-6 w-6 text-green-400"/>
                @elseif($level == 'error')
                    <x-icons.heroicons.outline.x-circle class="h-6 w-6 text-red-400"/>
                @endif
            </div>
            <div class="ml-3 w-0 flex-1 pt-0.5">
                <p class="text-sm font-medium text-gray-900">
                    {{ $title }}
                </p>
                <p class="mt-1 text-sm text-gray-500">
                    {{ $subtitle }}
                </p>
            </div>
            <div class="ml-4 flex-shrink-0 flex">
                <button @click="show = false;"
                        class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    <span class="sr-only">Close</span>
                    <x-icons.heroicons.outline.x class="h-5 w-5"/>
                </button>
            </div>
        </div>
    </div>
</div>
