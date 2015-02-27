@extends("layout.admine")

@section("content")
<div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
            <div class="metro-sections">
   
                  <div class="metro-section tile-span-5" id="section1">
						<form class="form-inline" method="post">
						  <input placeholder="Email" class="input-lg" type="email" name="email">
				            {{ $errors->first('email') }}<br />
						  <input name="password" type="password" class="input-lg" placeholder="Password">
                			{{ $errors->first('password')}}<br />
                            <div class="right">
                          <a href="{{URL::to('Registration/post')}}"><button class="btn">Create New Admin</button></a>
                          </div>
					   </form><br /><br /><br />
                       <div align="right">
                       <form class="form-search">
                          <input type="text" name="search" class="input-medium search-query">
                          <button class="btn">Search</button>
                       </form>
                       </div>
                       <table class="table table-bordered table-hover striped" id="dataTables-1">
     <thead>
       <tr>
      <th class="success">   No   </th>
      <th class="success">   Email   </th>
       <th class="success">   Password   </th>
      <th colspan="2" class="success">   Action   </th>
        </tr>
     </thead>
     <tbody>
  	@foreach($data as $tampil)
    <tr>
        <td height="21" align="center" valign=" "bottomnowrap="nowrap" class="error">{{ $tampil->id  }}</td>
    	<td height="21" align="center" valign=" "bottomnowrap="nowrap" class="error">{{ $tampil->email  }}</td>
    	<td height="21" align="center" valign=" "bottomnowrap="nowrap" class="warning">{{ $tampil->password  }}</td>
      <td height="21" align="center" valign=" "bottomnowrap="nowrap" class="text-center">
        <a href="{{URL::to("Registration/edit/".$tampil->id) }}"><button class="btn">Edit</button></a>
        <a href="{{URL::to("Registration/" .$tampil->id. "/destroy")}}"><button class="btn">Hapus</button>
      </td>
    </tr>
    @endforeach
  </tbody>
   </table>
                   </div>
                   <div id="section2" class="metro-section tile-span-4">
                       <div class="tile-group one">

                       </div>
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
   <script src="js/jquery/jquery.dataTables.js"></script>
 <script>
    $(function(){
        $('#dataTables-1').dataTable( {
            "bProcessing": true
        } );
    });
 </script> 
   </div>
@stop