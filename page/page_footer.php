<!-- <script src="asset/javascript/modernizr-2.5.3.min.js"></script> -->
<script src="asset/javascript/jquery-1.7.2.min.js"></script>
<script src="asset/javascript/jquery-ui-1.8.21.custom.min.js"></script>
<script src="asset/javascript/jquery.ui.touch-punch.min.js"></script>
<!-- <script src="asset/javascript/jquery.hoverIntent.minified.js"></script> -->
<script src="asset/javascript/jquery.lightbox.js"></script>
<script src="asset/javascript/bootstrap.min.js"></script>
<script src="asset/javascript/Theme.js"></script>
<script src="asset/tinybox/tinybox.js"></script>
<!-- <script src="asset/javascript/demo.gallery.js"></script> -->

<script>
$(function () {
    Theme.init (); 
});
</script>



    
    <!-- // <script src="asset/javascript/jquery-1.4.min.js" type="text/javascript"></script>  -->
    <script src="asset/javascript/jquery.tipsy.js" type="text/javascript"></script> 
    <script src="asset/javascript/jquery.qtip-1.0.0-rc3.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
       $('area').each(function()
       {
          $(this).qtip(
          {
             content: $(this).attr('alt'),
             style: {
                name: 'red',
                border: {
                   width: 0, 
                   radius: 2 
                }, 
                tip: true
             }
          });
       });
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){   
                
                jQuery("#map-container area").mouseover(function(){
                    var regionMap = '.'+$(this).attr('id')+'-map';              
                    jQuery(regionMap).css('display', 'inline');
                }).mouseout(function(){
                    var regionMap = '.'+$(this).attr('id')+'-map';
                    
                    if (! jQuery(regionMap).hasClass('selected')) {
                        jQuery(regionMap).css('display', 'none');
                    }
                });
                jQuery("#map-container area").click(function(){
                    jQuery('#map-container img.region').removeClass('selected').css('display', 'none');
                    jQuery('#practice-container ul').removeClass('selected').css('display', 'none');
                    
                    var regionMap = '.'+$(this).attr('id')+'-map';              
                    jQuery(regionMap).addClass('selected').css('display', 'inline');                
                });
        });
    </script>

    <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1&appId=512255022189369";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>