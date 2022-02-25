@extends('layouts.centralservices.layout')

@section('content')

<div id="main-content">

    <section class="">
        <div class="page-title">
            <h2>Adverts</h2>
        </div>
    </section>
    <section class="">
        <div class="page-title">
            <h5>Pending Adverts</h5>
        </div>
        <div class="display-box">
            <table class="table">
                <thead>
                    <tr>
                        <th class="custom-border" scope="col">Reference Id</th>
                        <th class="custom-border" scope="col">Title</th>
                        <th class="custom-border" scope="col">Date Posted</th>
                        <th class="custom-border" scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ICT Directorate Attachment Advert</td>
                        <td>12/05/2020</td>
                        <td>Pending</td>
                        <td><a class="action-button"href="/admin/adverts/advert">View Advert</a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </section>
    <section class="">
        <div class="page-title">
            <h5>Approved Adverts</h5>
        </div>
        <div class="display-box">
            <table class="table">
                <thead>
                    <tr>
                        <th class="custom-border" scope="col">Reference Id</th>
                        <th class="custom-border" scope="col">Title</th>
                        <th class="custom-border" scope="col">Date Posted</th>
                        <th class="custom-border" scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ICT Directorate Attachment Advert</td>
                        <td>12/05/2020</td>
                        <td>Approved</td>
                        <td><a class="action-button"href="/admin/adverts/advert">View Advert</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</div>

@endsection