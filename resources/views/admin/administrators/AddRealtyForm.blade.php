@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new realty</div>

                <div class="panel-body">
                    You can add new realty here.
                
                    <form class="form-horizontal" role="form" method="POST" action="AddRealty">

                             {{ csrf_field() }}


                    <div class="form-group">    
                         
                        <label for="ulica" class="col-md-4 control-label">Ulica</label>

                            <div class="col-md-6">
                                <input class="form-control" type="ulica" name="ulica" value="{{ old('ulica') }} "> <br>
                            </div>
                    </div>


                    <div class="form-group">    

                        <label for="cena" class="col-md-4 control-label">Cena</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="cena"><br>
                            </div>
                    </div>


                        <div class="form-group">
                                
                                <div class="col-md-6 col-md-offset-4">
                                           <button type="submit" class="btn btn-success">
                                                        Add
                                            </button>
                                 </div>
                         </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
