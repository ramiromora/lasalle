@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Status</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-success text-lg">
                                                DAY 1
                                            </div>
                                        </div>
                                        <br>
                                        <small><b>DESCRIPTION:</b> {{strtoupper($schedules[0]->description)}} </small>
                                        <br>
                                        <small><b>DATE:</b> {{date("D M j", strtotime($schedules[0]->date))}} </small>
                                        <br>
                                        <small><b>START:</b> {{$schedules[0]->start}}
                                            <b>FINISH:</b> {{$schedules[0]->finish}}</small>
                                        <br>
                                        <small><b>TOTAL:</b> {{$meals[0]}}</small>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-warning text-lg">
                                                DAY 1
                                            </div>
                                        </div>
                                        <br>
                                        <small><b>DESCRIPTION:</b> {{strtoupper($schedules[1]->description)}} </small>
                                        <br>
                                        <small><b>DATE:</b> {{date("D M j", strtotime($schedules[1]->date))}} </small>
                                        <br>
                                        <small><b>START:</b> {{$schedules[1]->start}}
                                            <b>FINISH:</b> {{$schedules[1]->finish}}</small>
                                        <br>
                                        <small><b>TOTAL:</b> {{$meals[1]}}</small>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger text-lg">
                                                DAY 1
                                            </div>
                                        </div>
                                        <br>
                                        <small><b>DESCRIPTION:</b> {{strtoupper($schedules[2]->description)}} </small>
                                        <br>
                                        <small><b>DATE:</b> {{date("D M j", strtotime($schedules[2]->date))}} </small>
                                        <br>
                                        <small><b>START:</b> {{$schedules[2]->start}}
                                            <b>FINISH:</b> {{$schedules[2]->finish}}</small>
                                        <br>
                                        <small><b>TOTAL:</b> {{$meals[2]}}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-success text-lg">
                                                DAY 2
                                            </div>
                                        </div>
                                        <br>
                                        <small><b>DESCRIPTION:</b> {{strtoupper($schedules[3]->description)}} </small>
                                        <br>
                                        <small><b>DATE:</b> {{date("D M j", strtotime($schedules[3]->date))}} </small>
                                        <br>
                                        <small><b>START:</b> {{$schedules[3]->start}}
                                            <b>FINISH:</b> {{$schedules[3]->finish}}</small>
                                        <br>
                                        <small><b>TOTAL:</b> {{$meals[3]}}</small>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-warning text-lg">
                                                DAY 2
                                            </div>
                                        </div>
                                        <br>
                                        <small><b>DESCRIPTION:</b> {{strtoupper($schedules[4]->description)}} </small>
                                        <br>
                                        <small><b>DATE:</b> {{date("D M j", strtotime($schedules[4]->date))}} </small>
                                        <br>
                                        <small><b>START:</b> {{$schedules[4]->start}}
                                            <b>FINISH:</b> {{$schedules[4]->finish}}</small>
                                        <br>
                                        <small><b>TOTAL:</b> {{$meals[4]}}</small>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger text-lg">
                                                DAY 2
                                            </div>
                                        </div>
                                        <br>
                                        <small><b>DESCRIPTION:</b> {{strtoupper($schedules[5]->description)}} </small>
                                        <br>
                                        <small><b>DATE:</b> {{date("D M j", strtotime($schedules[5]->date))}} </small>
                                        <br>
                                        <small><b>START:</b> {{$schedules[5]->start}}
                                            <b>FINISH:</b> {{$schedules[5]->finish}}</small>
                                        <br>
                                        <small><b>TOTAL:</b> {{$meals[5]}}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-success text-lg">
                                                DAY 3
                                            </div>
                                        </div>
                                        <br>
                                        <small><b>DESCRIPTION:</b> {{strtoupper($schedules[6]->description)}} </small>
                                        <br>
                                        <small><b>DATE:</b> {{date("D M j", strtotime($schedules[6]->date))}} </small>
                                        <br>
                                        <small><b>START:</b> {{$schedules[6]->start}}
                                            <b>FINISH:</b> {{$schedules[6]->finish}}</small>
                                        <br>
                                        <small><b>TOTAL:</b> {{$meals[6]}}</small>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-warning text-lg">
                                                DAY 3
                                            </div>
                                        </div>
                                        <br>
                                        <small><b>DESCRIPTION:</b> {{strtoupper($schedules[7]->description)}} </small>
                                        <br>
                                        <small><b>DATE:</b> {{date("D M j", strtotime($schedules[7]->date))}} </small>
                                        <br>
                                        <small><b>START:</b> {{$schedules[7]->start}}
                                            <b>FINISH:</b> {{$schedules[7]->finish}}</small>
                                        <br>
                                        <small><b>TOTAL:</b> {{$meals[7]}}</small>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-danger text-lg">
                                                DAY 3
                                            </div>
                                        </div>
                                        <br>
                                        <small><b>DESCRIPTION:</b> {{strtoupper($schedules[8]->description)}} </small>
                                        <br>
                                        <small><b>DATE:</b> {{date("D M j", strtotime($schedules[8]->date))}} </small>
                                        <br>
                                        <small><b>START:</b> {{$schedules[8]->start}}
                                            <b>FINISH:</b> {{$schedules[8]->finish}}</small>
                                        <br>
                                        <small><b>TOTAL:</b> {{$meals[8]}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-sm-2 col-4">
                    <div class="description-block border-right">
                        <span class="description-percentage text-success"><i class="fas fa-users"></i> DESCRIPTION</span>
                        <h5 class="description-header">{{isset($places[0]->num)?$places[0]->num:'0'}}</h5>
                        <span class="description-text">PLACE 1</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-2 col-4">
                    <div class="description-block border-right">
                        <span class="description-percentage text-warning"><i class="fas fa-users"></i> DESCRIPTION</span>
                        <h5 class="description-header">{{isset($places[1]->num)?$places[1]->num:'0'}}</h5>
                        <span class="description-text">PLACE 2</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-2 col-4">
                    <div class="description-block border-right">
                        <span class="description-percentage text-success"><i class="fas fa-users"></i>DESCRIPTION</span>
                        <h5 class="description-header">{{isset($places[2]->num)?$places[2]->num:'0'}}</h5>
                        <span class="description-text">PLACE 3</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-2 col-4">
                    <div class="description-block border-right">
                        <span class="description-percentage text-danger"><i class="fas fa-users"></i> DESCRIPTION</span>
                        <h5 class="description-header">{{isset($places[3]->num)?$places[3]->num:'0'}}</h5>
                        <span class="description-text">PLACE 4</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <div class="col-sm-4 col-8">
                    <div class="description-block">
                        @if(isset($last->student->id))
                            <span class="description-percentage text-danger"><i class="fas fa-user"></i> {{$last->student->name}}</span>
                            <h5 class="description-header">{{$last->eat_at}}</h5>
                            <span class="description-text">PLACE {{$last->place}}</span>
                        @else
                            <span class="description-percentage text-danger"><i class="fas fa-user"></i> NULL</span>
                            <h5 class="description-header">00:00:00</h5>
                            <span class="description-text">PLACE 0</span>
                        @endif
                    </div>
                    <!-- /.description-block -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Students</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="students-table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>DAY 1</th>
                                    <th>DAY 1</th>
                                    <th>DAY 1</th>
                                    <th>DAY 2</th>
                                    <th>DAY 2</th>
                                    <th>DAY 2</th>
                                    <th>DAY 3</th>
                                    <th>DAY 3</th>
                                    <th>DAY 3</th>
                                    <th>TOTAL</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop

@push('scripts')
    <script>
        $(function () {
            $('#students-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('get.students') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'meal_1', name: 'meal_1'},
                    {data: 'meal_2', name: 'meal_2'},
                    {data: 'meal_3', name: 'meal_3'},
                    {data: 'meal_4', name: 'meal_4'},
                    {data: 'meal_5', name: 'meal_5'},
                    {data: 'meal_6', name: 'meal_6'},
                    {data: 'meal_7', name: 'meal_7'},
                    {data: 'meal_8', name: 'meal_8'},
                    {data: 'meal_9', name: 'meal_9'},
                    {data: 'total', name: 'total'}
                ]
            });
        });
    </script>
@endpush