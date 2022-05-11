@extends('layouts.frontend')
@section('title','Home')

@push('vendor-css')

@endpush
@push('onpage-css')

@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="home-box">
                    <h1 class="home-title">Find Your <br/> mentor</h1>
                    <p>Book and meet over 100+ <br/> mentors for 1:1 mentorship</p>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" id="mentor_name" placeholder="Ex: Gra"/>

                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 home-box">
            <img src="{{ asset('assets/frontend/images/home-banner.png')}}" alt="" srcset="">
            </div>
        </div>
    </div>

@endsection
@push('vendor-js')

@endpush
@push('onpage-js')

@endpush
