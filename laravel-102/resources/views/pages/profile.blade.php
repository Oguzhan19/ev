
 @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body">
                    <p>{{$married}}</p>
                    <p>{{$test}}</p>
                    <p>{{$age}}</p>
                    <p> Your age is
                    {{Carbon\Carbon::createFromDate(1993,1,1)->age}}
                    </p>

                        <p>
                            Your age is@age(1993,2,1)->age

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
