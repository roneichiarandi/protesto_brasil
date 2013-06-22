
    <h1><a href="<?php echo base_url() ?>">Mostrando o que a TV quer esconder!</a></h1>
    
    <div class="row-fluid">
        <div class="span11 offset1">
            <div id='photos-wrap'>
            </div>

            <div class='paginate'>
                <a class='btn btn-large btn-info' style='display:none;' data-max-tag-id='' href='#'>Carregar Mais ...</a>
            </div>
        </div>
    </div>


    <script type="text/template" id="photo-template">
    <div class='photo'>
        <a href='<%= url %>' target='_blank'>
            <img class='main' src='<%= photo %>' width='100%' height='100%' style='display:none;' onload='Instagram.App.showPhoto(this);' />
        </a>
        <img class='avatar' width='40' height='40' src='<%= avatar %>' />
        <span class='heart'><strong><%= count %></strong></span>
    </div>
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-41835799-1', 'renanmpimentel.com');
        ga('send', 'pageview');


        $(function(){
          Instagram.App.init();
          
          // Start with a search on cats; we all love cats.
          Instagram.App.search('<?php echo $this->uri->segment(2) ? $this->uri->segment(2) : "ogiganteacordou" ?>');  
        });


    </script>
