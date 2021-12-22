<div class="absolute w-80 pointer-events-none space-y-2 bottom-0 right-0 top-20 sm:items-start m-1 z-50">
    @foreach ($alerts as $alert)
        <x-alert :level="$alert['level'] ?? null" :title="$alert['title'] ?? null"
            :subtitle="$alert['subtitle'] ?? null" :timeout="$alert['timeout'] ?? null" />
    @endforeach
</div>
