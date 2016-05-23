<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach($carousel AS $carouselItem)
        <div class="item {{$carouselItem["isActive"] ? "active" : ""}}">
            <div class="container">
                <div class="carousel-caption">
                    <h1>{!!$carouselItem["headerText"]!!}</h1>
                    <p>{!!$carouselItem["subText"]!!}</p>
                    <p>{!!$carouselItem["buttons"]!!}</p>
                </div>

                @if (array_key_exists("imageUrl", $carouselItem))
                <div class="carousel-image wow zoomIn">
                    <img src="{{$carouselItem["imageUrl"]}}" alt="{{$carouselItem["imageAlt"]}}"/>
                </div>
                @endif
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back {{$carouselItem["backImageClass"]}}"></div>
        </div>
        @endforeach       
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>