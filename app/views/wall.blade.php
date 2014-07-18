@extends ('default')


@section ('content')
  

    <!-- Begin page content -->

    <div class="page-header">
      <p class="bg-primary"><strong>Title:</strong> {{ $walls->title }}
      <a id="refreshme" href="#" class="pull-right"><span class="glyphicon glyphicon-refresh"></a></p>

    </div>
      
    <div id="blastwall" class="container">
    
      @foreach ($blasts as $blast)

      <div class="list-group">
        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user"></span>

          <p class="list-group-item-text">{{ $blast->message }}<span class="label">{{ $blast->created_at }}</span></p>
          <h6 class="list-group-item-heading"></h6>
        </a>
      </div>
        
      @endforeach
      
    </div>

    <div class="footer">
      <div class="row">
      {{ Form::open(array('url' => 'blasts', 'class'=>'form-inline')) }}

      <div id="blast-message" class="form-group col-xs-9">
      {{ Form::textarea('blast', '', array('placeholder' => 'Type something bitch','class' => 'form-control', 'rows'=>'2')) }}
      </div>

      <div id="blast-button" class="col-xs-3">

      <button type="submit" name="Blast" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-flash">Blast</button>
      </div> 

       {{ Form:: close()}}
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>


@stop