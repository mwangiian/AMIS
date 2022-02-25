@extends('layouts.centralservices.layout')

@section('content')

<div id="main-content">

    <section class="notifications-section">
        <div class="page-title">
            <h2>Users</h2>
        </div>
        <div class="display-box">
            <table class="table">
                <thead>
                    <tr>
                        <th class="custom-border" scope="col">Date Registered</th>
                        <th class="custom-border" scope="col">Name</th>
                        <th class="custom-border" scope="col">Email</th>
                        <th class="custom-border" scope="col">User Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">12/05/2020</th>
                        <td>Michael Bay</td>
                        <td>michaelbay@gmail.com</td>
                        <td>Attachee</td>
                        <td class="actions">
                            <a class="action-button" href="/admin/users/user">View Profile</a>
                            <button>
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">12/05/2020</th>
                        <td>Michael Bay</td>
                        <td>michaelbay@gmail.com</td>
                        <td>Attachee</td>
                        <td class="actions">
                            <a class="action-button" href="/admin/users/user">View Profile</a>
                            <button>
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">12/05/2020</th>
                        <td>Michael Bay</td>
                        <td>michaelbay@gmail.com</td>
                        <td>Attachee</td>
                        <td class="actions">
                            <a class="action-button" href="/admin/users/user">View Profile</a>
                            <button>
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</div>

@endsection