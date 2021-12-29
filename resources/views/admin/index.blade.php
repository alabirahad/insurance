@extends('admin.adminLayout.index')
@section('contents')
    <div class="main-content-body">
        <div class="content-heading margin-top-20">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="blue bold">Admin List</h2>
                </div>
                <div class="col-md-4 text-right">
                    <a href="/admin/create"  class="table-action edit-btn">Add New Admin</a>
                </div>
            </div>
        </div>

        <div class="content-table margin-top-40">

    <?php
$ses_msg = Session::has('success');
if (!empty($ses_msg)) {
    ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <p><i class="fa fa-bell-o fa-fw"></i> <?php echo Session::get('success'); ?></p>
    </div>
    <?php
}// 
$ses_msg = Session::has('error');
if (!empty($ses_msg)) {
    ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <p><i class="fa fa-bell-o fa-fw"></i> <?php echo Session::get('error'); ?></p>
    </div>
    <?php
}// ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (!$user->isEmpty())
                    <?php $sl = 1;?>
                    @foreach ($user as $data)
                    <tr>
                        <th scope="row">{{$sl++}}</th>
                        <td>{{$data->name ?? ''}}</td>
                        <td>{{$data->email ?? ''}}</td>
                        <td>
                            <form action="{{ URL::to('admin/' . $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <a href="{{ URL::to('admin/' . $data->id . '/edit') }}" class="table-action edit-btn">Edit</a>
                                <button type="submit" class="table-action delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="4" class="red">No admin found</td>
                    </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection
