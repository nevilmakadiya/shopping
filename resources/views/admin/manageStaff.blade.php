@include('admin.header')
@include('admin.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Staff</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manage Staff</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Staff Record</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Permission</th>
                                        <th>Login At</th>
                                        <th>Logout At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($staffArray as $item)
                                        <tr>
                                            <td>{{ $item->firstName}}</td>
                                            <td>{{ $item->lastName}}</td>
                                            <td>{{ $item->email}}</td>
                                            <td>{{ $item->contact}}</td>
                                            <td>{{ $item->status}}</td>
                                            <td>{{ $item->role}}</td>
                                            <td>{{ $item->permission}}</td>
                                            <td>{{ $item->login_at}}</td>
                                            <td>{{ $item->logout_at}}</td>
                                            <td>
                                                <a href="editStaff/" class="btn btn-success btn-sm fas fa-edit"> Edit</a>
                                                <a href="deleteStaff" class="btn btn-success btn-sm fas fa-trash-alt"> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Permission</th>
                                        <th>Login At</th>
                                        <th>Logout At</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.footer')
