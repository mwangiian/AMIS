@extends('layouts.centralservices.layout')

@section('content')
<div id="main-content">
    <div class="page-title">
        <h3>Profile</h3>
    </div>
    <section>
    <form class="mt-3">
        <!-- PERSONAL INFO -->
        <div class="container">

            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" disabled>
            </div>

            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" disabled>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" disabled>
            </div>

            <div class="mb-3">
                <label for="institution" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" disabled>
            </div>
        </div>

    <div class="container text-right mb-3 ">
        <a style="margin-right: 20px;" href="">Reset password</a>
        <a href="/admin/profile/edit-profile" class="btn btn-primary">Edit Profile</a>
    </div>

    </form>
    </section>
</div>
@endsection