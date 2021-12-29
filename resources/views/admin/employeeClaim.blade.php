@extends('admin.adminLayout.index')
@section('contents')
<div class="main-content-body">
    <div class="content-heading margin-top-20">
        <h2 class="blue bold">Employee's Claim List</h2>
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
                    <th scope="col">Policy No.</th>
                    <th scope="col">Policy Holder Name</th>
                    <th scope="col">Contact Person Name </th>
                    <th scope="col">Contact Person Email </th>
                    <th scope="col">Name of Applicant </th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @if (!$EmployeeClaim->isEmpty())
                <?php $sl = 1;?>
                    @foreach ($EmployeeClaim as $data)
                    <tr>
                        <th scope="row">{{$sl++}}</th>
                        <td>{{$data->policy_no ?? ''}}</td>
                        <td>{{$data->policy_holder_name ?? ''}}</td>
                        <td>{{$data->contact_person_name ?? ''}}</td>
                        <td>{{$data->contact_person_email ?? ''}}</td>
                        <td>{{$data->applicant_name ?? ''}}</td>
                        <td>
                            <form action="{{ URL::to('admin-employee-claim/' . $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="button" class="table-action edit-btn">Edit</button>
                                <button type="submit" class="table-action delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="7" class="red">No Claim found</td>
                </tr>
                @endif

            </tbody>
        </table>
    </div>
</div>

@endsection