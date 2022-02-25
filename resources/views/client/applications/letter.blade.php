@extends('layouts.client.layout')

@section('title', 'Letter')

@section('content')
<div id="main-content">
                    <div class="page-title">
                        <h2>Attachment Letter</h2>
                    </div>
                    <section>
                        <div>
                            <p>Letter Preview:</p>
                        </div>
                            <div style="margin-top:10px;">
                                    <button class="btn btn-danger">Reject</button>
                                    <button class="btn btn-primary">Accept</button>
                            </div>
                                <!-- Reason for rejecting attachment -->
                            <div style="margin-top:10px;">
                                <p>Reasons for rejecting attachment:</p>
                                <textarea class="w-100 rounded" name="attachment-reject" id="" cols="" rows="8"></textarea>
                            </div>
                            <!-- <div class="mb-3" style="margin-top:10px;">
                                <label for="dateOfBirth" class="form-label">Reason for rejecting attachment</label>
                                <input type="text" class="form-control" id="attachment-rejection">
                            </div> -->
                    </section>
                </div>
@endsection