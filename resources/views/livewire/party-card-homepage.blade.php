<article class="flex border-solid border-2 border-white w-6/12 overflow-hidden lg:w-1/3 h-64 flex items-end justify-start text-left bg-cover bg-center" style="background-image: url({{$party->cover}})">
    
    <a href="{{ route('party.details', $party->id) }}" class="">
        <h4 class="text-white text-xl font-extrabold bg-black text-center h-8 bg-black-900"> {{$party->title}} </h4>
        
    </a>
</article>
