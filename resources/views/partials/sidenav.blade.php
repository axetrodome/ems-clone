 <ul class="sidenav sidenav-fixed">
   <li>
    <div class="user-view">
     <div class="background">
       <img src="https://img00.deviantart.net/c9ed/i/2017/087/8/a/boku_no_hero_academia__dabi_wallpaper_by_rendracula-db3ttz2.png">
     </div>
     <a href="#user"><img class="circle" src="https://images2.alphacoders.com/862/862663.jpg"></a>
     <a href="#name"><span class="white-text name">{{ my()->name }}</span></a>
     <a href="#email"><span class="white-text email">{{ my()->email }}</span></a>
   </div>
  </li>
    {{ $slot }}
 </ul>
