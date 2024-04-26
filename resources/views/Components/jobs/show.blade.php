<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

<strong><h2 class="font-bld text-lg">{{ $job['title'] }}</h2></strong>
 <p>
    This job pays {{ $job['salary'] }} per year.
</p>
</x-layout>
