@use('Illuminate\Support\Facades\Storage')
<div class="container mx-auto py-12">

    <div class="flex flex-col md:flex-row items-center md:items-start">
        <!-- Car Image -->
        <div class="w-full md:w-1/2">
            @empty($car->images)
                <img src="https://placehold.co/600x400?text=Hello+World" alt="Default Car Image" class="w-full h-auto">
            @else
                <img src="{{ Storage::url($car->images[0]) }}" alt="{{ $car->model }}" class="w-full h-auto">
            @endempty
        </div>

        <!-- Car Details -->
        <div class="w-full md:w-1/2 md:pl-8">
            <h1 class="text-3xl font-bold text-red-600">{{ $car->brand }} {{ $car->model }}</h1>

            <div class="mt-4 grid grid-cols-2 gap-4 border-t border-gray-300 pt-4">
                <p class="flex items-center"><i class="fas fa-car text-red-600 mr-2"></i><strong>Osztály:</strong> Első
                    osztály</p>
                <p class="flex items-center">
                    <i class="fas fa-gas-pump text-red-600 mr-2"></i><strong>Üzemanyag:</strong> {{ $car->fuel }}
                </p>
                <p class="flex items-center"><i class="fas fa-cogs text-red-600 mr-2"></i>
                    <strong>Váltó rendszer:</strong>
                    {{ $car->transmission }}
                </p>
                <p class="flex items-center"><i class="fas fa-tachometer-alt text-red-600 mr-2"></i><strong>Motor
                        teljesítménye:</strong> {{ $car->horsepower }} LE</p>
                <p class="flex items-center"><i class="fas fa-door-open text-red-600 mr-2"></i><strong>Ajtók
                        száma:</strong>
                    {{ $car->doors }}
                </p>
            </div>

            <div class="mt-6 border-t border-gray-300 pt-4">
                <h2 class="text-xl font-semibold mb-2">További információk</h2>
                <ul class="list-none space-y-2">
                    @foreach ($car->attributes ?? [] as $attributes)
                        <li class="flex items-center"><i class="fas fa-check text-green-600 mr-2"></i>
                            {{ $attributes->description }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Availability Table -->
    <div class="mt-12">
        <h2 class="text-2xl font-semibold text-left mb-4">Autók elérhetősége a következő 30 napban</h2>

        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300 text-sm text-center">
                <thead class="bg-red-600 text-white">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300">
                            Model elérhető
                            /{{ __('calendar.month_range', [
                                'current' => Str::title(now()->locale('hu')->translatedFormat('F')),
                                'next' => Str::title(now()->addDays(29)->locale('hu')->translatedFormat('F')),
                            ]) }}
                        </th>
                        @for ($i = 0; $i < 30; $i++)
                            <th class="px-2 py-1 border border-gray-300">
                                {{ today()->addDays($i)->format('d') }}
                            </th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300 font-bold text-red-600">
                            {{ $car->brand }} {{ $car->model }}
                        </td>
                        @livewire('car-availability-calendar', [
                            'car' => $car,
                            'displayDays' => 30,
                        ])
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Description -->
    <div class="mt-12">
        <h2 class="text-2xl font-semibold text-center mb-4">{{ $car->brand }} {{ $car->model }}</h2>
        <p class="text-gray-700 mb-4">{!! $car->description !!}</p>

        <p class="mt-4 text-gray-700">Bérelje ki a <strong>{{ $car->brand }} {{ $car->model }}</strong>-et, ha nem
            szeretne kompromisszumot kötni a kényelem, a megjelenés és a vezetési élmény terén. Ez a modell minden
            tekintetben magas színvonalat képvisel – Önnek csak annyi a dolga, hogy élvezze az utazást.</p>
    </div>

    <!-- Social Sharing Links -->
    <div class="mt-6 flex justify-center space-x-4">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank"
            class="text-blue-600">
            <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($car->brand . ' ' . $car->model) }}"
            target="_blank" class="text-blue-400">
            <i class="fab fa-twitter fa-2x"></i>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($car->brand . ' ' . $car->model) }}"
            target="_blank" class="text-blue-700">
            <i class="fab fa-linkedin fa-2x"></i>
        </a>
    </div>
</div>
