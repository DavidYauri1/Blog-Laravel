<x-app-layout>

    


<div class="container py-8">
    <h1 class="uppercase text-center text-3xl font-bold">Category:{{ $category->name }}</h1>

    @foreach ($posts as $post )
        <article class="mt-8 bg-white shadow-lg rounded-lg overflow-hidden">
            <img  class="w-full h-72 object-cover object-center" src="{{ $post->image->url }}" alt="">

            <div class="px-6 py-4">
                <h1 class="font-bold text-xl mb-2">
                    <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                </h1>
                <div class="text-gray-700 text-base">
                    {{ $post->extraxt }}
                </div>



            </div>
            <div class="px-6 pt-4 pb-2">
                @foreach ($post->tags as $tag)
                    <a href="" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-gray-700">{{ $tag->name }}</a>
                @endforeach
            </div>
        </article>
    @endforeach
        <div class="mt-4">
            {{ $posts->links() }}
        </div>

</div>
</x-app-layout>