@extends('layouts.department.layout')

@section('content')
<div id="main-content">
    <div class="page-title">
        <h3>Recommendation Letters</h3>
    </div>
    <section>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col" class="align-middle">Check</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="d-flex justify-content-center"><div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked></div></td>
                        <td>Elvin</td>
                        <td>Smith</td>
                        <td>elvinsmith@gmail.com</td>
                        <td>Pending</td>
                        <td><a href="#" class="btn btn-primary">View Profile</a></td>
                    </tr>

                    <tr>
                        <td class="d-flex justify-content-center"><div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked></div></td>
                        <td>Elvin</td>
                        <td>Smith</td>
                        <td>elvinsmith@gmail.com</td>
                        <td>Pending</td>
                        <td><a href="#" class="btn btn-primary">View Profile</a></td>
                    </tr>

                    <tr>
                        <td class="d-flex justify-content-center"><div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked></div></td>
                        <td>Elvin</td>
                        <td>Smith</td>
                        <td>elvinsmith@gmail.com</td>
                        <td>Pending</td>
                        <td><a href="#" class="btn btn-primary">View Profile</a></td>
                    </tr> 
                    
                    <tr>
                        <td class="d-flex justify-content-center"><div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked></div></td>
                        <td>Elvin</td>
                        <td>Smith</td>
                        <td>elvinsmith@gmail.com</td>
                        <td>Pending</td>
                        <td><a href="#" class="btn btn-primary">View Profile</a></td>
                    </tr> 

                    <tr>
                        <td class="d-flex justify-content-center"><div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked></div></td>
                        <td>Elvin</td>
                        <td>Smith</td>
                        <td>elvinsmith@gmail.com</td>
                        <td>Pending</td>
                        <td><a href="#" class="btn btn-primary">View Profile</a></td>
                    </tr> 

                    <tr>
                        <td class="d-flex justify-content-center"><div class="form-check"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked></div></td>
                        <td>Elvin</td>
                        <td>Smith</td>
                        <td>elvinsmith@gmail.com</td>
                        <td>Pending</td>
                        <td><a href="#" class="btn btn-primary">View Profile</a></td>
                    </tr> 
                </tbody>
            </table>
            <div class="container text-right mb-3">
            <button type="submit" class="btn btn-success">Send Letters</button>
            </div>   
    </section>
</div>
@endsection