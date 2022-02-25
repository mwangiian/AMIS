@extends('layouts.centralservices.layout')

@section('content')

<div id="main-content">
    <!-- Mailing list section -->
    <section class="mail-section">
        <div class="page-title">
            <h5>Mail Attachess</h5>
        </div>
        <div class="email-card">
            <h5>Accepted Applicants Mail</h5>
            <div class="mb-3 container">
                <label for="fname" class="form-label">Subject :</label>
                <input type="text" class="form-control" id="subject" >
            </div>
            <div class="mb-3 container">
                <p>Body :</p>
                <textarea class="form-control" id="professionalSummary" rows="5" required></textarea>
            </div>
            <div class="mb-3 container letter-preview">
                <h5 style="margin-left: 0;">Acceptance Letter :</h5>
                <p>Select Letter :</p>
                <div style="display: flex;">
                    <select name="" id="">
                        <option value="">-- Letter Name --</option>
                        <option value="">Acceptance letter</option>
                    </select>
                    <a href="" class="action-button" style="background-color: var(--primary-color); margin-left:10px;">Preview</a>
                </div>
            </div>
        </div>
        
    </section>
</div>

@endsection