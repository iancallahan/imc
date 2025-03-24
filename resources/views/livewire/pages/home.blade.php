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
            'posts' => Post::orderBy('date', 'desc')->paginate(6),
        ];
    }
}; ?>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:h-screen md:overflow-hidden">
    <section class="bg-black text-white px-6 pb-6 md:sticky md:top-0 md:h-screen overflow-y-scroll md:overflow-y-hidden">
        <figure class="flex flex-col items-center scanlines">
            <img src="{{ asset('storage/imc.png') }}" alt="Ian Callahan rendered in blocky pixels" class="w-48 h-48">
            <figcaption class="text-center mt-4">
                <div class="border-white px-4">
                <h1 class="flex gap-4 font-semibold">
                    <div class="flex h-20 w-20 items-center justify-center bg-red-500 rounded-md">
                    <span class="text-5xl text-white">I</span>
                    </div>
                    <div class="flex h-20 w-20 items-center justify-center bg-green-500 rounded-md">
                    <span class="text-5xl text-white">M</span>
                    </div>
                    <div class="flex h-20 w-20 items-center justify-center bg-blue-500 rounded-md">
                    <span class="text-5xl text-white">C</span>
                    </div>
                </h1>
                </div>
            </figcaption>
        </figure>
        <ul class="mt-6 text-center">
            <li>
                <span>Technologist & Developer</span>
            </li>
            <li>
                <span>Visual Culture-Enjoyer</span>
            </li>
            <li>
                <span>Laravel-Respecter</span>
            </li>
            <li class="mt-4">
                <span><em>Senior Architect at Harvard Art Museums</em></span>
            </li>
        </ul>
        <ul class="mt-6 text-center flex flex-row justify-center gap-2">
            <li>
                <a href="https://github.com/iancallahan" target="_blank" class="text-white hover:text-gray-300">GitHub</a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/ianmcallahan/" target="_blank" class="text-white hover:text-gray-300">LinkedIn</a>
            </li>
            <li>
                <a href="https://x.com/iancallahan" target="_blank" class="text-white hover:text-gray-300">X</a>
            </li>
            <li>
                <a href="https://x.com/iancallahan" target="_blank" class="text-white hover:text-gray-300">CV (PDF)</a>
            </li>
        </ul>
    </section>
    <section class="bg-white rounded-lg p-4 md:col-span-2 md:h-screen md:overflow-y-auto">
        <h2 class="text-2xl font-bold sr-only">Latest Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:-ml-4">
            @foreach ($posts as $post)
                <article class="cursor-pointer">
                    <figure class="">
                        <img src="{{ $post->poster . '?random=' . $post->id }}" alt="{{ $post->poster_alt }}" class="w-full h-full object-cover hover:grayscale transition-all duration-300">
                    </figure>
                    <h3 class="sr-only">{{ $post->title }}</h3>
                </article>
            @endforeach
        </div>
    </section>
</div>
a