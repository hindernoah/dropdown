  
 <script src="../layout/navigation/jquery.navigation.js"></script>
 <script src="../layout/navigation/bootstrap.navigation.js"></script>

    <script>
    $(document).ready(function(){
    $('.dropdown-submenu a.test').on("click", function(e){
    $(this).parent().parent().find('.dropdown-menu').hide();
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
    </script>

    
    <ul class="top-level-menu-left">
      <li><a href="index.php?page=overview.php">Übersicht</a></li>
    </ul>

    <div class="dropdown">
    <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">Systeme <img src="../layout/images/menu_top_level_arrow_down.png" width="15" height="9"/></div>    
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="#">Verwaltungssystem</a></li>      
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Nutzungssystem <img src="../layout/images/menu_second_level_arrow_right.png" width="9" height="15" /></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Für Eigentümer</a></li>
          <li><a tabindex="-1" href="#">Für Verwaltungen</a></li>               
        </ul>
      </li>        
    </ul>
  </div>

    <div class="dropdown">
    <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">Kunden und Aufträge <img src="../layout/images/menu_top_level_arrow_down.png" width="15" height="9"/></div>    
    <ul class="dropdown-menu">   
     <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Kundenstamm <img src="../layout/images/menu_second_level_arrow_right.png" width="9" height="15" /></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="index.php?page=clients/clients_overview.php">anzeigen und bearbeiten</a></li>       
          <li class="dropdown-submenu">
            <a class="test" href="index.php?page=clients/client_add.php">neuer Kunde erfassen <img src="../layout/images/menu_second_level_arrow_right.png" width="9" height="15" /></a>
            <ul class="dropdown-menu">
              <li><a href="index.php?page=clients/client_add_property_manager.php">Immobilienverwaltung</a></li>
              <li><a href="index.php?page=clients/client_add_condominium_community.php">Stockwerkeigentümergemeinschaft</a></li>
              <li><a href="#">Haus/Abteilung</a></li>
              <li><a href="#">Stockwerkeigentümer</a></li>
              <li><a href="#">Allein- oder Miteigentümer</a></li>
            </ul>
          </li>            
        </ul>
      </li>
    <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Auftragsbuch <img src="../layout/images/menu_second_level_arrow_right.png" width="9" height="15" /></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">anzeigen und bearbeiten</a></li>       
          <li class="dropdown-submenu">
            <a class="test" href="#">neuer Auftrag erfassen <img src="../layout/images/menu_second_level_arrow_right.png" width="9" height="15" /></a>
            <ul class="dropdown-menu">
              <li><a href="#">STWEG-Verwaltung</a></li>
                  <li class="dropdown-submenu">
                    <a class="test" href="#">Nutzungssystem <img src="../layout/images/menu_second_level_arrow_right.png" width="9" height="15" /></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Für Verwaltungen</a></li>
                      <li><a href="#">Für Eigentümer</a></li>
                    </ul>
                  </li>              
            </ul>
          </li>            
        </ul>
      </li>
    </ul>
  </div>

<div class="dropdown">
    <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">Mitarbeiter <img src="../layout/images/menu_top_level_arrow_down.png" width="15" height="9"/></div>    
    <ul class="dropdown-menu">         
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Mitarbeiterstamm <img src="../layout/images/menu_second_level_arrow_right.png" width="9" height="15" /></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">anzeigen und bearbeiten</a></li>
          <li><a tabindex="-1" href="#">neuer Mitarbeiter erfassen</a></li>               
        </ul>
      </li>        
    </ul>
  </div>

<div class="dropdown">
    <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">LivgoCenter <img src="../layout/images/menu_top_level_arrow_down.png" width="15" height="9"/></div>    
    <ul class="dropdown-menu">   
     <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Buchhaltung 2019 <img src="../layout/images/menu_second_level_arrow_right.png" width="9" height="15" /></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Übersicht</a></li> 
          <li><a tabindex="-1" href="#">Neuer Buchungsvorfall erfassen</a></li>                 
        </ul>
      </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Document Center <img src="../layout/images/menu_second_level_arrow_right.png" width="9" height="15" /></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">anzeigen und bearbeiten</a></li> 
          <li><a tabindex="-1" href="#">neues Dokument erfassen</a></li>                 
        </ul>
      </li> 
    </ul>
  </div>
    
<div class="dropdown">
    <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">MyCenter <img src="../layout/images/menu_top_level_arrow_down.png" width="15" height="9"/></div>    
    <ul class="dropdown-menu">         
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Mein Konto <img src="../layout/images/menu_second_level_arrow_right.png" width="9" height="15" /></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Übersicht</a></li>
          <li><a tabindex="-1" href="#">Zeiteintrag erfassen</a></li>
          <li><a tabindex="-1" href="#">Kontoauszug erstellen</a></li>      
        </ul>
      </li>
    <li><a tabindex="-1" href="#">Meine Dokumente</a></li>  
    <li><a tabindex="-1" href="#">Meine Einstellungen</a></li>  
    </ul>
  </div>


<ul class="top-level-menu-right">
    <li><a href="logout.php">Abmelden</a></li>
</ul>
