@extends('layouts.department.layout')

@section('title', 'Programmes')

@section('content')
<div id="main-content">
    <div class="page-title">
        <h3>Programmes</h3>
    </div>
    <section>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Reference ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Ref234145</th>
                    <td>ICT Directorate Attachment Opportunity</td>
                    <td>24/03/2022</td>
                    <td>Ongoing</td>
                    <td><a href="/department/programmes/programme" class="btn btn-primary">View Programme</a></td>
                    </tr>

                    <tr>
                    <th scope="row">Ref234145</th>
                    <td>ICT Directorate Attachment Opportunity</td>
                    <td>24/03/2022</td>
                    <td>Ongoing</td>
                    <td><a href="/department/programmes/programme" class="btn btn-primary">View Programme</a></td>
                    </tr>

                    <tr>
                    <th scope="row">Ref234145</th>
                    <td>ICT Directorate Attachment Opportunity</td>
                    <td>24/03/2022</td>
                    <td>Ongoing</td>
                    <td><a href="/department/programmes/programme" class="btn btn-primary">View Programme</a></td>
                    </tr>
                    
                </tbody>
            </table>   
    </section>
</div>

@endsection