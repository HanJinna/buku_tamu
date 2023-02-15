<!-- close sidebar menu -->
<div class="dismiss">
<i class="fas fa-arrow-left"></i>
</div>

<div class="logo">
<h3><a href="index.html">Tugas Akhir</a></h3>
</div>

<ul class="list-unstyled menu-elements">
<li class="active">
<a href="{{ route ('Dashboard.index') }}"><i class="fas fa-home"></i> Dashboard</a>
</li>
<li>
<a href="{{ route ('Data_Pengunjung.index') }}"><i class="fas fa-cog"></i> Pengunjung</a>
</li>
<!-- <li>
<a class="scroll-link" href="#section-2"><i class="fas fa-user"></i> Admin</a>
</li>
 --><li>
<a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
<i class="fas fa-user"></i>Admin
</a>
<ul class="collapse list-unstyled" id="otherSections">
<!-- <li>
<a class="scroll-link" href="">Statistika</a>
</li> -->
<li>
<a href="{{ route ('export_data.index') }}">Export Data</a>
</li>
</ul>
<!-- <li>
<a class="scroll-link" href="#section-5"><i class="fas fa-pencil-alt"></i> Portfolio</a>
</li> -->
<li>
<a class="scroll-link" href="#section-6"><i class="fas fa-envelope"></i> Contact us</a>
</li>
</li>
</ul>


<div class="to-top">
<a class="btn btn-primary btn-customized-3" href="#" role="button">
<i class="fas fa-arrow-up"></i> Top
</a>
</div>

<div class="dark-light-buttons">
<a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
<a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
</div>