<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>QuicSolv</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="assets/favicon.ico">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="assets/lib/@fortawesome/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="assets/lib/ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="assets/lib/select2/css/select2.min.css">
<link rel="stylesheet" href="assets/css/billing.css">
<link rel="stylesheet" href="assets/css/pages/auth.css">
<link rel="stylesheet" href="assets/css/pages/calendar.css">
<link rel="stylesheet" href="assets/css/pages/chat.css">
<link rel="stylesheet" href="assets/css/pages/contacts.css">
<link rel="stylesheet" href="assets/css/pages/dashboard.css">
<link rel="stylesheet" href="assets/css/pages/filemgr.css">
<link rel="stylesheet" href="assets/css/pages/landing.css">
<link rel="stylesheet" href="assets/css/pages/profile.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="mat-typography">
<div class="content pd-0">

<div class="content-header d-flex justify-content-end align-items-center">
<header class="navbar-menu-wrapper">
<nav class="navbar navbar-expand-lg navbar-light wd-100p">
<a href="javascript:void(0)" class="aside-logo bg-white rounded pd-5">
<img class="navbar-brand" src="assets/img/logo.png" height="45" alt="QuicSolv" />
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="javascript:void(0)">Billing List</a>
</li>
<li class="nav-item">
<a class="nav-link" href="javascript:void(0)">DocsApp Billing</a>
</li>
</ul>
<div class="ml-auto">
<ul class="navbar-nav">
<li class="nav-item active">
<a href="login" class="nav-link">
<i class="feather-16 mg-x-5" data-feather="log-out"></i>
Logout
</a>
</li>
</ul>
</div>
</div>
</nav>
</header>
</div>

<div class="content-body pd-0">
<main class="container main-container pd-y-15" role="main">
<div class="row no-gutters">
<div class="col-12 col-lg-12 col-xl-12 mg-t-10">
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-style1 mg-b-10">
<li class="breadcrumb-item">
<a routerLink="/admin/dashboard">Dashboard</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Billing List</li>
</ol>
</nav>
</div>
<div class="col-12 col-lg-12 col-xl-12 mg-t-10">
<div class="card">
<div class=" card-header card-header-filter-list pd-y-10 d-md-flex align-items-center justify-content-between">
<h5 class="mg-b-0">Billing List</h5>
<ul class="list-inline d-flex mg-t-20 mg-sm-t-10 mg-md-t-0 mg-b-0">
<li class="list-inline-item d-flex align-items-center mg-l-5">
<a href="createbilling"  type="button" class="btn btn-sm btn-primary btn-uppercase custom-btn">Create
<i class="feather-16 mg-r-5" data-feather="plus-circle"></i>
</a>

<!-- </button> -->
</li>
</ul>
</div>
{{session('message')}}

<div class="card-body pos-relative pd-0">
<div class="pd-x-20 pd-y-10">
<div class="table-responsive custom-table-list">
<table id="billing_list_table" class="table table-bordered table-sm" style="width: 100%">
<thead class="thead-secondary custom-thead">
<tr>
    <th scope="col">Sr.</th>
    <th scope="col" class="table-action-header">File Name</th>
    <th scope="col">Invoice Date</th>
    <th scope="col">Total Invoice</th>
    <th scope="col" class="table-action-header">Company Name</th>
    <th scope="col">Kind Attn.</th>
    <th scope="col" class="table-action-header custom-table-action-header">Action</th>
</tr>
</thead>
<tbody>

@foreach($data as $count())
<tr>
<td>{{$list->rec_id}}</td>
<td>{{$list->company_name}}</td>
<td>{{$list->invoice_date}}</td>
<td></td>
<td>{{$list->company_name}}</td>
<td>
    <a class="user_list_table_link" href="javascript:void(0)" data-toggle="modal">
        <i class="feather-16" data-feather="download"></i>
        <span class="d-none d-sm-inline mg-l-5">Download</span>
    </a>
    <span class="mx-2">|</span>
    <a class="user_list_table_link" href="billinglistinfo" data-toggle="modal">
        <i class="feather-16" data-feather="eye"></i>
        <span class="d-none d-sm-inline mg-l-5">
        View
        </span>
    </a>
    <span class="mx-2">|</span>
    <a class="user_list_table_link" href="billinglist/delete/{{$list->rec_id}}" data-toggle="modal">
        <i class="feather-16" data-feather="trash-2"></i>
        <span class="d-none d-sm-inline mg-l-5">
        Delete
        </span>
    </a>
    </td>
</tr>
</tbody>
@endforeach 
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</main>

<footer class="footer bg-light">
<div class="container-fluid">
<div class="row">
<div class="col-12"> &copy; All Rights Reserved</div>
</div>
</div>
</footer>
</div>
</div>
<div class="modal fade effect-scale" id="delete_billing_file_info" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-m" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="modal-title">Delete Billing file</h6>
<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="deleteclose">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<p class="mg-b-0">
Do you really want to delete this billing file ? If deleted then corresponding invoices are also get
deleted.
</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
Cancel
</button>
<button type="button" class="btn btn-danger btn-sm">
Delete
</button>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/lib/select2/js/select2.min.js"></script>
<script src="assets/lib/feather-icons/feather.min.js"></script>
<script src="assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/billing.js"></script>
<script src="assets/js/billing.aside.js"></script>
<script>
feather.replace()
</script>
<script>
$(document).ready(function() {
$('#billing_list_table').DataTable({
"paging":   true,
"ordering": true,
"info":     true
});
});
</script>
</body>

</html>