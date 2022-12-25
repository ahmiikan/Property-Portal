<div>
    <form x-on:submit="((e) => {
        const hiddenReplyTo = $el.querySelector('input[name=replyTo]')
        hiddenReplyTo.value = replyTo.comment
    })($event)" method="POST" action="/api/posts/{{$post->slug}}/comments">
        @csrf
    
        <div class="flex flex-col gap-y-7">
            <input type="hidden" name="replyTo">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-5">
                <input name="name" type="text" required placeholder="Your name" class="w-full bg-gray-200 input focus:bg-white" />
                <input name="email" type="email" required placeholder="Your email" class="w-full bg-gray-200 input focus:bg-white" />
                <input name="post_id" type="hidden" required value="{{$post->id}}" class="w-full bg-gray-200 input focus:bg-white" />

            </div>
            <div>
                <textarea name="message" required placeholder="Your Comments" class="w-full h-32 px-2 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-200 border border-gray-300 rounded outline-none resize-none input focus:bg-white"></textarea>
            </div>
            <div class="flex justify-end">
                <button class="btn btn-primary" type="submit">
                    Post Comment
                </button>
            </div>
        </div>
    </form>
</div>
