jQuery(document).ready(function( $ ) {

    class Search{
    
        constructor(){
            this.artist = $('input#searchA');
            this.song = $('input#searchT');
            this.btnSearch = $('#searchSongs');
            this.events();
        
        }
        // events
        events(){
            this.artist.on('keydown', this.getValArtist.bind(this) );
            this.song.on('keydown', this.getValSong.bind(this) );
            this.btnSearch.on('click', this.typingLogic.bind(this));
        }
        // methods
        getValArtist(){
            var artist = this.artist.val();   
        }
        getValSong(){
            var song = this.song.val();
        }
        typingLogic(){
            console.log("da clci");
          
            $.ajax({
                url: 'https://supercube.biz/wp-admin/admin-ajax.php?searchA=&searchT=hello&action=supercube_search_songs&security=741ca62478',
                type: 'GET',
                dataType: 'jsonp',
                contentType: "text/html; charset=UTF-8",
              
                success: function(data){
                    alert(data);
                    //process the JSON data etc
                }
            })

       
        }
    }
    class buttonNav{
        constructor(){
            this.buttonNav = $(('button.navbar-toggler'));
            this.eventClick();
        }
        // events
        eventClick(){
            var btn = this.buttonNav;
            this.buttonNav.on('click', function(){
             
                var collapse = btn.attr('aria-expanded');
                console.log(collapse);
                if(collapse == "false"){
                    $('.sticky-wrapper').css({
                        background: 'black',
                        height: '100vh',
                        zIndex: 99,
                    });
                }else{
                    $('.sticky-wrapper').css({
                        background: 'none',
                        height: 'auto',
                    });
                }
            });
        }
    }
var search = new Search();
var collapse = new buttonNav();
});
