@extends("layout.ibukota")

@section("content")
    <div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
            <div class="metro-sections">
    
               <div id="section1" class="metro-section tile-span-4">
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
                        <a href="{{URL::to("Tablejakarta/edit/".$tampil->id) }}"><button class="btn">Edit</button></a>
                        <a href="{{URL::to("Tablejakarta/" .$tampil->id. "/destroy")}}"><button class="btn">Hapus</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                   </table>
               </div>
                
               <div id="section2" class="metro-section tile-span-3">
               <div class="tile-group one">
            <a href="{{URl::to("Jakarta")}}" class="tile half bg-color-greenDark" data-click="transform">
                <div class="tile-content icon">
                    <img src="">
                    <span class="app-label">Create sejarah ibukota</span>
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
    </div>
</div>
@stop