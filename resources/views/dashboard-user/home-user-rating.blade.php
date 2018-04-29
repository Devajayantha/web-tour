
@include('layouts.app-user-new')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Ratings</li>
      </ol>
      {{--  ///////////////////////////////////////////////////  --}}
      <!-- Example DataTables Card-->
<section class="content">
    <div class="container">
    <form method="post" action="/user/addrating">
        {{csrf_field()}}
        <div class="input-group mb-3 form-group">
            <label  for="comment" >Your Account * &ensp;</label>
            <input type="text" name="name" value="{{ Auth::user()->name}}" disabled>
            <input type="hidden" name="id_user" value="{{ Auth::user()->id}}" >
        </div>
        
        <div class="form-group">
            <label for="comment">Your Rating *</label>
            <section name="stars" class='rating-widget'>
                <!-- Rating Stars Box -->
                <div class='rating-stars text-center'>
                    <ul id='stars' class="costom-select">
                        <li class='star' title='Poor' data-value='1' value="1">
                              <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Fair' data-value='2' value="2">
                              <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Good' data-value='3' value="3">
                              <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Excellent' data-value='4' value="4">
                                  <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'value="5">
                              <i class='fa fa-star fa-fw'></i>
                        </li>
                    </ul>
                </div>
                <input id="stars2" type="hidden" name="stars">
            </section>            
        </div>

        <div class="form-group">
            <label for="comment">Your Message *</label>
            <textarea name="message" class="form-control" rows="5" id="comment"></textarea>
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
    </div>
</section>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Back" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="/">Back</a>
          </div>
        </div>
      </div>
    </div>