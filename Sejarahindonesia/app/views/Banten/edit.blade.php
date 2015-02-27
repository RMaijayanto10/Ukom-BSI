@extends("layout.ibukota")

@section("content")
    <div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
            <div class="metro-sections">
    
               <div id="section1" class="metro-section tile-span-4">
                   {{ Form::model($bantensbyid, array('route' => array('Banten.update', $bantensbyid->id))) }}
                            <div class="form-group">
                                {{ Form::label('teks', 'Teks') }}
                                {{ Form::text('teks', null, array('class' => 'ckeditor','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('teks').'</div>' }}
                            </div>
                            {{ Form::submit('SIMPAN', array('class' => 'ckeditor')) }}
                        {{ Form::close() }}
               </div>
            </div>
            </div>
            </div>
            </div>
            @stop