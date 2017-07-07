@extends ('layouts.master')
@section('title')
    Mevasis Bilişim
    @endsection
@section('body')
    <div class="jumbotron">
        <h1>Your gender is
        @if($gender=='male')
            male
            @elseif($gender=='female')
            female
            @else
            unknown
@endif

        </h1>
        <p class="lead">YapıştırCras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Section 1</h4>
            <p>Yıldız Teknik Teknopark</p>

            <h4>Section 2</h4>
            <p>Mevasis Bilişim</p>

            <h4>Section 3</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
            <h4>Section 4</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Section 5</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Section 6</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
    </div>
    @endsection