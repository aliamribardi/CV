<div class="container">
    <div class="row" style="margin-top: 50px; margin-bottom: 200px">
        <header style="padding-bottom: 20px">
            <h2>
                <strong>About Me</strong>
                @if (!is_null($abouts))
                    <a href="{{ Route('editAbout', $abouts->id) }}"><i class="btn btn-default btn-sm mr-md glyphicon glyphicon-edit pull-right"></i></a> 
                @endif
                @if (is_null($abouts))
                    <a href="{{ Route('createAbout') }}" class="pull-right">
                        <button class="btn btn-default btn-sm mr-md">Add Data</button>
                    </a>
                @endif
            </h2>
        </header>
        <div class="col-md-3">
            <img src="{{ asset('storage/' . $abouts->image) }}" alt="{{ $abouts->address }}" class="img-circle" style="height: 250px; width: 250px;">
        </div>
        <div class="col-md-2">
            <h4 style="padding-bottom: 15px"><strong>NAME </strong></h4>
            <h4 style="padding-bottom: 15px"><strong>ADDRESS </strong></h4>
            <h4 style="padding-bottom: 15px"><strong>PHONE NUMBER </strong></h4>
            <h4 style="padding-bottom: 15px"><strong>ABOUT ME </strong></h4>
        </div>
        <div class="col-md-5">
            <h4 style="padding-bottom: 15px"><strong> {{ $users->name }} </strong></h4>
            <h4 style="padding-bottom: 15px"><strong> {{ $abouts->address }} </strong></h4>
            <h4 style="padding-bottom: 15px"><strong> {{ $abouts->phone_number }} </strong></h4>
            <h4 style="padding-bottom: 15px"><strong> {{ $abouts->about_me }} </strong></h4>
        </div>
    </div>
</div>




