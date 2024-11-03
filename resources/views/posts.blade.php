<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ( $posts as $post )
      
    
      
  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
    <h2 class="mb-1 text-3xl tracking-tighter font-bold text-grey-900">{{ $post['title'] }}</h2>
    </a>
    <div>
      <a href="#" class="test-base text-gray-500">{{ $post['author'] }}</a> | 03/11/2024
    </div>

    <p class="my-4 font-light">
      {{ Str::limit($post['body'], 100) }}
    </p>
    <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">read more &raquo;</a>
  </article>
  @endforeach

  </x-layout>