@extends('layouts.department.layout')

@section('title', 'Dashboard')

@section('content')

            

<div id="main-content">
<section class="welcome-banner">
    <div>
        <p>Welcome back to your</p>
        <h2>Dashboard</h2>
    </div>
</section>
<section class="notifications-section" style="margin-top:20px;">
    <div class="page-title">
        <h5>Notifications</h5>
    </div>
    <div class="notifications-display ">
        <p>No new notifications</p>
    </div>
</section>
<section class="statistics-section">
    <div class="page-title">
        <h5>Statistics</h5>
    </div>
    <div class="statistics-details">
        <div class="graph-summary">
            <p>Applications History</p>
            <div class="chart-wrapper px-0" style="height:30vh;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>
        <div class="summary-cards">
            <div class="pending-approvals">
                <p class="summary-card-title">Pending approvals</p>
                <p class="summary-number">5</p>
            </div>
            <div class="ongoing">
                <p class="summary-card-title">Ongoing Attachments</p>
                <p class="summary-number">1</p>
            </div>
        </div>
    </div>
</section>
</div>

@endsection
