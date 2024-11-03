<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
      
  <article class="py-8 max-w-screen-md border-b border-gray-300">

    <h2 class="mb-1 text-3xl tracking-tighter font-bold text-grey-900">{{ $post['title'] }}</h2>

    <div>
      <a href="#" class="test-base text-gray-500">{{ $post['author'] }}</a> | 03/11/2024
    </div>

    <p class="my-4 font-light">
      {{ ($post['body']) }}
    </p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to post</a>
  </article>


  </x-layout>