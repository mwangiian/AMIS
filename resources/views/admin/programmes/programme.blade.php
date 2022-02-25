@extends('layouts.centralservices.layout')

@section('content')

<div id="main-content">

    <section class="notifications-section">
        <div class="page-title" >
            <h2>Attachment Programme</h2>
        </div>
        <div class="mt-3" style="display: flex; justify-content: space-between;">
            <div>
                <img src="/img/logo.png" alt="JKUAT Logo" style="width: 30px" />
            <span>ICT Directorate Attachment Opportunity</span>
            </div>
            <button class="action-button" style="border: none">Mail Attachees</button>
            
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h4 class="card-title">Summary</h4>
                <div class="container">
                    <div class="card-text">No of Applicants: 10</div>
                    <div class="card-text">Start Date: 12/03/2022</div>
                    <div class="card-text">End Date: 12/05/2022</div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h4 class="card-title">Description</h4>
                <div class="container">
                    <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, laborum harum commodi animi deserunt incidunt consequuntur hic consequatur dolore architecto quaerat repellendus voluptatum deleniti nam cum. Et fugit doloribus qui perspiciatis necessitatibus esse, aspernatur non. Voluptas, soluta quia vitae tempora labore sunt voluptatum maiores voluptates nam possimus veritatis nisi dolorem!
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="">
        <div class="page-title">
            <h5>Attachment Applicants</h5>
        </div>
        <div class="display-box applicants-list" >
            <table class="table">
                <thead>
                    <tr>
                        <th class="custom-border" scope="col">Name</th>
                        <th class="custom-border" scope="col">Email</th>
                        <th class="custom-border" scope="col">Institution</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">James May</th>
                        <td>jamesmay@gmail.com</td>
                        <td>MMU</td>
                        
                        <td><a class="action-button" href="">View Profile</a></td>
                    </tr>
                    <tr>
                    <th scope="row">Richard Hammond</th>
                        <td>jamesmay@gmail.com</td>
                        <td>MMU</td>
                        
                        <td><a class="action-button" href="">View Profile</a></td>
                    </tr>
                    <tr>
                    <th scope="row">Jeremy Clarkson</th>
                        <td>jamesmay@gmail.com</td>
                        <td>MMU</td>
                        
                        <td><a class="action-button" href="">View Profile</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section

</div>

@endsection