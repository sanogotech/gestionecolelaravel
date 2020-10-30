@if(Session::has('sucess'))

        <div class="alert alert-success">
            {{Session::get('sucess')}} <strong><i class=" glyphicon glyphicon-thumbs-up"></i></strong>
        </div>


 @endif


 @if(Session::has('supprimer'))

        <div class="alert alert-success">
            {{Session::get('supprimer')}} <strong><i class=" glyphicon glyphicon-thumbs-up"></i></strong>
        </div>


    @endif

     @if(Session::has('modifier'))

        <div class="alert alert-success">
            {{Session::get('modifier')}} <strong><i class=" glyphicon glyphicon-thumbs-up"></i></strong>
        </div>


    @endif