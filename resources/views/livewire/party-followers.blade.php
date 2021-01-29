<div class="flex items-center flex-no-wrap">
    @foreach($followers as $follower)
    @if($loop->first)
    <div class="w-10 h-10 md:w-14 md:h-14 bg-center rounded-full">
        <img src="{{$follower->img}}" class="w-full h-full rounded-full object-cover" />
    </div>
    @else
    <div class="w-10 h-10 md:w-14 md:h-14 bg-cover rounded-full border-2 border-solid border-pink-500 -ml-2 ">
        <img src="{{$follower->img}}" class="w-full h-full rounded-full object-cover" />
    </div>
    @endif


    @endforeach
</div>