<section id="hero-14" style="background-image: url({{asset($categories['image'])}})" class="bg-fixed hero-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- HERO TEXT -->
            <div class="col-sm-9 col-md-7 col-lg-5">
                <div class="hero-14-txt white-color wow fadeInRight">

                    <!-- Section ID -->


                    <!-- Title -->


                    <!-- Text -->
                    <p class="p-xl">
                        {!! $categories['name'] !!}
                    </p>
                    <p class="p-xl">
                        موسسه سخن آفتاب شرق پس از کسب مجوز های لازم را از سازمان میراث فرهنگی، گردشگری و صنایع دستی و در زمینه آموزش راهنمایان ایرانگردی-جهانگردی، طبیعت گردی و مدیر فنی فعالیت خود را آغاز کرده و در تلاش جهت افزایش سطح آگاهی فعالان صنعت گردشگری و ایجاد بستر مناسب جهت پیشرفت و ایجاد اشتغال در تلاش است تا گامی در جهت ارتقا سطح علمی بردارد.
                    </p>

                    <br>
                    <br>
                    <br>
                    <br>



                    <!-- STORE BADGES -->
                    <!-- END STORE BADGES -->

                </div>
            </div>	<!-- END HERO TEXT -->


        </div>    <!-- End row -->
    </div>	   <!-- End container -->
</section>


<section style="padding-top:20px" id="single-post" class="wide-100 inner-page-hero single-post-section division">
    <div class="container">


        <!-- SINGLE POST CONTENT -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="single-post-wrapper">


                    <!-- SINGLE POST TITLE -->
                    <div class="single-post-title">

                        <!-- CATEGORY -->
{{--                        <p class="p-sm post-tag txt-500 txt-upcase">اخبار آفتاب شرق </p>--}}

                        <!-- TITLE -->
                        <h2 class="h2-md">{{$categories->name}}</h2>

                        <!-- POST DATA -->
                        <div class="post-data clearfix">

                            <!-- Author Avatar -->


                            <!-- Author Data -->


                        </div>	<!-- END POST DATA -->


                    </div>	<!-- END SINGLE POST TITLE -->


                    <!-- BLOG POST TEXT -->
                    <div class="single-post-txt">

                        <!-- Text -->
                        <p class="p-lg">
                            {!! $categories->description!!}
                        </p>
                    </div>	<!-- END BLOG POST TEXT -->

                </div>
            </div>
        </div>	<!-- END SINGLE POST CONTENT -->


    </div>     <!-- End container -->
</section>
@if($categories->tabs)
    <section style="padding-top:20px" id="single-post" class="wide-100 inner-page-hero single-post-section division">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                @php($a=0)
                @foreach($categories->tabs as $i)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{$a<1 ?"active":""}}" id="pills-{{$i->id}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$i->id}}" type="button" role="tab" aria-controls="pills-{{$i->id}}" aria-selected="true">{{$i->tab}}</button>
                    </li>
                    @php($a++)
                @endforeach

            </ul>
            <div class="mt-5 tab-content" id="pills-tabContent">
                @php($b=0)
                @foreach($categories->tabs as $i)
                    <div class="mt-5 tab-pane fade show {{$b<1 ?"active":""}}" id="pills-{{$i->id}}" role="tabpanel" aria-labelledby="pills-{{$i->id}}-tab">
                        {!! $i->description !!}
                    </div>
                    @php($b++)
                @endforeach

            </div>
        </div>
    </section>
@endif<!-- END SINGLE POST -->
