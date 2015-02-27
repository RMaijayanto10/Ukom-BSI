@extends("layout.ibukota")

@section("content")
    		<div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
            <div class="metro-sections">
    
               <div id="section1" class="metro-section tile-span-4">
                   <form method="post">
                        <img src="images/Bali.png"/><br />
                        <textarea class="ckeditor" name="teks"></textarea>
                         <div class="alert alert-danger"> 
                            {{ $errors->first('teks') }}</div>
                        <div align="right"><br />
                        <a href="{{URL::to("Bali")}}"><button class="btn">Add</button></a>
                        </div>
                    </form> 
               </div> 
   
               <div id="section2" class="metro-section tile-span-3">
                  <div class="tile-group one">
                  <table>
                     <thead>
                       <tr>
                       <th class="success">   Teks   </th>
                      <th colspan="2" class="success">   Action   </th>
                        </tr>
                     </thead>
                     <tbody>
                  	@foreach($data as $tampil)
                    <tr>
                    	<td class="warning">{{ $tampil->teks  }}</td>
                      <td class="text-center">
                        <a href="{{URL::to("Bali/edit/".$tampil->id) }}"><button class="btn">Edit</button></a>
                        <a href="{{URL::to("Bali/" .$tampil->id. "/destroy")}}"><button class="btn">Hapus</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                   </table>
            <a class="tile half bg-color-greenDark" data-click="transform">
                <div class="tile-content icon">
                    <img src="">
                </div>
            </a>
            <a class="tile half bg-color-greenDark" data-click="transform">
                <div class="tile-content icon">
                    <img src="">
                </div>
            </a>
            <a class="tile half bg-color-greenDark" data-click="transform">
                <div class="tile-content icon">
                    <img src="">
                </div>
            </a>
        </div>  
                </div> 
               </div>
            </div>
   
            <!-- <a id="tiles-scroll-prev" class="win-command carousel-control left" href="#metro-carousel" data-slide="prev">
               <span class="win-commandimage win-commandring">&#xe05d;</span>
            </a>
            <a id="tiles-scroll-next"  class="win-command carousel-control right" href="#metro-carousel" data-slide="next">
               <span class="win-commandimage win-commandring">&#xe059;</span>
            </a> -->
   
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