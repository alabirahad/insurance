@extends('admin.adminLayout.index')
@section('contents')
    <div class="main-content-body">
        <div class="content-heading margin-top-20">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="blue bold">Edit Admin</h2>
                </div>
                <div class="col-md-4 text-right">
                    <a href="/admin"  class="table-action edit-btn">Go Back</a>
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


{{-- Start::Content Body --}}
    <form id="userCreateForm" method="POST" enctype="multipart/form-data" action="{{ URL::to('admin/' . $target->id . '/update') }}">
        @csrf
        <div class="row create-body margin-top-40">

            <div class="offset-md-1 col-md-10 margin-top-10">
                <div class="form-group">
                    <input type="text" name="name" class="form-control create-form" id="name" placeholder="Name" value="{{$target->name ?? ''}}">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
            </div>

            <div class="offset-md-1 col-md-10 margin-top-10">
                <div class="form-group">
                    <input type="text" name="email" class="form-control create-form" id="email" placeholder="Email" value="{{$target->email ?? ''}}">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
            </div>

            <div class="offset-md-1 col-md-10 text-center margin-top-20">
                <a href="/admin" class="table-action edit-btn">Cancel</a>
                <button type="submit" class="table-action delete-btn">Save</button>
            </div>
        </div>
    </form>
    {{-- End::Content Body --}}
        </div>
    </div>
@endsection
