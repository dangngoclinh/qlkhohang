@extends('layouts.master')
@section('main-content')
<div class="breadcrumb">
                <h1>Users</h1>
                <ul>
                    <li><a href="">Quản lý Users</a></li>
                    <li>Danh sách Users</li>
                </ul>

            </div>

            <div class="separator-breadcrumb border-top"></div>
            {{-- end of breadcrumb --}}

			<div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">Danh sách thành viên</h4>

                            <p>Thành viên</p>

                            <div class="table-responsive">
                            	<table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Avatar</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Smith Doe</td>
                                            <td>

                                                <img class="rounded-circle m-0 avatar-sm-table " src="http://gull-html-laravel.ui-lib.com/assets/images/faces/1.jpg" alt="">

                                            </td>

                                            <td>Smith@gmail.com</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td>
                                                <button type="button" class="btn btn-success ">
                                                <i class="nav-icon i-Pen-2 "></i>
                                            </button>
                                                <button type="button" class="btn btn-danger ">
                                                <i class="nav-icon i-Close-Window "></i>
                                            </button>
                                            </td>
                                        </tr>
                                    </tbody>
									<tfoot>
                                        <tr>
                                            <th colspan="6"></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of col -->
@endsection
