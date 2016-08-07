<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Social Wall</title>
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <!-- Lobster Font -->
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="css/admin.css">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    
 
    

</head>
<body>
   <!-- ===== HEADER ======== -->
    <header>
        <div class="container-fluid">   
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="title text-left">SocialWallLogo</h1>
                </div>
            </div>    
        </div>            
    </header>
    <!-- ==================== -->
    
    <section class="admin-panel">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2 text-center">
                    <h1>SocialWall Administration Panel</h1>
                   
                     <p class=lead>Welcome user. You are in control now. In this page you can configure the <strong><em>tags</em></strong> and <strong><em>usernames</em></strong> of each social network you want to be displayed in the SocialWall. You just have to fill the forms down here.</p>
                     <p>If you ever change your opinion about one search filter you can always remove it out through the Hashtag's &amp; Username's Pool.</p>
                      <hr>
                </div>       
            </div>
            <div class="row">
                 <div class="row">
                     <div class="col-xs-8 col-xs-offset-2">
                         <div class="col-xs-4 ig-section">
                   <div class="text-center">
                        <i class="fa fa-instagram"></i>
                    </div>
                    <div class="form-group">
                        <label for="tags">Instagram User:</label>
                        <input type="text" id="instagram-user" class="form-control">
                        <input type="button" id="instagram-user-button" class="btn btn-sm btn-success" value="Add user">
                    </div>
                    <div class="form-group">
                        <label for="tags">Instagram Tags:</label>
                        <input type="text" id="instagram-hashtag" class="form-control">
                        <input type="button" id="instagram-hashtag-button" class="btn btn-sm btn-success" value="Add tag">
                    </div>
                </div>
                  <div class="col-xs-4 tw-section">
                   <div class="text-center">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="form-group">
                        <label for="tags">Twitter User:</label>
                        <input type="text" id="twitter-user" class="form-control" >
                        <input type="button" id="twitter-user-button" class="btn btn-sm btn-success" value="Add user">
                    </div>
                    <div class="form-group">
                        <label for="tags">Twitter Tags:</label>
                        <input type="text" id="twitter-hashtag" class="form-control">
                        <input type="button" id="twitter-hashtag-button" class="btn btn-sm btn-success" value="Add tag">
                    </div>
                </div>
                  <div class="col-xs-4 fb-section">
                   <div class="text-center">
                        <i class="fa fa-facebook"></i>
                    </div>
                    <div class="form-group">
                        <label for="tags">Facebook User:</label>
                        <input type="text" id="facebook-user" class="form-control">
                        <input type="button" id="facebook-user-button" class="btn btn-sm" value="Add user">
                    </div>
                    <div class="form-group">
                        <label for="tags">Facebook Tags:</label>
                        <input type="text" id="facebook-hashtag" class="form-control">
                        <input type="button" id="facebook-hashtag-button" class="btn btn-sm" value="Add tag">
                    </div>
                </div>   
                     </div>
                 </div>
                 
                 <!-- INIT FORM -->
                 <form action="index.php" method="post" target="_blank">
                  
                  <div class="row pool">
                     <div class="col-xs-8 col-xs-offset-2">
                         <h3>Hashtag's &amp; Username's Pool</h3>
                       
                     </div>
                      <div class="col-xs-8 col-xs-offset-2">
                          <div class="tagpool"></div>
                      </div>
                      
                  </div>
                <div class="row">
                     <div class="col-xs-8 col-xs-offset-2">
                         <h3>Select the style you like more</h3>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-xs-8 col-xs-offset-2">
                         <div class="row theme-styles">
                             <div class="col-xs-4 text-center theme">
                                 <img src="images/theme-1.jpg" class="img-responsive" alt="">
                                White<input type="radio" name="check-theme" id="radio1" value="index.php"checked >
                             </div>
                             <div class="col-xs-4 text-center theme">
                                 <img src="images/theme-2.jpg" value="index2.php" class="img-responsive" alt="">
                                 WhiteBorderer<input type="radio" id="radio2" value="index2.php" name="check-theme">
                             </div>
                             <div class="col-xs-4 text-center theme">
                                 <img src="images/theme-3.jpg" value="index3.php" class="img-responsive" alt="">
                                 BlackBorderer<input type="radio" id="radio3" value="index3.php" name="check-theme">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-xs-8 col-xs-offset-2">
                         <h3>Select the number of columns you want to display</h3>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-xs-8 col-xs-offset-2">
                         <input type="range" id="columns-number" name="columns" min=3 max=7 step=1>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-xs-8 col-xs-offset-2">
                       <div class="row" id="columns-row-3">
                             <div class="col-xs-4 text-center"><h4>1</h4></div>
                             <div class="col-xs-4 text-center"><h4>2</h4></div>
                             <div class="col-xs-4 text-center"><h4>3</h4></div>
                         </div>
                        <div class="row" id="columns-row-4">
                             <div class="col-xs-2 col-xs-offset-2 text-center"><h4>1</h4></div>
                             <div class="col-xs-2 text-center"><h4>2</h4></div>
                             <div class="col-xs-2 text-center"><h4>3</h4></div>
                             <div class="col-xs-2 text-center"><h4>4</h4></div>
                         </div>
                         <div class="row" id="columns-row-5">
                             <div class="col-xs-2 col-xs-offset-1 text-center"><h4>1</h4></div>
                             <div class="col-xs-2 text-center"><h4>2</h4></div>
                             <div class="col-xs-2 text-center"><h4>3</h4></div>
                             <div class="col-xs-2 text-center"><h4>4</h4></div>
                             <div class="col-xs-2 text-center"><h4>5</h4></div>
                         </div>
                         <div class="row" id="columns-row-6">
                             <div class="col-xs-2 text-center"><h4>1</h4></div>
                             <div class="col-xs-2 text-center"><h4>2</h4></div>
                             <div class="col-xs-2 text-center"><h4>3</h4></div>
                             <div class="col-xs-2 text-center"><h4>4</h4></div>
                             <div class="col-xs-2 text-center"><h4>5</h4></div>
                             <div class="col-xs-2 text-center"><h4>6</h4></div>
                         </div>
                        <div class="row" id="columns-row-7">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4 text-center ignore"></div> <!-- this column empty -->
                                    <div class="col-md-4 text-center"><h4>1</h4></div>
                                    <div class="col-md-4 text-center"><h4>2</h4></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-2 text-center"><h4>3</h4></div>
                                    <div class="col-md-2 text-center"><h4>4</h4></div>
                                    <div class="col-md-2 text-center"><h4>5</h4></div>
                                    <div class="col-md-2 text-center"><h4>6</h4></div>
                                    <div class="col-md-2 text-center"><h4>7</h4></div>
                                    <div class="col-md-2 text-center ignore"></div> <!-- this column empty -->
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
                <div class="row">
                          <div class="col-xs-12 text-center">
                              <input type="button" class="btn btn-success launcher" value="Launch SocialWall" id="launch-button">
                          </div>
                      </div>
                </form><!-- END OF THE FORM -->
            </div>
        </div>
    </section>
    
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin-script.js"></script>
</body>

</html>