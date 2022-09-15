@extends('master.backend_master')

@section('dashboard')
<div class="content">
    <div class="row">

        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            
            <div class="dash-widget">
                <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{App\Models\User::all()->count()}}</h3>
                    <span class="widget-title1">Users <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection