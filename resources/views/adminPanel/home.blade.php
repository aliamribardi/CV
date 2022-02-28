@extends('adminPanel.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            
        </div>
    </div>
</div>

<h2 class="page-title">Curriculum Vitea <small>{{ Auth::user()->name }}</small></h2>

{{-- About --}}
@include('adminPanel.about')
{{-- End About --}}

{{-- Education --}}
@include('adminPanel.education')
{{-- End Education --}}

{{-- Work --}}
@include('adminPanel.work')
{{-- End Work --}}

{{-- Skill --}}
@include('adminPanel.skill')
{{-- End Skill --}}

{{-- My Work --}}
@include('adminPanel.myWork')
{{-- End My Work --}}

@endsection
