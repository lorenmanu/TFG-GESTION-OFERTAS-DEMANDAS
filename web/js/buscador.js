    $(document).ready(function(){
      $("#search").autocomplete({
        source: '{{ path("oferta_search") }}',
        focus: function( event, ui ) {
                //$( "#search" ).val( ui.item.title ); // uncomment this line if you want to select value to search box
                return false;
              },
            maxShowItems: 0, // Make list height fit to 5 items when items are over 5.
            select: function( event, ui ) {
              window.location.href = ui.item.url;;
            }
          }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
        var inner_html = '<a id="itemResult" href="' + 'http://tfg.local/app_dev.php/showOferta/?id=' + 
        item.id +  '" ><div class="list_item_container"><div id="imgSearch"><img src={{ asset('uploads/brochures/oferta') }}/' + 
        item.image + ' ></div><p id="desSearch">' + item.description + '</p></div></a>';
        return $( "<li></li>" )
        .data( "item.autocomplete", item )
        .append(inner_html)
        .appendTo( ul );
      };
    });