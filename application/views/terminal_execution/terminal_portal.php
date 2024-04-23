<?php 

$this->load->view('master_page/terminal_header');
$this->load->view('master_page/terminal_navbar');
$this->load->view('master_page/terminal_sidebar');

?>

<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


<div id="content" class="app-content">

<div class="row">

<div class="col-xl-3 col-lg-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">INTRUDER STATS</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>

<?php 

$countIntruder = $this->db->query("SELECT * FROM user_directory");

?>

<div class="row align-items-center mb-2">
<div class="col-7">
<h3 class="mb-0"><?php echo $countIntruder->num_rows(); ?></h3>
</div>
<div class="col-5">
<div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
</div>
</div>


<div class="small text-inverse text-opacity-50 text-truncate">
<i class="fa fa-chevron-up fa-fw me-1"></i> Intruder Counting From Database<br>
<i class="far fa-user fa-fw me-1"></i> 45.5% new visitors<br>
<i class="far fa-times-circle fa-fw me-1"></i> 3.25% bounce rate
</div>

</div>


<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>

</div>

</div>


<div class="col-xl-3 col-lg-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">MALWARE STATS</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="row align-items-center mb-2">
<div class="col-7">
<h3 class="mb-0">4</h3>
</div>
<div class="col-5">
<div class="mt-n2" data-render="apexchart" data-type="line" data-title="Visitors" data-height="30"></div>
</div>
</div>


<div class="small text-inverse text-opacity-50 text-truncate">
<i class="fa fa-chevron-up fa-fw me-1"></i> 20.4% more than last week<br>
<i class="fa fa-shopping-bag fa-fw me-1"></i> 33.5% new orders<br>
<i class="fa fa-dollar-sign fa-fw me-1"></i> 6.21% conversion rate
</div>

</div>


<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>

</div>

</div>


<div class="col-xl-3 col-lg-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">NEW MEMBERS</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="row align-items-center mb-2">
<div class="col-7">
<h3 class="mb-0">4,490</h3>
</div>
<div class="col-5">
<div class="mt-n3 mb-n2" data-render="apexchart" data-type="pie" data-title="Visitors" data-height="45"></div>
</div>
</div>


<div class="small text-inverse text-opacity-50 text-truncate">
<i class="fa fa-chevron-up fa-fw me-1"></i> 59.5% more than last week<br>
<i class="fab fa-facebook-f fa-fw me-1"></i> 45.5% from facebook<br>
<i class="fab fa-youtube fa-fw me-1"></i> 15.25% from youtube
</div>

</div>


<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>

</div>

</div>


<div class="col-xl-3 col-lg-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">BANDWIDTH</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="row align-items-center mb-2">
<div class="col-7">
<h3 class="mb-0">4.5TB</h3>
</div>
<div class="col-5">
<div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
</div>
</div>


<div class="small text-inverse text-opacity-50 text-truncate">
<i class="fa fa-chevron-up fa-fw me-1"></i> 5.3% more than last week<br>
<i class="far fa-hdd fa-fw me-1"></i> 10.5% from total usage<br>
<i class="far fa-hand-point-up fa-fw me-1"></i> 2MB per visit
</div>

</div>


<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>

</div>

</div>


<div class="col-xl-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">SERVER STATS</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="ratio ratio-21x9 mb-3">
<div id="chart-server"></div>
</div>


<div class="row">

<div class="col-lg-6 mb-3 mb-lg-0">
<div class="d-flex align-items-center">

<div class="w-50px h-50px">
<div data-render="apexchart" data-type="donut" data-title="Visitors" data-height="50"></div>
</div>


<div class="ps-3 flex-1">
<div class="fs-10px fw-bold text-inverse text-opacity-50 mb-1">DISK USAGE</div>
<div class="mb-2 fs-5 text-truncate">20.04 / 256 GB</div>
<div class="progress h-3px bg-secondary-transparent-2 mb-1">
<div class="progress-bar bg-theme" style="width: 20%"></div>
</div>
<div class="fs-11px text-inverse text-opacity-50 mb-2 text-truncate">
Last updated 1 min ago
</div>
<div class="d-flex align-items-center small">
<i class="bi bi-circle-fill fs-6px me-2 text-theme"></i>
<div class="flex-1">DISK C</div>
<div>19.56GB</div>
</div>
<div class="d-flex align-items-center small">
<i class="bi bi-circle-fill fs-6px me-2 text-theme text-opacity-50"></i>
<div class="flex-1">DISK D</div>
<div>0.50GB</div>
</div>
</div>

</div>
</div>


<div class="col-lg-6">
<div class="d-flex">

<div class="w-50px pt-3">
<div data-render="apexchart" data-type="donut" data-title="Visitors" data-height="50"></div>
</div>


<div class="ps-3 flex-1">
<div class="fs-10px fw-bold text-inverse text-opacity-50 mb-1">BANDWIDTH</div>
<div class="mb-2 fs-5 text-truncate">83.76GB / 10TB</div>
<div class="progress h-3px bg-secondary-transparent-2 mb-1">
<div class="progress-bar bg-theme" style="width: 10%"></div>
</div>
<div class="fs-11px text-inverse text-opacity-50 mb-2 text-truncate">
Last updated 1 min ago
</div>
<div class="d-flex align-items-center small">
<i class="bi bi-circle-fill fs-6px me-2 text-theme"></i>
<div class="flex-1">HTTP</div>
<div>35.47GB</div>
</div>
<div class="d-flex align-items-center small">
<i class="bi bi-circle-fill fs-6px me-2 text-theme text-opacity-50"></i>
<div class="flex-1">FTP</div>
<div>1.25GB</div>
</div>
</div>

</div>
</div>

</div>

</div>


<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>

</div>

</div>


<div class="col-xl-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">TRAFFIC ANALYTICS</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="ratio ratio-21x9 mb-3">
<div id="world-map" class="jvectormap-without-padding"></div>
</div>


<div class="row gx-4">

<div class="col-lg-6 mb-3 mb-lg-0">
<table class="w-100 small mb-0 text-truncate text-inverse text-opacity-60">
<thead>
<tr class="text-inverse text-opacity-75">
<th class="w-50">COUNTRY</th>
<th class="w-25 text-end">VISITS</th>
<th class="w-25 text-end">PCT%</th>
</tr>
</thead>
<tbody>
<tr>
<td>FRANCE</td>
<td class="text-end">13,849</td>
<td class="text-end">40.79%</td>
</tr>
<tr>
<td>SPAIN</td>
<td class="text-end">3,216</td>
<td class="text-end">9.79%</td>
</tr>
<tr class="text-theme fw-bold">
<td>MEXICO</td>
<td class="text-end">1,398</td>
<td class="text-end">4.26%</td>
</tr>
<tr>
<td>UNITED STATES</td>
<td class="text-end">1,090</td>
<td class="text-end">3.32%</td>
</tr>
<tr>
<td>BELGIUM</td>
<td class="text-end">1,045</td>
<td class="text-end">3.18%</td>
</tr>
</tbody>
</table>
</div>

<?php 
$this->load->view('master_page/terminal_footer');

?>