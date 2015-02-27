@extends("layout.tentangprogrammer")

@section("content")
    <div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
            <div class="metro-sections">
                <div id="section1" class="metro-section tile-span-4">
                  <a class="tile half bg-color-greenDark" data-click="transform">
                    <div class="tile-content icon">
                        <img src="images/Gusdur.jpg"><br /><br />
                        @foreach($datagusdur as $tampil)
                            {{$tampil->bio}}
                        @endforeach
                    </div>
                    </a>
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