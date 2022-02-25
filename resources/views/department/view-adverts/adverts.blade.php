@extends('layouts.department.layout')

@section('title', 'Adverts')

@section('content')
<div id="main-content">
    <div class="page-title">
        <h3>Adverts</h3>
    </div>
    <section>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Vacancies</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><span><img src="/img/logo.png" alt="JKUAT Logo" style="width: 30px" /></span><span class="ml-2">ICT Directorate Attachment Opportunity</span></th>
                    <td>24/03/2022</td>
                    <td>24/05/2022</td>
                    <td>50</td>
                    </tr>
                    <tr>
                    <th scope="row"><span><img src="/img/logo.png" alt="JKUAT Logo" style="width: 30px" /></span><span class="ml-2">ICT Directorate Attachment Opportunity</span></th>
                    <td>24/03/2022</td>
                    <td>24/05/2022</td>
                    <td>50</td>
                    </tr>
                    <tr>
                    <th scope="row"><span><img src="/img/logo.png" alt="JKUAT Logo" style="width: 30px" /></span><span class="ml-2">ICT Directorate Attachment Opportunity</span></th>
                    <td>24/03/2022</td>
                    <td>24/05/2022</td>
                    <td>50</td>
                    </tr>
                </tbody>
            </table>   
    </section>
</div>
@endsection