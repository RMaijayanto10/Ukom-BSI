@extends("layout.admine")

@section("content")
<div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
            <div class="metro-sections">
   
                  <div class="metro-section tile-span-4" id="section1">
						{{ Form::model($adminsbyid, array('route' => array('Registration.update', $adminsbyid->id))) }}
                            <div class="form-group">
                                {{ Form::label('nama', 'Nama') }}
                                {{ Form::text('email', null, array('class' => 'form-control','placeholder'=>'Email')) }}
                                {{ '<div>'.$errors->first('email').'</div>' }}
                            </div>
                 
                            <div class="form-group">
                                {{ Form::label('password', 'Password') }}
                                {{ Form::text('password', null, array('class' => 'form-control','placeholder'=>'Password')) }}  
                                {{ '<div>'.$errors->first('password').'</div>' }}
                            </div>
                            {{ Form::submit('SIMPAN', array('class' => 'form-control')) }}
                        {{ Form::close() }}
                       </div>
                   </div>
                   <div id="section3" class="metro-section tile-span-3">
                       <div class="tile-group one">
                    
                    </div>
                   </div>
             </div>
           </div> 
         </div>                   
   </div>  
    
   <div id="charms" class="win-ui-dark">
   
      <div id="theme-charms-section" class="charms-section">
         <div class="charms-header">
            <a href="#" class="close-charms win-command">
               <span class="win-commandimage win-commandring">&#xe05d;</span>
            </a>
            <h2>Settings</h2>
         </div>
   
         <div class="row-fluid">
            <div class="span12">
   
               <form class="">
                  <label for="win-theme-select">Change theme:</label>
                  <select id="win-theme-select" class="">
                     <option value="metro-ui-semilight">Semi-Light</option>
                     <option value="metro-ui-light">Light</option>
                     <option value="metro-ui-dark">Dark</option>
                  </select>
               </form>
   
            </div>
         </div>
      </div>
   
   </div>
@stop