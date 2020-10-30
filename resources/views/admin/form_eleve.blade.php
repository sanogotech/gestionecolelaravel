@extends('admin.index')
        <!-- /row -->
        <!-- FORM VALIDATION -->

@section('content')












             </div>
             <div class="form-group">
                 <h4><i class="fa fa-angle-right"></i>RENSEIGNER LES INFORMATIONS DE L'ELEVE</h4> 
               
                   

            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post"  action="{{route('insereleve')}}">
                  {{ csrf_field() }}

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Matricule*</label>
                    <div class="col-lg-4">

                      <input class="form-control " id="idmatricule" type="text" name="matricule" required />

                    </div>

                     <label for="curl" class="control-label col-lg-2">Nom*</label>
                    <div class="col-lg-4">
                      
                         <input class="form-control " id="idnom" type="text" name="nom" required />   

                    </div>
                  </div>

                    <div class="form-group ">

                       <label for="curl" class="control-label col-lg-2">Prenom*</label>
                    <div class="col-lg-4">
                      
                         <input class="form-control " id="idprenom" type="text" name="prenom" required />   

                    </div>
                    <label for="cemail" class="control-label col-lg-2">Date Naissance*</label>
                    <div class="col-lg-4">
                     <input class="form-control " size="16" type="date" value="" name="datenaissance">
                    </div>

                     

                 </div>
            


                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Enregistrer</button>
                      <button class="btn btn-theme04" type="reset">Effacer</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>






<script src="{{asset('lib/jquery-1.11.1.min.js')}}" type="text/javascript"></script> 

 

<script src="{{asset('js/modale1.js')}}"></script>
<script src="{{asset('js/modale2.js')}}"></script>
<script src="{{asset('js/modale3.js')}}"></script>

  @endsection

</body>

</html>
