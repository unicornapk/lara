<h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ها</h1>
<div class="row">
    @foreach($videos as $video)
    <x-video-box :video="$video"></x-video-box>
    @endforeach
</div><!-- // row -->
