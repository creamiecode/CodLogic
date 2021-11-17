<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
@include('partials.head')
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    @include('partials.header')

     @include('partials.sidebar')

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
{{--            <div class="page-header">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-12">--}}
{{--                        <h3 class="page-title">Welcome Admin!</h3>--}}
{{--                       --}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon" style="color: white;">
											<i class="fa fa-product-hunt"></i>
										</span>
                                <div class="dash-count" style="color: white;">
                                    <h3>{{$projectCount->count()}}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info" style="color: white;">
                                <h6 style="color: white">Projects </h6>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- small box -->

                </div>


{{--                <div class="col-xl-3 col-sm-6 col-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="dash-widget-header">--}}
{{--										<span class="dash-widget-icon text-warning border-warning">--}}
{{--											<i class="fe fe-folder"></i>--}}
{{--										</span>--}}
{{--                                <div class="dash-count">--}}
{{--                                    <h3>$62523</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="dash-widget-info">--}}

{{--                                <h6 class="text-muted">Revenue</h6>--}}
{{--                                <div class="progress progress-sm">--}}
{{--                                    <div class="progress-bar bg-warning w-50"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


            </div>


            <div class="row">
                <div class="col-md-12">

                    <!-- Recent Orders -->
                    <div class="card card-table">
                        <div class="card-header">
                            <h4 class="card-title">Recent Project's</h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>Project title</th>
                                        <th>Project link</th>
                                        <th>Project Color</th>
                                        <th>Project Icon</th>
                                        <th>Project logo</th>
                                        <th>Date Uploaded</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    @foreach($pro as $project)
                                        <tbody>
                                        <tr>
                                            <td> <a>{{$project->project_title}}</a> </td>
                                            <td> <a>{{$project->project_link}}</a> </td>
                                            <td> <div style="height: 20px;width:20px;background-color:{{$project->project_color}}"></div> </td>
                                            <td> <a  style=" border-radius:50%;padding: 7px;,margin-left:10px;margin-right:10px;margin-bottom:25px;text-align:centre"   ><img  src="{{asset('/core/public/post/'.$project->project_icon)}}"> </a> </td>
                                            <td>
                                                <img src="{{ asset('/core/public/post/'. $project->project_logo) }}" alt="User Image" height="50" >
                                            </td>
                                            <td> <a>{{$project->created_at}}</a> </td>
                                            <td><a href="{{url('/EditProject/'.$project->id)}}" class="fa fa-edit btn btn-success"></a> <a href="{{url('/DeleteProject/'.$project->id)}}" class="fa fa-trash btn btn-danger"></a></td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- /Recent Orders -->

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

@include('partials.script')

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
</html>