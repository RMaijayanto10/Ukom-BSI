@extends("layout.preview")

@section("content")
<div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
            <div class="metro-sections">
               <div style="border-style: groove;padding: 10px;" id="section1" class="metro-section tile-span-4">
                  <img src="images/Sumsel.png"/><br /><br />
                    @foreach($datasumsel as $tampil)
                            {{$tampil->teks}}
                        @endforeach
                </div>
                  <div class="tile-group one">
                  <div style="border-style: groove;padding: 10px;" id="section2" class="metro-section tile-span-3">
                  <img src="images/Sumsel.png"/><br /><br />
                    @foreach($datasumsel as $tampil)
                            {{$tampil->teks}}
                        @endforeach
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