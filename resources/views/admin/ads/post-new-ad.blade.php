@extends('layouts.admin-header')

@section('content')
  <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active">Form Elements</li>
                </ol>
            </div>
            <h4 class="page-title">Post New Ad</h4>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card-box">
         <div class="row">
              <div class="col-12">
                  <div class="p-20">
                      <form class="form-horizontal" role="form" method="post" action="{{Route('create.ads')}}">
                        {{csrf_field()}}
                        @if(Session('success'))
                        <div class="alert alert-success">
                          Ad Posted Successfully!
                        </div>
                        @endif
                          <div class="form-group row">
                              <label class="col-2 col-form-label">Ad Title</label>
                              <div class="col-10">
                                  <input type="text" name="ad_title" class="form-control" value="">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-2 col-form-label" for="name">Name</label>
                              <div class="col-10">
                                  <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-2 col-form-label">Date</label>
                              <div class="col-10">
                                  <input type="date" class="form-control" name="date" value="">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-2 col-form-label">City</label>
                              <div class="col-10">
                                  <input type="text" class="form-control" name="city" placeholder="placeholder">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-2 col-form-label">State</label>
                              <div class="col-10">
                                  <input type="text" class="form-control" name="state" placeholder="placeholder">
                              </div>
                          </div>


                          <div class="form-group row">
                              <label class="col-2 col-form-label">Contact</label>
                              <div class="col-10">
                                  <input type="text" name="contact" class="form-control" value="">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-2 col-form-label">Email</label>
                              <div class="col-10">
                                  <input type="email" name="email" class="form-control" value="">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-2 col-form-label">Description</label>
                              <div class="col-10">
                                  <textarea class="form-control" name="desc" rows="10" col="7"></textarea>
                              </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-2 col-form-label">Comments</label>
                            <div class="col-10">
                              <label class="custom-control custom-checkbox">
                                <input type="checkbox" id="comment" class="custom-control-input">
                                <input type="hidden" id="comment_hidden" name="comments" class="custom-control-input">

                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Enabel/Disable Comments</span>
                              </label>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>

          </div>
          <!-- end row -->
      </div> <!-- end card-box -->
    </div><!-- end col -->
  </div>
@endsection

@section('script')

<script type="text/javascript">
  $(document).ready(function(){
    $("#comment").change(function(){
      if($(this).prop("checked"))
      {
       $("#comment_hidden").val(1);
      }
      else
      {
       $("#comment_hidden").val(0);
      }
    });
  });
</script>

@endsection
