@extends("layout.ibukota")

@section("content")
    <div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
            <div class="metro-sections">
    
               <div id="section1" class="metro-section tile-span-4">
                   {{ Form::model($presiden1sbyid, array('route' => array('Presidensoekarno.update', $presiden1sbyid->id))) }}
                            <div class="form-group">
                                {{ Form::label('bio', 'Bio') }}
                                {{ Form::text('bio', null, array('class' =>'ckeditor','placeholder'=>'Biografi')) }}
                                {{ '<div>'.$errors->first('bio').'</div>' }}
                            </div>
                            {{ Form::submit('SIMPAN', array('class' => 'ckeditor')) }}
                        {{ Form::close() }}
               </div>
            </div>
            </div>
            </div>
            </div>
            @stop