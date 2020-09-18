<?php get_header(  ) ;?>

<?php

    // variables
    $lorem_ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

?>

<body  id="top">

<div class="container-fluid bg-dark">

<!-- NAV-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./blog">Blog<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <!-- NAV-->

    <!-- ARROW BUTTON-->
      <a href="#two" id="navigator"><button class="navigator btn btn-lg btn-outline-secondary">&darr;</button></a>
    <!-- END ARROW BUTTON-->
    
    <!-- MOTTO -->
    <div id="destaque" class="text-primary  font-weight-light text-right">
          
        <p>A tecnologia a serviço das pessoas. Nossa proposta é criar ferramentas feitas por seres humanos para seres humanos.</p>

    </div>
    <!-- END MOTTO -->

    <!-- BRAND PANEL-->
    <div class="row row-display bg-dark  marco" id="one">
        <div class="col-md-2"></div>
        <div class="col-md-10"><h1 class="text-light font-weight-bold animated" id="one">Tech</h1><h1 class="text-light font-weight-bold animated">For</h1><h1 class="text-light font-weight-bold animated">Humans</h1>
        </div>
    
    </div>
    <!-- END BRAND -->

    <!-- PANEL TWO -->
    <div class="row  row-display align-items-center bg-light" id="two">
       
        <!-- MAIN IMAGE -->
        <div class="col-md-2"></div>
        <div class="col-md-8"><img class="img-fluid" src="https://techforhumans.com.br/wp-content/themes/minimalist/images/undraw_work_together_h63l.svg" alt=""></div>
        <div class="col-md-2"></div>
        <!-- END MAIN IMAGE -->

    </div>

    <div class="row row-display  marco" id="two1">
    
    <!-- MAIN TEXT -->
    <div class="col-md-1"></div>
        
        <div class="col-md-10">
        
            <h2 class="text-primary text-center">Vamos embarcar na Transformação Digital?</h2>
            
            <?php /* QUERY  transformacao digital*/ 

            $page = array ( 'pagename' => "home/transformacao-digital");

            $query = new WP_Query( $page );
            
            if( $query ){
                $query->the_post( );
            
                echo "<span class=\"lead text-muted\">" . get_the_content(  ) . "</span>";
            
            } else { echo $lorem_ipsum; }
            
            wp_reset_postdata(  );
            
            /* END QUERY */
            ?>
            
        </div>

        <div class="col-md-1"></div>
        <!-- END MAIN TEXT -->


    </div>
    <!-- END PANEL TWO -->

    <div class="row py-5 bg-light text-center  marco" id="three1">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h3 class="text-muted">O que fazemos</h3>
              <p class="lead">Serviços de desenvolvimento, implementação e consultoria</p>
            </div>
            <div class="col-md-4"></div>
    </div>

    <!-- PANEL THREE-->
    <div class="row row-display align-items-center">
            <div class="col-md-4"></div>
            <div class="col-md-4"><img class="image-feature img-fluid" src="https://techforhumans.com.br/wp-content/themes/minimalist/images/undraw_code_thinking_1jeh.svg" alt=""></div>
            <div class="col-md-4"></div>
    </div>
    <!-- END PANEL THREE -->

    <!-- PANEL FOUR -->
    <div class="row text-justify bg-light py-5  marco" id="three">
            
            <?php /* QUERY  transformacao digital*/ 

                $page = array ( 'pagename' => "home/treinamento");

                $query = new WP_Query( $page );

                if( $query ){
                    $query->the_post( );
            ?>

        
        <div class="col-md-4">
            <h3 class="text-muted text-center text-capitalize py-5"><?php echo get_the_title( ) ;?></h3>
            <?php
                echo "<span class=\"lead text-muted\">" . get_the_content(  ) . "</span>";

              } else { echo $lorem_ipsum; }

              wp_reset_postdata(  );

            /* END QUERY */
            ?>
            
        </div>

          <?php /* QUERY  tecnologia da informacao*/ 

            $page = array ( 'pagename' => "home/tecnologia-da-informacao");

            $query = new WP_Query( $page );

            if( $query ){
                $query->the_post( );
            ?>

        <div class="col-md-4">
            <h3 class="text-muted text-center text-capitalize pt-2"><?php echo get_the_title(  ) ;?></h3>
          
          <?php
              echo "<span class=\"lead text-muted\">" . get_the_content(  ) . "</span>";

            } else { echo $lorem_ipsum; }

            wp_reset_postdata(  );

          /* END QUERY */
          ?>
        
        </div>


        <?php /* QUERY  data analytics*/ 

          $page = array ( 'pagename' => "home/data-analytics");

          $query = new WP_Query( $page );

          if( $query ){
              $query->the_post( );
          ?>

        <div class="col-md-4">
            <h3 class="text-muted text-center text-capitalize pt-2"><?php echo get_the_title(  ) ;?></h3>

            <?php
         
              echo "<span class=\"lead text-muted\">" . get_the_content(  ) . "</span>";

              } else { echo $lorem_ipsum; }

              wp_reset_postdata(  );

            /* END QUERY */
            ?>
        
        </div>

    </div>
    <!-- END PANEL FOUR-->

    <!-- CONTACT PANEL -->
    <div class="row row-display text-center bg-dark text-white py-5  marco" id="contac">
        <div class="col-md-2"></div>
        
        <div class="col-md-8">
        
          <?php
            $page = array ( 'pagename' => "contato");

            $query = new WP_Query( $page );

            if( $query ){
                $query->the_post( );
            ?>

              <h3 class="text-mutedr text-capitalize"><?php echo get_the_title(  ) ;?></h3>

            <?php

              echo "<span class=\"text-muted text-light\">" . get_the_content(  ) . "</span>";

              } else { echo $lorem_ipsum; }

              wp_reset_postdata(  );

          /* END QUERY */
          ?>
        
        </div>

        <div class="col-md-2"></div>

    </div>
    <!-- END CONTACT PANEL -->
    
<!-- END Container-->
</div>
<!---BOOTSTRAP JS-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    //animated lead text
    $(document).ready(function(){
        $('.animated').animate(
            {margin: '-5px', opacity: '0.8'}, 1000);
        //setTimeout(()=>$('#destaque').fadeIn(2000),2000);
    });

    // clase marco crea ancla para la navegación 
    var i = 1;
    $('#navigator').click(() =>
        {
            let rows = document.querySelectorAll('.marco');
            let rowsL = rows.length;
            
            if (i == rowsL-1)
            { setTimeout(()=>{$('#navigator').attr('href', '#top')}, 300); return  i = 0; }
            
            else
            { setTimeout(()=>{$('#navigator').attr('href', '#' + rows[i].id)}, 300); return i ++; }
        }
    );

</script>
</body>