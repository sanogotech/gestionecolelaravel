<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('css/exemple.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{asset('js/exemple.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->

        <div class="container">
          <div class="row text-center">
                  <div class="col-12">
              <h1 class="text-muted">Animate Modal</h1>
          </div>
          <div class="col-md-4 col-xs-12">
              <div class="bg-faded p-2 mt-5">
                <h2 class="animated infinite fadeIn text-muted">Fade</h2>
                <div class="lead py-2 px-5" style="background-color:white;max-height:254px;overflow-y:auto">
                  <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-fadeUp"       >Down</button> 
                  <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-fadeRight"  >Left</button>        
                  <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-fadeDown"     >Up</button> 
                  <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-fadeLeft"     >Right</button>
                  <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-fadeUpBig"  >Down</button>
                  <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-fadeRightBig" >Left</button>
                  <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-fadeDownBig"  >Up</button> 
                  <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-fadeLeftBig"  >Right</button>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xs-12">
              <div class="bg-faded p-2 mt-5">
                <h2 class="animated infinite zoomIn text-muted">Zoom</h2>
                <div class="lead py-2 px-5" style="background-color:white;max-height:254px;overflow-y:auto">
                    <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-zoom"       >Center</button>
                    <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-zoomUp"       >Down</button>
                    <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-zoomRight"  >Left</button>
                    <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-zoomDown"   >Up</button>
                    <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-zoomLeft"   >Right</button>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xs-12">
              <div class="bg-faded p-2 mt-5">
                <h2 class="animated infinite shake text-muted">Other</h2>
                <div class="lead py-2 px-5" style="background-color:white;max-height:254px;overflow-y:auto">
                    <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-lightSpeed" >Light Speed</button>
                    <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-flipX"      >Flip Vertical</button>
                    <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-flipY"      >Flip Horizontal</button> 
                    <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-roll"       >Roll</button>
                    <button class="btn btn-secondary btn-round btn-block" data-toggle="modal" data-target=".animate" data-ui-class="a-rotate"     >Rotate</button>
                </div>
              </div>
          </div>
          <div class="col-12">
              <p class="lead p-3 mt-3">More animate visit: <a class="btn btn-link text-muted" href="https://github.com/daneden/animate.css/" target="_blank">https://github.com/daneden/animate.css/</a></p>
          </div>
      </div>
    </div>
    <div class="modal animate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body text-center p-lg">
            <p>Are you sure to execute this action?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>