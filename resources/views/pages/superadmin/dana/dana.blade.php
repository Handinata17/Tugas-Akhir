@extends('templates.home')

@section('sidebar')
    @include('templates.partials.superadmin._sidebar')
@endsection

@section('content')              
                    
                    
                    <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Overlapping bars on mobile</h4>
                                <p class="text-muted mb-3 d-inline-block text-truncate w-100">This example makes use of label interpolation and the seriesBarDistance property that allows you to make bars overlap over each other.</p>
                                <div id="overlapping-bars" class="ct-chart ct-golden-section drop-shadow"></div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end-card-->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Animating a Donut with Svg.animate</h4>
                                <p class="text-muted mb-3 d-inline-block text-truncate w-100">Although it'd be also possible to achieve this animation with CSS, with some minor suboptimal things, here's an example of how to animate donut charts using Chartist.Svg.animate and SMIL.</p>
                                <div id="animating-donut" class="ct-chart ct-golden-section drop-shadow"></div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end-card-->
                    </div>
                    <!-- end col -->
                </div>