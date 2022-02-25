@extends('layouts.client.layout')

@section('content')
<div id="main-content">
                    <div class="page-title">
                        <h2>Logbook</h2>
                    </div>
                    <section>
                        <!-- LOGBOOK ENTRIES -->
                        <div class="mb-3 mt-3 container">
                            <div class="mb-3">
                                <h4>Date</h4>
                                <textarea class="form-control" id="logbookEntry" rows="6" disabled></textarea>
                            <div>

                            <div class="mb-3 mt-3">
                                <h4>Date</h4>
                                <textarea class="form-control" id="logbookEntry" rows="6" disabled></textarea>
                            <div>

                            <div class="mb-3 mt-3">
                                <h4>Date</h4>
                                <textarea class="form-control" id="logbookEntry" rows="6" disabled></textarea>
                            <div>
                        </div>
                        <div class="container text-right mt-3 mb-3">
                            <a href="" class="btn btn-primary">Add New Entry</a>                        
                        </div>
                    </section>
                </div>
@endsection