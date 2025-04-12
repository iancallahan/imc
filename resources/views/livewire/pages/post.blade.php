<?php

use Livewire\Volt\Component;
use App\Models\Post;
use Illuminate\Support\Collection;
use Livewire\Attributes\{Layout, Title};

new
#[Layout('components.layouts.public')]
#[Title('Post')]

class extends Component {

    public $uuid;

    public function mount($uuid) {
        $this->uuid = $uuid;
    }

    public function with(): array
    {
        $post = Post::where('uuid', $this->uuid)->first();
        
        if (!$post) {
            abort(404);
        }

        return [
            'post' => $post
        ];
    }
}; ?>

<article class="w-full h-screen bg-black pt-12 grid grid-cols-1 grid-rows-1 relative">
    <div class="absolute inset-0 bg-black z-0">
        <figure class="flex flex-col items-center scanlines opacity-50">
            <img src="https://s3.wasabisys.com/site.iancallahan.net/{{ $post->poster }}" alt="{{ $post->poster_alt }}" class="w-full h-full object-cover hover:grayscale transition-all duration-300">
        </figure>
    </div>
    <div class="z-10">
        <header class="max-w-2xl bg-white mx-auto p-6 shadow-lg">
            <div class="">
                <a href="/" class="text-black hover:text-gray-500">
                    <span class="sr-only">Back to home</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                    </svg>
                </a>
            </div>
            <span class="text-sm text-gray-500">{{ $post->date->format('d F Y') }}</span>
            <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
            <x-markdown>{{ $post->introduction }}</x-markdown>
        </header>
        <section class="max-w-2xl bg-white mx-auto px-6 py-3 mt-6 prose shadow-lg">
            <x-markdown class="mx-auto">{{ $post->content }}</x-markdown>
        </section>
    </div>
</article>