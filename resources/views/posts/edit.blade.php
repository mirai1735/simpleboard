<form method="Post" action="/posts/{{ $post->id }}">
  <input type="hidden" name="_method" value="PUT">
  <input type="text" name="title" value="{{ $post->title }}">
  <input type="text" name="content" value="{{ $post->content }}">
</form>