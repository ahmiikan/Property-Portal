<div>
    <header class="section-title">
        <h3 class="flex gap-x-1">
            Comments <pre class="text-gray-700 bg-inherit">({{count($post->comments)}})</pre>
        </h3>
    </header>
    <div class="text-xl divide-y-2 divide-gray-300">
        @foreach ($post->comments->reverse()->splice(0, 3) as $comment)
            <div class="flex flex-col py-4 gap-y-1" id="comment{{$comment->id}}">
                <div>
                    <div class="flex flex-col">
                        <span class="font-bold">
                            {{$comment->poster}}
                        </span>
                        @if ($comment->reply_to)
                            <span class="text-sm text-gray-700">
                                Replied <a href="#comment{{$comment->replyTo->id}}" class="underline cursor-pointer">{{$comment->replyTo->poster}}</a>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="text-gray-700">
                    {{$comment->content}}
                </div>
                <div class="flex items-center">
                    <span class="text-sm text-gray-500">
                        Posted on {{date_format($comment->created_at, "M j, Y")}}
                    </span>

                    <span class="ml-auto text-gray-500 cursor-pointer" x-on:click="replyTo = {
                        name: '{{$comment->poster}}',
                        comment: '{{$comment->id}}'
                    }">
                        Reply
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>