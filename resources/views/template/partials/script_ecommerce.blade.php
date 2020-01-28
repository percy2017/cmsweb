
<div id="myWP"></div>
<script type="text/javascript" src="{{ asset('vendor/mdb/ecommerce/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/mdb/ecommerce/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/mdb/ecommerce/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/mdb/ecommerce/js/mdb.min.js') }}"></script>

<script src="{{ asset('vendor/whatsapp/floating-wpp.js') }}"></script>
<script src="{{ asset('vendor/share/js/jquery.contact-buttons.js') }}"></script>
<script src="{{ asset('vendor/up/js/floating-totop-button.js') }}"></script>

  <script type="text/javascript">
    // whatsapp ------------------------------------
    $('#myWP').floatingWhatsApp({
      phone: '{{ setting('whatsapp.phone') }}',
      popupMessage: '{{ setting('whatsapp.popupMessage') }}',
      message: '{{ setting('whatsapp.message') }}',
      showPopup: true,
      showOnIE: true,
      headerTitle: '{{ setting('whatsapp.headerTitle') }}',
      headerColor: '{{ setting('whatsapp.color') }}',
      backgroundColor: '{{ setting('whatsapp.color') }}',
      buttonImage: '<img src="{{ Voyager::Image(setting('whatsapp.buttonImage' )) }}" />',
      position: '{{ setting('whatsapp.position') }}',
      autoOpenTimeout: {{ setting('whatsapp.autoOpenTimeout') }},
      size: '{{ setting('whatsapp.size') }}'
    });
    
     // Initialize Share-Buttons
    $.contactButtons({
      effect  : 'slide-on-scroll',
      buttons : {
        'facebook':   { class: 'facebook', use: true, link: 'https://www.facebook.com/sharer/sharer.php?u='+window.location, extras: 'target="_blank"' },
        'twitter':   { class: 'twitter', use: true, link: 'https://twitter.com/home?status='+window.location, extras: 'target="_blank"' },
        'whatsapp':   { class: 'whatsapp', use: true, link: 'https://api.whatsapp.com/send?text='+window.location, extras: 'target="_blank"' }
      }
    });

       // buttun up
      $("body").toTopButton({
        // path to icons
        imagePath: '{{ asset('vendor/up/img/icons/') }}',
        // arrow, arrow-circle, caret, caret-circle, circle, circle-o, arrow-l, drop, rise, top
        // or your own SVG icon
        arrowType: 'arrow',

        // 'w' = white
        // 'b' = black
        iconColor: 'w',
        
        // icon shadow
        // from 1 to 16
        iconShadow: 6
      });

  </script>