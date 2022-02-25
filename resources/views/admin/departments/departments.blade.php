@extends('layouts.centralservices.layout')

@section('content')

<div id="main-content">
                    
    <section class="notifications-section">
        <div class="page-title">
            <h2>Departments</h2>
        </div>
        <div class="display-box">
            <table class="table">
                <thead>
                    <tr>
                        <th class="custom-border" scope="col">Dept. Name</th>
                        <th class="custom-border" scope="col">Dept. Head</th>
                        <th class="custom-border" scope="col">Date Created</th>
                        <th class="custom-border" scope="col">Posts</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Computing</th>
                        <td>Michael Bay</td>
                        <td>12/05/2020</td>
                        <td>50</td>
                        <td class="actions">
                            <a class="action-button" href="/admin/departments/department">Details</a>
                            <button>
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                    <th scope="row">ICT </th>
                        <td>Michael Bay</td>
                        <td>12/05/2020</td>
                        <td>50</td>
                        <td class="actions">
                            <a class="action-button" href="/admin/departments/department">Details</a>
                            <button>
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>                                    </tr>
                    <tr>
                    <th scope="row">Engineering</th>
                        <td>Michael Bay</td>
                        <td>12/05/2020</td>
                        <td>50</td>
                        <td class="actions">
                            <a class="action-button" href="/admin/departments/department">Details</a>
                            <button>
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>                                    </tr>
                </tbody>
            </table>
        </div>
    </section>                   

</div>

@endsection