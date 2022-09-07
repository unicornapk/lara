@extends('layot')
@section('content')
<x-latest-videos></x-latest-videos>
        <h1 class="new-video-title"><i class="fa fa-soccer-ball-o"></i> محبوب ها</h1>
        <div class="row">

            @foreach($mostPopularVideos as $video)
              <x-video-box :video="$video"></x-video-box>
            @endforeach

        </div><!-- // row -->
        <h1 class="new-video-title"><i class="fa fa-globe"></i>بیشترین بازدید</h1>
        <div class="row">

            @foreach($mostViewedVideos as $video)
                <x-video-box :video="$video"></x-video-box>
            @endforeach

        </div><!-- // row -->

        <!-- Loading More Videos -->
        <div id="loading-more">
            <i class="fa fa-refresh faa-spin animated"></i> <span>در حال بارگیری بیشتر</span>
        </div>
        <!-- // Loading More Videos -->

        </div>
@endsection
