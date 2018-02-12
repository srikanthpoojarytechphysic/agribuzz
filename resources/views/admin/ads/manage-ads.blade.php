@extends('layouts.admin-header')

@section('content')

<div class="row">
  <div class="col-sm-12">
      <div class="page-title-box">
          <div class="btn-group pull-right">
              <ol class="breadcrumb hide-phone p-0 m-0">
                  <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active">Datatable</li>
              </ol>
          </div>
          <h4 class="page-title">Manage Ads</h4>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
       <div class="card-box">
           <h4 class="m-t-0 header-title">All Posted Ads</h4>
           <p class="text-muted font-14 m-b-20">
               Here you can manage all the active ads that have been posted.
           </p>

           <table class="table table-hover">
               <thead>
               <tr>
                   <th>#</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Username</th>
               </tr>
               </thead>
               <tbody>
               <tr>
                   <th scope="row">1</th>
                   <td>Mark</td>
                   <td>Otto</td>
                   <td>@mdo</td>
               </tr>
               <tr>
                   <th scope="row">2</th>
                   <td>Jacob</td>
                   <td>Thornton</td>
                   <td>@fat</td>
               </tr>
               <tr>
                   <th scope="row">3</th>
                   <td colspan="2">Larry the Bird</td>
                   <td>@twitter</td>
               </tr>
               </tbody>
           </table>
       </div>

   </div>
</div>

@endsection
