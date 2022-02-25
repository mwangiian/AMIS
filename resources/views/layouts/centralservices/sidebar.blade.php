
@section('sidebar')
<nav id="sidebar">
    <div class="sidebar-header">
        <div class="header-logo">
            <a href= "/admin">
                <img src= "/img/logo.png" alt="JKUAT Logo" />
                <p>IAMIS</p>
            </a>
        </div>
        <div class="header-name">
            <h3>Central Services</h3>
            <div style="border-bottom: 1px solid white; width: 70%; margin: 0 0 5px 0;"></div>
        </div>
    </div>

    <ul class="list-unstyled components">
        <p>MENU</p>
        <li>
            <a href= "/admin">
                <span class="icon"><i class="fas fa-home" style="width: 10%;"></i></span>
                <span>Dashboard</span>
            </a>
        </li>
        <p>ADMIN DUTY</p>
        <li>
            <a href= "/admin/adverts">
                <span class="icon"><i class="fas fa-bullseye" style="width: 10%;"></i></span>
                <span>Adverts</span>
            </a>
        </li>
        <li>
            <a href= "/admin/users">
                <span class="icon"><i class="fas fa-eye" style="width: 10%;"></i></span>
                <span> Users</span>
            </a>
        </li>
        <li>
            <a href= "/admin/departments">
                <span class="icon"><i class="fas fa-users-cog" style="width: 10%;"></i></span>
                <span> Departments</span></a>
        </li>
        <li>
            <a href= "/admin/programmes">
                <span class="icon"><i class="fas fa-link" style="width: 10%;"></i></span>
                <span>Attachment Programmes</span></a>
        </li>
        <p>MAIL</p>
        <li>
            <a href= "/admin/mail">
                <span class="icon"><i class="fas fa-paper-plane" style="width: 10%;"></i></span>
                <span>Mail Applicants</span></a>
        </li>
       
        <p>LETTERS</p>
        <li>
            <a href= "/admin/letters">
                <span class="icon"><i class="fas fa-sticky-note" style="width: 10%;"></i></span>
                <span>View Letters</span></a>
        </li>
    </ul>
</nav>
@endsection