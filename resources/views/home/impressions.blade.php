@include('home.layouts.header')
@include('home.layouts.nav')

@php
    use Carbon\Carbon;
@endphp

<div class="tube-bg-img"
    style="background-image: url(/home/images/img_top_color.png);width:100%;position: absolute; top:0px;z-index:10;background-repeat: no-repeat;background-size: 100% auto;background-position: center;background-repeat: no-repeat;background-size: cover;">
    <div class="container-main" style="">

        <div class="row">
            <div class="col-lg-6">
                <div class="img-bg-cmptr">
                    <img class="computer-img" src="{{ asset('home/images/imp-new.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ignou-tube-content">
                    <h1 class="head-bg-bnr">Voyage of Transformation: Learner Stories at Learnwise
                    </h1>
                    <p class="grey-text sub-head-bg-bnr">Welcome to the heart of Learnwise – a repository of vibrant learner testimonials! Experience a journey through the eyes of ambitious individuals, who have embraced Learnwise's tailored higher education programs. Discover how our mentorship and regional language support weave knowledge, culture, and technology together. Here, students narrate their transformation while pursuing UG and PG from distinguished universities like IGNOU. Learn about our Career Coaching, Job-Readiness Training, and Up-Skilling programs that propel them into their promising future. Step into their stories!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-main ignoutube-main-container-main" style="margin-top: 430px">
    <div class="row">
        <div class="col-lg-12">
            <div class="head-tube">
                <h1 class="text-center ignou-tube-head-pg">Transformative Experiences</h1>

            </div>
        </div>
        <div class="col-lg-12 mb-4">
            <div class="filter-box-ignou-tube">
                <select name="cars" id="cars" class="filter-btn" onchange="GetImpPlaylist(this.value)">
                    <option value="" selected disabled>Filter</option>
                    <option value="all">All</option>
                    @foreach ($Playlists as $Playlist)
                        <option value="{{ $Playlist->id }}">{{ $Playlist->playlist }}</option>
                    @endforeach
                </select>
            </div>
        </div>



    </div>
</div>

<div class="container-main">
    <div class="row" id="igouid">
        @foreach ($Impressions as $Impression)

        @php
            $videoTimestamp = Carbon::parse($Impression->updated_at);
            $timeAgo = $videoTimestamp->diffForHumans();
        @endphp

<div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-5">

    <div class="ignoutube-page">
        {!! $Impression->embeded_url !!}
        <h3 class="ignoutube-head pt-2">{{ $Impression->title }}</h3>
        <h4 class="ignoutube-sub-head">{{ $Impression->name }}</h4>
        <div class="time-nd-btn">
            <p class="mb-0">{{ $timeAgo }}</p>
            <a href="{{ $Impression->youtube_link }}" target="_blank" class="ignou-primary-bg btn">Watch
                now</a>
        </div>
    </div>
</div>

    @endforeach

    </div>
</div>


<div class="container-main">
    <div class="row">
        <div class="col-lg-12">
            <div class="see-more-dv">
                <a href="https://youtube.com/@LearnwiseApp" target="_blank">
                    <h3 class="see-more-btn ignou-primary-bg btn">See More</h3>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="call-btn-mobile">
    <div class="half-btn">
        <a href="tel:7592939616">
            <h5 class="call-now mb-0"><i class="ri-phone-fill"></i> Call Now</h5>
        </a>
    </div>
    <div class="half-btn">
        <a href="https://wa.me/+917592939616">
            <h5 class="whtspp-now mb-0"><i class="ri-whatsapp-fill"></i>WhatsApp</h5>
        </a>
    </div>
</div>

@include('home.layouts.footer')
<script>
    function GetImpPlaylist(imp_id) {

        // alert(val);
        // return false;
        $.post("/get-imp-playlist", {
            pid: imp_id,
            _token: "{{ csrf_token() }}"
        }, function(result) {

            $('#igouid').html(result);
        });
    }
</script>
