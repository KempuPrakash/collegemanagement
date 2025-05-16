<!DOCTYPE html>
<html>
    <head>
        <title>Student Service</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="studentservice.css">
        <link rel="stylesheet" href="styleadmin.css">
    </head>
    <body>
        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal1" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <img src="au.png" alt="" class="auimg1">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Apply Bonafide</h2>
                  </div>
                  <div class="modal-body" id="body1">
                    <form method="POST" action="bonfied_submit.php">
                      <input type="text" name="name" placeholder="Enter your Name"><br>
                      <input type="text" name="fname" placeholder="Enter your FName"><br>
                      <input type="number" name="number" placeholder="Enter your class"><br>
                      <input type="text" name="hallticket" placeholder="Enter your HallTicket No."><br>
                      DOB:
                      <input type="date" name="date"><br><br>
                      <button class="btn btn-primary" name="submit">Submit</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="closebtn" data-dismiss="modal">Close</button>
                    <span><center>@Anurag University</center></span>
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
          <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <img src="au.png" alt="" class="auimg1">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Apply IdCard</h2>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="idcard_submit.php">
                    <input type="text" name="name" placeholder="Enter your Name"><br>
                    <input type="text" name="class" placeholder="Enter your class"><br>
                    <input type="text" name="hallticket" placeholder="Enter your HallTicket No."><br>
                    <input type="text" name="phone" placeholder="Enter your Contact"><br><br>
                    <button class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <span><center>@Anurag University</center></span>
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
          <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <img src="au.png" alt="" class="auimg1">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Download HallTicket</h2>
                  </div>
                  <div class="modal-body">
                    <input type="text" placeholder="Enter your HallTicket No."><br>
                    <select name="" id="" value="">
                        <option value="">Select Branch</option>
                        <option value="1">AI</option>
                        <option value="2">CSE</option>
                        <option value="3">CSM</option>
                        <option value="4">CS</option>
                        <option value="5">CE</option>
                        <option value="6">ECE</option>
                        <option value="7">EEE</option>
                        <option value="8">MECH</option>
                    </select><br>
                    <select name="" id="" value="Select Semister">
                        <option value="">Select Semister</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select><br><br>
                    <button class="btn btn-primary">Get Details</button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <span><center>@Anurag University</center></span>
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
          <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal4" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <img src="au.png" alt="" class="auimg1">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Results</h2>
                  </div>
                  <div class="modal-body" id="body1">
                    <input type="text" placeholder="Enter your HallTicket No."><br>
                    <select name="" id="" value="">
                        <option value="">Select Branch</option>
                        <option value="1">AI</option>
                        <option value="2">CSE</option>
                        <option value="3">CSM</option>
                        <option value="4">CS</option>
                        <option value="5">CE</option>
                        <option value="6">ECE</option>
                        <option value="7">EEE</option>
                        <option value="8">MECH</option>
                    </select><br>
                    <select name="" id="" value="Select Semister">
                        <option value="">Select Semister</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select><br><br>
                    <button class="btn btn-primary">Get Result</button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="closebtn" data-dismiss="modal">Close</button>
                    <span><center>@Anurag University</center></span>
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
<div id="most">          
        <section class="header">
            <nav class="navbar">
                <img src="au.png" alt="" class="auimg">
                <div class="navbar-box">
                    <h3 class="heading-tertiary">STUDENTS SERVICE</h3>
                </div>

                <div class="container">
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
                <div id="demo" class="collapse">
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="#" class="navbar-link-book" data-modal="myModal1" data-toggle="modal" data-target="#myModal1">Apply Bonafide</a>
                    </li>
                    <li class="navbar-item">
                        <a href="" class="navbar-link-book" data-modal="myModal2" data-toggle="modal" data-target="#myModal2">Apply IdCard</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link-book" data-modal="myModal3" data-toggle="modal" data-target="#myModal3">Download HallTicket</a>
                    </li>
                    <li class="navbar-item">
                        <a href="https://results.anurag.edu.in" class="navbar-link-book" data-modal="myModal4" data-toggle="modal" data-target="#myModal4">Results</a>
                    </li>
                </ul>
                </div>

                <div class="toggle">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
            <div class="header-container">
                <div class="video">
                    <img src="studentservice.jpg" alt="" class="imgst1">
                </div>  
                
</div>
    </body>
</html>