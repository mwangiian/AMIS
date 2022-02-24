@extends('layouts.client.layout')

@section('sidebar')
<nav id="sidebar">
    <div class="sidebar-header">
        <a href="/index.php">
            <img src="/assets/static/logo.png" alt="JKUAT Logo" />
        </a>
        <h3>JKUAT Attachment <br /> Portal</h3>
        <div style="border-bottom: 1px solid white; width: 80%; margin: 10px auto;"></div>
    </div>

    <ul class="list-unstyled components">
        <p>Menu</p>
        <li>
            <a href="/index.php">
                <span class="icon"><i class="fas fa-home" style="width: 10%;"></i></span>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="#profileSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <span class="icon"><i class="fas fa-user" style="width: 10%;"></i></span>
                <span>Profile</span>
            </a>
            <ul class="collapse list-unstyled" id="profileSubmenu">
                        <li>
                            <a href="/pages/profil">View Profile</a>
                        </li>
                        <li>
                            <a href="/pages/bio-dat">View Bio-data</a>
                        </li>
                    </ul>
        </li>
        <li>
            <a href="/pages/applications/index.php">
                <span class="icon"><i class="fas fa-edit" style="width: 10%;"></i></span>
                <span>Applications</span>
            </a>
        </li>
        <li>
            <a href="/pages/notifications/index.php">
                <span class="icon"><i class="fas fa-bell" style="width: 10%;"></i></span>
                <span>Notifications</span>
            </a>
        </li>
        <li>
            <a href="/pages/saved/index.php">
                <span class="icon"><i class="fas fa-bookmark" style="width: 10%;"></i></span>
                <span>Saved</span></a>
        </li>
        <li>
            <a href="/pages/logbook/index.php">
                <span class="icon"><i class="fas fa-address-book" style="width: 10%;"></i></span>
                <span>Logbook</span></a>
        </li>
        <li>
            <a href="/pages/evaluation/index.php">
                <span class="icon"><i class="fab fa-wpforms" style="width: 10%;"></i></span>
                <span>Evaluation</span></a>
        </li>
    </ul>
</nav>

@endsection