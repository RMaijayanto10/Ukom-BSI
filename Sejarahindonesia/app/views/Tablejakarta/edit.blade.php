@extends("layout.ibukota")

@section("content")
    <div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
            <div class="metro-sections">
    
               <div id="section1" class="metro-section tile-span-4">
                    {{ Form::model($jakartabyid, array('route' => array('Tablejakarta.update', $jakartabyid->id))) }}
                            <div class="form-group">
                                {{ Form::label('teks', 'Teks') }}
                                {{ Form::text('teks', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('teks').'</div>' }}
                            </div>
                            {{ Form::submit('SIMPAN', array('class' => 'form-control')) }}
                        {{ Form::close() }}
               </div>
            </div>
            </div>
            </div>
            </div>
            @stop