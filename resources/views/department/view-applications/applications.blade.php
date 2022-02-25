@extends('layouts.department.layout')

@section('content')
<div id="main-content">
    <div class="page-title">
        <h3>View All Applications</h3>
    </div>
    <section>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Reference ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date Posted</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Ref234145</th>
                    <td>ICT Directorate Attachment Opportunity</td>
                    <td>24/03/2022</td>
                    <td></td>
                    <td><a href="/department/view-applications/applicants" class="btn btn-primary">View Applicants</a></td>
                    </tr>
                    <tr>
                    <th scope="row">Ref234145</th>
                    <td>ICT Directorate Attachment Opportunity</td>
                    <td>24/03/2022</td>
                    <td></td>
                    <td><a href="/department/view-applications/applicants" class="btn btn-primary">View Applicants</a></td>
                    </tr>
                    <tr>
                    <th scope="row">Ref234145</th>
                    <td>ICT Directorate Attachment Opportunity</td>
                    <td>24/03/2022</td>
                    <td></td>
                    <td><a href="/department/view-applications/applicants" class="btn btn-primary">View Applicants</a></td>
                    </tr>
                </tbody>
            </table>   
    </section>
</div>

@endsection