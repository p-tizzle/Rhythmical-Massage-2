
<!DOCTYPE html>

     <?php include("nav.php"); ?>
                    </nav>
           <div>
                <h3><a id="call" href="tel:5022991171">(502)299-1171</a></h3>
           </div>
                  <div id="contactEmail">
     <?php include("mail.php"); ?>
                   <form action="" method="post">
                       First Name: <input type="text" name="first_name"><br>
                       Last Name: <input type="text" name="last_name"><br>
                       Your Email: <input type="text" name="your_email"><br>
                      Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
                         <input type="submit" name="submit" value="Submit">
                   </form>
                  </div>
          <div id="contactMap">
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZRQ2F-6B7yVoYW6GzZRZmT5WnvZdNz6U&amp;callback=initMap" async defer></script>
                      <div id="mymap" style="width:325px;height:300px;"></div>
          </div>
                <div id="contactFooter">
                      <h3><a id="call" href="tel:5022991171">(502)299-1171</a></h3>
                            <script src="index.php.0.js"></script>
                    <footer>
                            <a id="fbLogo" href="http://facebook.com/jerrytinneyiii"><img src="images/facebook.png" alt="Facebook Logo"></a>
                        <div>
                             <a class="top" href="#top">Back to top of page</a>
                        </div>
                               <p>&copy; 2016 Jerry Port Tinney. </p>
                    </footer>
                </div>
          </div>
  </body>
</html>
