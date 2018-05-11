@include('layouts.app-user-new')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">History Book!</li>
      </ol>
      <div class="alert alert-warning" role="alert">
        <strong>Please</strong> ,Complete the payment process and you can provide a review of our package
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data History</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Booking</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Subpaket</th>
                            <th scope="col">Depature</th>
                            <th scope="col">Status</th>
                            <th scope="col">Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($rating as $rt)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$rt ->booking_no}}</td>
                            <td>{{$rt ->detpaket->paket->name}}</td>
                            <td>{{$rt->detpaket->subpaket->name}}</td>
                            <td>{{$rt->departure}}</td>
                            <td>
                               <button class="btn btn-success" disabled="disabled"><i class="success fas fa-check"></i></button>
                            </td>
                            <td>
                                {{-- <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter{{$rt->id}}" ><i class="fas fa-star white-star"></i></button> --}}
                                <button class="btn btn-warning" 
                                    data-toggle="modal"
                                    data-fid="{{$rt->id}}"
                                    data-fstars ="{{$rt->stars}}"
                                    data-fmessage ="{{$rt->message}}" 
                                    data-fconfirm="{{$rt->confirm_rating}}"
                                    data-fname="{{Auth::user()->name}}"
                                    data-target="#ModalEdit" ><i class="fas fa-star white-star"></i></button>
                                {{-- <button type="button" class="btn btn-warning far fa-star" > --}}  
                                </button>
                            
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                      {{--  --}}
                      <!-- Modal -->
                      <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Review Paket</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form role="form" method="post" action="/user/input/rating/" enctype="multipart/form-data">
                                {{-- <form method="post" action="/user/input/rating/{{$rt->id}}"> --}}
                                  {{method_field('put')}}
                                  {{csrf_field()}}
                                  <div class="input-group mb-3 form-group">
                                      <label  for="comment" >Your Account * &ensp;</label>
                                      <input type="text" name="name" id="name" disabled>
                                      <input type="hidden" id="id" name="id"  >
                                      <input type="hidden" id="confirm_rating" name="confirm_rating">
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
                                          <input id="stars2" type="hidden" id="stars2" name="stars">
                                      </section>            
                                  </div>
                          
                                  <div class="form-group">
                                      <label for="comment">Your Message *</label>
                                      <textarea name="message" class="form-control" id="message" rows="5" id="comment"></textarea>
                                      <span class="small text-muted">**Feelings you  our services especially our packages**</span>
                                  </div>
                                
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" value="submit" class="btn btn-primary">Save changes</button>
                          </div>
                          </form
                          </div>
                      </div>
                      </div>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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