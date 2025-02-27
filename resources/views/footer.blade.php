 <!-- ======= Footer ======= -->
 <footer id="footer">
   <div class="footer-top">
     <div class="container">
       <div class="row">

         <div class="col-lg-3 col-md-6 footer-info">
           <!-- <h3>{{ config('app.name') }}</h3> -->
           <img src="{{ URL::asset('img/logo-footer.png') }}" alt="" class="img-fluid" style="height: 5rem; margin-bottom:2rem;"/>
           <p>NCDs affect people in all corners of the globe, rich and poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to affect each and everyone of us! It’s better to fight as one.</p>
         </div>

         <div class="col-lg-3 col-md-6 footer-links">
           <h4>Useful Links</h4>
           <ul>
             <li><i class="ion-ios-arrow-right"></i> <a href="{{ URL::route('about_us') }}">About us</a></li>
             <li><i class="ion-ios-arrow-right"></i> <a href="">Engagements</a></li>
             <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('login') }}">Login</a></li>
           </ul>
           <div class="input-group my-group mt-3" style="background-color: #fff;">
             <span class="input-group-btn">
               <button class="btn"><i class="fa fa-calendar fa-lg"></i> Calendar </button>
             </span>
             <?php
              $calendars = App\Calendar::all();
              ?>
             <select class="form-select" aria-label="Default select example" onChange="selectChange(this)">
               <option value={{ URL::current() }}>Choose Year</option>
               @foreach($calendars as $calendar)
               <option value="{{ $calendar->file }}">{{ $calendar->year }}</option>
               @endforeach
             </select>

           </div>
         </div>

         <div class="col-lg-3 col-md-6 footer-contact">
           <h4>Contact Us</h4>
           <p>
             Kigali - Kinamba<br>
             KN 8 AVE 27<br>
             Rwanda<br>
             <strong>Phone:</strong> +250 791 232 176<br>
             <strong>Email:</strong> info@rwandancda.org<br>
           </p>

           <div class="social-links">
             <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
             <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
             <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
             <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
           </div>

         </div>

         <div class="col-lg-3 col-md-6 footer-newsletter">
           <h4>Our Newsletter</h4>
           <p>Subscribe to our updates...</p>
           <form action="{{ URL::route('subscribe') }}" method="POST">
             @csrf
             <input type="email" name="email"><input type="submit" value="Subscribe">
           </form>
         </div>

       </div>
     </div>
   </div>

   <div class="container">
     <div class="copyright">
       &copy; Copyright <?php echo date("Y"); ?>&nbsp;<strong>{{ config('app.name') }}</strong>. All Rights Reserved
     </div>

   </div>
   <script>
     function selectChange(elm) {
       window.open(elm.value);
     }
   </script>
 </footer><!-- End Footer -->