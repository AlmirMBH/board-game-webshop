@extends('layouts.admin')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Providers</h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-right">
                            <a href="{{route('create-providers')}}"><button type="button" class="btn btn-block btn-primary">Add</button></a>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Providers with pagination</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Mobile</th>
                                        <th>Web Url</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($providers as $item)
                                        <tr>
                                            <td>{{$item->company}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->address}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->mobile}}</td>
                                            <td>{{$item->web_url}}</td>
                                            <td>{{$item->email}}</td>
                                            <td><a href="{{route('edit-providers', $item->id)}}">
                                                View</a>


                                        </tr>

                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Company</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Mobile</th>
                                        <th>Web Url</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Are you sure you want to delete this?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <form action="" method="post" id="deleteForm">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@section('script')
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/admin/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            $('.delete-company').click(function () {
                let url = $(this).attr('data-url');
                $("#deleteForm").attr("action", url);
            });
        });
    </script>
@endsection
