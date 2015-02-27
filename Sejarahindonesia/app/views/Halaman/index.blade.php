@extends("layout.index")

@section("content")
    		<div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
            <div class="metro-sections">
    
               <div id="section1" class="metro-section tile-span-4">
   
   
                  <a class="tile wide imagetext bg-color-darken" href="{{URL::to("/login")}}" />
                     <div class="image-wrapper">
                        <img src="images/metro-tiles.jpg" />
                     </div>
                     <div class="column-text">
                        <div class="text4">Mengelola Data</div>
                     </div>
                     <div class="app-label">Super Admin</div>
                  </a>
   
                  <a class="tile wide imagetext wideimage bg-color-red" href="{{URL::to("Preview")}}">
                     <img src="images/appbar.png" alt=""/>
                     <div class="textover-wrapper bg-color-blue">
                        <div class="text2">Sejarah Ibukota di Indonesia</div>
                     </div>
                  </a>
   
                  <a class="tile app wide bg-color-blueDark" href="{{URL::to("Sejarahindonesia")}}">
                     <div class="image-wrapper">
                        <img src="images/Ina.png" alt=""/>
                     </div>
                     <div class="app-label">Sejarah Indonesia</div>
                  </a>
   
                  <a class="tile app bg-color-pink" href="{{URL::to("Peninggalan")}}">
                     <div class="image-wrapper">
                        <span class="icon icon-list-2"></span>
                     </div>
                     <span class="app-label">Peninggalan-peninggalan</span>
                  </a>
   
                  <a class="tile app bg-color-greenDark" href="{{URL::to("Tokohnasional")}}">
                     <div class="image-wrapper">
                        <span class="icon icon-publish"></span>
                     </div>
                     <span class="app-label">Tokoh-Tokoh Nasional</span>
                  </a>
   
                  <a class="tile app bg-color-yellow" href="{{URL::to("Tentangprogrammer")}}">
                     <div class="image-wrapper">
                        <span class="icon icon-images"></span>
                     </div>
                     <span class="app-label">Tentang Programmer</span>
                  </a>
   
                  <a class="tile app bg-color-red" href="{{URL::to("Tentangbsi")}}">
                     <div class="image-wrapper">
                        <span class="icon icon-IcoMoon" ></span>
                     </div>
                     <span class="app-label">Tentang BSI </span>
                  </a>
                   <a class="tile app bg-color-red" href="{{URL::to("Tentangbsi")}}">
                     <div class="image-wrapper">
                     </div>
                     <div align="center"><div id="clockDisplay" class="clockStyle">
                       </div></div>
                  </a> 
               </div> 
               <div id="section2" class="metro-section tile-span-3">
                  <div class="tile-group one">
            <a class="tile half bg-color-greenDark" data-click="transform" href="{{URL::to("Presiden1")}}">
                <div class="tile-content icon">
                    <img src="images/Soekarno.jpg">
                </div>
            </a>
            <a class="tile half bg-color-greenDark" data-click="transform" href="{{URL::to("Presiden2")}}">
                <div class="tile-content icon">
                    <img src="images/Soeharto1.jpg">
                </div>
            </a>
            <a class="tile half bg-darkPink" data-click="transform" href="{{URL::to("Presiden3")}}">
                <div class="tile-content icon">
                    <img src="images/BjHabibi.jpg">
                </div>
            </a>
            <a class="tile half bg-orange" data-click="transform" href="{{URL::to("Presiden4")}}">
                <div class="tile-content icon">
                    <img src="images/Gusdur.jpg">
                </div>
            </a>
            <a class="tile half bg-color-yellow" data-click="transform">
                <div class="tile-content icon">
                    <img src="images/Mega.jpg">
                </div>
            </a>
            <a class="tile half bg-color-yellow" data-click="transform">
                <div class="tile-content icon">
                    <img src="images/Sby.png">
                </div>
            </a>
            <a class="tile half bg-color-pink" data-click="transform">
                <div class="tile-content icon">
                    <img src="images/Jokowi.jpg">
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