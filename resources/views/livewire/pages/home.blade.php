<?php

use Livewire\Volt\Component;
use App\Models\Post;
use Illuminate\Support\Collection;
use Livewire\Attributes\{Layout, Title};
use Livewire\WithPagination;

new
#[Layout('components.layouts.public')]
#[Title('Home')]

class extends Component {

    use WithPagination;

    public function with(): array
    {
        return [
            'posts' => Post::published()->orderBy('date', 'desc')->paginate(6),
            'names' => [
                'Internet Mega Corp',
                'Infinite Mustard Cup',
                'Illegal Mask Countermeasures',
                'Improbable Monster Collective',
                'Intravenous Milk Contraption',
                'Instant Militant Cooperative',
                'Iridescent Mollusk City',
                'Intrusive Map Collection',
                'Irreverent Monkey Cage',
                'Irreversible Magnetic Cluster',
                'Insidious Meat Corridor',
                'Ignorant Master Celebrant',
                'Irradiated Mystery Container',
                'Iron Muscle Crunch',
                'Intrinsic Monument Center',
                'Illegal Mind Control'
            ]
        ];
    }
}; ?>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:h-screen md:overflow-hidden bg-black">
    <section class="text-white px-2 md:px-6 pb-6 md:sticky md:top-0 md:h-screen overflow-y-scroll md:overflow-y-hidden flex items-center lg:items-start">
        <div id="profile" class="w-full">
        <figure class="flex flex-col items-center scanlines">
            <div class="relative">
                <img src="{{ asset('storage/imc_pixel.png') }}" alt="A distorted portrait of Ian Callahan rendered in blocky pixels" class="w-48 -mb-6 -mt-16 md:w-auto md:-mt-48">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
            </div>
            <figcaption class="text-center mt-4">
                <div class="border-white px-4">
                <h1 class="flex gap-4">
                    <div class="before:rounded-(--trc) before:bg-red-500 before:absolute before:h-18 before:w-22 before:z-10 flex h-20 w-20 items-center justify-center bg-red-500 rounded-(--crt) font-corn corn shadow-[0_0px_120px_rgba(255,0,0,0.9)] relative z-100">
                    <span class="text-6xl text-white z-1000">I</span>
                    </div>
                    <div class="before:rounded-(--trc) before:bg-green-500 before:absolute before:h-18 before:w-22 before:z-10 flex h-20 w-20 items-center justify-center bg-green-500  font-display monster shadow-[0_0px_120px_rgba(0,255,0,1)] rounded-(--crt) relative z-100">
                    <span class="text-6xl text-white z-1000">M</span>
                    </div>
                    <div class="before:rounded-(--trc) before:bg-blue-500 before:absolute before:h-18 before:w-22 before:z-10 flex h-20 w-20 items-center justify-center bg-blue-500 gia shadow-[0_0px_120px_rgba(0,0,255,1)] rounded-(--crt) relative z-100">
                    <span class="text-6xl text-white z-1000">C</span>
                    </div>
                </h1>
                <div class="text-center pt-2">
                <span class="text-white">{{$names[array_rand($names)]}}, LLC</span>
                </div>
                </div>
            </figcaption>
        </figure>
        <ul class="mt-6 text-center lg:text-xl">
            <li>
                <span>Technologist & Developer</span>
            </li>
            <li>
                <span>Visual Culture-Enjoyer</span>
            </li>
            <li>
                <span>Laravel-Respecter</span>
            </li>
            <li class="mt-4 max-w-lg mx-auto">
                <span><em>Senior Architect at Harvard Art Museums</em></span>
            </li>
        </ul>
        <ul class="mt-6 text-center flex flex-row justify-center gap-2 md:gap-4">
            <li>
                <a href="https://github.com/iancallahan" target="_blank" class="text-white hover:text-gray-300">
                    <span class="sr-only">GitHub</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github w-4 md:w-8" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/ianmcallahan/" target="_blank" class="text-white hover:text-gray-300">
                    <span class="sr-only">LinkedIn</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github w-4 md:w-8" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://x.com/iancallahan" target="_blank" class="text-white hover:text-gray-300">
                    <span class="sr-only">X</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github w-4 md:w-8" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="{{ asset('storage/callahan_CV.pdf') }}" target="_blank" class="text-white hover:text-gray-300">
                    <span class="sr-only">CV (PDF)</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github w-4 md:w-8" viewBox="0 0 16 16">
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    </section>
    <section class="p-4 md:col-span-2 md:h-screen md:overflow-y-auto">
        <h2 class="text-2xl font-bold sr-only">Latest Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:-ml-4">
            @foreach ($posts as $post)
                <article class="cursor-pointer">
                    <a href="{{ route('post', $post->uuid) }}">
                        <figure class="relative group">
                            <img src="https://s3.wasabisys.com/site.iancallahan.net/{{ $post->poster }}" alt="{{ $post->poster_alt }}" class="w-full h-full object-cover group-hover:grayscale transition-all duration-300">
                            <div class="absolute bottom-0">
                                <h3 class="text-black text-2xl font-bold leading-6 p-4">{{ $post->title }}</h3>
                            </div>
                        </figure>
                    </a>
                </article>
            @endforeach
        </div>
    </section>
</div>