
@section('sidebar')
<nav id="sidebar">
    <div class="sidebar-header">
        <a href="">
            <img src="/img/logo.png" alt="JKUAT Logo" />
        </a>
        <h3>Department of <br /> Computing</h3>
        <div style="border-bottom: 1px solid white; width: 80%; margin: 10px auto;"></div>
    </div>

    <ul class="list-unstyled components">
        <p>Menu</p>
        <li>
            <a href="/department">
                <span class="icon"><i class="fas fa-chart-line" style="width: 10%;"></i></span>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="/department/new-advert">
                <span class="icon"><i class="fas fa-plus-circle" style="width: 10%;"></i></span>
                <span>New Advert</span>
            </a>
        </li>

        <li>
            <a href="/department/view-adverts">
                <span class="icon"><i class="fas fa-list" style="width: 10%;"></i></span>
                <span>View Adverts</span>
            </a>
        </li>
        <li>
            <a href="/department/view-applications">
                <span class="icon"><i class="fas fa-list-ol"></i></span>
                <span>View Applications</span>
            </a>
        </li>
        <li>
            <a href="/department/programmes">
                <span class="icon"><i class="fas fa-bookmark" style="width: 10%;"></i></span>
                <span>Programmes</span></a>
        </li>
        <li>
            <a href="/department/rec-letters">
                <span class="icon"><i class="fas fa-envelope" style="width: 10%;"></i></span>
                <span>Rec Letters</span></a>
        </li>
    </ul>
</nav>

@endsection