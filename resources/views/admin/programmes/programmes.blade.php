@extends('layouts.centralservices.layout')

@section('content')

<div id="main-content">

    <section class="notifications-section">
        <div class="page-title">
            <h2>Attachment Programmes</h2>
        </div>
        <div class="page-title">
            <h5>Ongoing Programmes</h5>
        </div>
        <div class="display-box">
            <table class="table">
                <thead>
                    <tr>
                        <th class="custom-border" scope="col">Reference ID</th>
                        <th class="custom-border" scope="col">Title</th>
                        <th class="custom-border" scope="col">Start Date - End Date</th>
                        <th class="custom-border" scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">REF234582</th>
                        <td>ICT Directorate Attachment</td>
                        <td>12/05/2020</td>
                        <td>Ongoing</td>
                        <td class="actions">
                            <a class="action-button" href="/admin/programmes/programme">View Programme</a>
                            <button>
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>
    <section class="notifications-section">
        <div class="page-title">
            <h5>Completed Programmes</h5>
        </div>
        <div class="display-box">
            <table id="myTable" class="table ">
                <thead>
                    <tr>
                        <th class="custom-border" scope="col">Reference ID</th>
                        <th class="custom-border" scope="col">Title</th>
                        <th class="custom-border" scope="col">Start Date - End Date</th>
                        <th class="custom-border" scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">REF234582</th>
                        <td>ICT Directorate Attachment</td>
                        <td>12/05/2020</td>
                        <td>Ended</td>
                        <td class="actions">
                            <a class="action-button" href="/admin/programmes/programme">View Programme</a>
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