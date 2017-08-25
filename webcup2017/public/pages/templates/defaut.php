<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- /.head content -->
    <?php include('public/inc/inc_head.php'); ?>
    <script type="text/javascript">

    $(function() {
        bindElemts();
    });

    function bindElemts() {
        //alert('bindElemts');
           $("#file-input").bind('change',function(e) {
          // ici LOADIMAGE canvas
          loadImage(
              e.target.files[0],
              function (img) {

                  document.body.appendChild(img);
                  $('body>canvas').attr('id','imgupload');
                  LoadAjax();

              },
              {
              maxWidth: 500,
              maxHeight: 500,
              orientation: true,
              canvas: true
          });
         });
    }

    /** POUR UPLOAD IMG JS canvas **/
    function LoadAjax(){
              var canvas1 = document.getElementById('imgupload');
              var ctx = canvas1.getContext("2d");                // Get the context for the canvas.
              var canvasData = canvas1.toDataURL("image/jpeg", 0.9);      // Get the data as an image.

                    $.ajax( {
                        url: 'index.php',
                        method: 'post',
                        data: {
                            dataCanvas: canvasData
                        },
                        success: function ( reponse ) {
                            console.log( "success =" + reponse );
                            $('#imgupload').remove(); 
                            //alert('IMG UPLOAD');
                        },
                        error: function ( reponse ) {
                            console.log( "error =" + reponse );
                        }
                    } );
    }

    </script>
  </head>

  <body>

    <?php include("public/inc/inc_menu.php"); ?>

    <div class="container">

      <div class="starter-template">

        <p><?= $content ?></p>

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
