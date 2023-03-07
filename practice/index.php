<?php include 'db_conn.php'; ?>


<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

     <link rel="stylesheet" href=style.css>
 </head>

 <?php include 'header.php'; ?>

<body>

    <div class="row" id="rows">
    <div class="column">
      image...
      </div>
       <div class="column" id="cols">
        <button type="button" class="btn btn-warning"><b>GOT A BROKEN APPLIANCES?<b></button><br><br>
        <h1>
            <b>We Fix Your <br> Appliances <br> Today!.</b>
          </h1><br>
        <p>
          Your Trusted Home Appliance repair service in Dubai.<br>We will come to your home or office and fix your Appliances minimum no time! <br><br>
          <button type="button" class="btn btn-warning"><b>Call Us<b></button>
        </p>
     </div>
 </div>

 <div class="row" id="rowlef">
    <div class="column" id="movlef">
        <h5>Do You Need Repair Service?</h5>
        <h5><b>Quick And Efficient Appliance Repair in Dubai</b></h5>
        <p>
          Hire our expert technicians for quick, relaible an afordable home appliance repair services in Dubai. We make sure every appliance job is performed successfully, resulting in 100% client satisfaction.
        </p>
      </div>

       <div class="column" id="movlef0">
         <button type="button" class="btn1">Call Us Today</button><br><br>  
     </div>
 </div><br><br><br>


<div class="row">
  <div class="column1">
    
 <button type="button" class="btn1">FRIDGE LEAKING?</button><br><br>
            <h1>
            <b>Expert Appliance <br> Fixing Service in <br> Dubai.</b>
          </h1>
          <p>
           We are a Dubai-based firm that fixes both home and business appliance In Duabi, we are experts in refrigerator, washer dryer repair, dryer repair, and comprehensive appliance repair. We provide appliance repair in Dubai that is quick, dependable and affordable. If you're seeking for dependables and trustworthy professionals in an appliance servicing facility, don't hesitate to get in touch with us!<br>
           </p><br>

      <h2>Our Goal Statement:</h2>

            <p>Our core values are the pillars of our success. These values drive our decision</p><br>

                <p3><i class="arrow right"></i>&nbsp;&nbsp;<b>01</b> Our Vision</p3><br><br>
                <p3><i class="arrow right"></i>&nbsp;&nbsp;<b>02</b> Our Principals</p3><br><br>
                <p3><i class="arrow right"></i>&nbsp;&nbsp;<b>03</b> Our Qualified Technicians</p3><br><br>
                <p3><i class="arrow right"></i>&nbsp;&nbsp;<b>04</b> Our Clients</p3><br><br>           
            <button type="button" class="btn1">WHATSAPP</button><br><br>  

  </div>
  <div class="column1">
           <h2>Image 2</h2>
    <p>Some text..</p>
          
  </div>
</div>  

    
    <button type="button" class="btn2">LET US BRING YOUR APPALIENCES BACK TO LIFE!</button> <br><br>

    <h3>Immediate 24/7 Emergency Service.</h3><br><br>
    <div class="text">
    <p> 
      Do any of your home appliances require repair? You are in the proper location. Our skilled professional guarantee your complete satisfaction with the repair. We offer repair services for appliances. We are highily known in the sector and have a network in Dubai. <br>For affordable appliance repair in Dubai, experianced professionals are available on demand. You don't have to worry abot choosing a home appliances Repair Dubai Company to handle your house hold needs because service center <br>Appliance Repair Service will help you make the best choice. We provide the most competative price, kind and dependable service from knowledgable professionals and a guarantee oanall of our components and workmanship.<br> We are the greatest location to provide you with the best and most out-of-class service for your home appliance repair, so youn no longer to look elsewhere.
    </p></div><br><br>

<div class="uppercard">
  <div class="row">
      <div class="column" id="cardcol">
        <div class="card2">
          <a target="_blank" href="img_5terre.jpg">
            <?php
                   while($item = mysqli_fetch_assoc($id)):
            ?>
      <!-- <img src="./images/pic01.jpeg" alt="pic" width="200" height="200"> -->
    </a><br>
    
          <h3><?php $item['title'];?></h3><br>
          <p>Fix your Cooking with our Expert Technician at an Affordable price. We Offer The Most Professional Service For our Appliance Repair Needs.</p>
        </div>
      </div>

      <div class="column" id="cardcol">
        <div class="card2">
          <a target="_blank" href="img_5terre.jpg">
      <img src="./images/pic01.jpeg" alt="pic" width="200" height="170">
    </a><br>
          <h3>Washing Machine Repair</h3><br>
          <p>High-quality Washing Machine Repair serice By Expert Technicians in Dubai. We Offer The Most Professional Service For our Appliance Repair Needs.</p>
        </div>
      </div>
      
      <div class="column" id="cardcol">
        <div class="card2">
          <a target="_blank" href="img_5terre.jpg">
      <img src="./images/pic01.jpeg" alt="pic" width="200" height="180">
    </a><br>
          <h3>Dishwasher Repair</h3><br>
          <p>The trusted repair company providing quality service to all residential and commercials Dishwasher. 24/7 professional technicians are available.</p>
        </div>
    </div>
  </div>
</div>
  <br><br><br><br>

<div class="tab-cen">
<div class="row">
      <div class="column1">
        <h2>Image 1</h2>
        <p>Some text..</p>
      </div>
   <div class="column1">
    
            <button type="button" class="btn1">GOT A BROKEN APPLIANCES?</button><br><br>
            <h1>
            <b>See what our clients have to say about us.<b><br>
          </h1>
          <p>
           Our repair technicians are able to install a wide varity of washing machines with the utmost skill and precision for your ultimate convivenience. Whether your mashinh machine is a Free- standing one or a build, rest assured, as our install teams will fit the wooden funiture door as well, making the whole experience effortless.<br>
           </p><br><br><br>
            
            <button type="button" class="btn1">Call Us</button><br>
          
   </div><br>
</div></div><br><br><br><br><br><br><br><br><br><br>
    

<div class="head-cen">GET YOUR APPLIANCES FIXED BY AN EXPERT</div><br>
<div class="centre"> 

<h3>Problems We Commenly See By Appliances.</h3><br>
<p>
  If your Appliances are not functionating properly or making strange sounds, you can book Quick repairin centre with the best services in Dubai. Our Company engineers to fix to fix al the problems with appliances.<br>our experts can repair every type of appliances. Your quick repair services will start with full diagnostice of the appliance  to identity the problems and the repair parts. We repair your kitchen appliance on the same day
</p><br><br>
</div><br><br>

<div class="row-ceter">
  <div class="row">
    <div class="column">
        <div class="card">
          <div class="blue">
              <h3>Washing Machine</h3>
              <p>(problems)</p>
          </div>
          <button type="button" id ="btn1" class="btn btn-danger">We Repair</button><br>
          <p>Washer door won't lock washer door is broken washing machine is not draining water is eaking from the washing machine keeps tripping the power</p><br>
          <button type="button"  id ="btn2" class="btn btn-danger btn-sm">Call Us</button><br>
        </div>
    </div>

    <div class="column">
        <div class="card">
          <div class="blue">
              <h3>Washing Machine</h3>
              <p>(problems)</p>
          </div>
          <button type="button" id ="btn1" class="btn btn-danger">We Repair</button><br>
          <p>Washer door won't lock washer door is broken washing machine is not draining water is eaking from the washing machine keeps tripping the power</p><br>
          <button type="button"  id ="btn2" class="btn btn-danger btn-sm">Call Us</button><br>
        </div>
    </div>
    
    <div class="column">
        <div class="card">
          <div class="blue">
              <h3>Washing Machine</h3>
              <p>(problems)</p>
          </div>
          <button type="button" id ="btn1" class="btn btn-danger">We Repair</button><br>
          <p>Washer door won't lock washer door is broken washing machine is not draining water is eaking from the washing machine keeps tripping the power</p><br>
          <button type="button"  id ="btn2" class="btn btn-danger btn-sm">Call Us</button><br>
        </div>
    </div><br>
  </div><br>
</div><br><br><br><br><br>

<div class="row">
  <div class="column1">
    <h2>Image 2</h2>
    <p>Some text..</p>
  </div>
  <div class="column1">
            <button type="button" class="btn1">FRIDGE LEAKING?</button><br><br>
            <h1>
            <b>Fridge Repair Service in UAE.<b><br>
          </h1>
          <p>
           What's wronge with your refrigerator? Or your refrigrator is not working up? look into an appliance repair company in Dubai that can take on your refrigerator's hand to repair Duabi and everything backup unit altogether. Appliance Srvice centers are teh compelling price in your region with the right, genuine technician for the job<br>
           </p><br>

               <h5>Frige major Parts which mostly Get Faulty:</h5><br>

            <p>1: Comporesser, 2: Condenser Coil, 3: Filter Dryer, 4:Lights</p><br>

            <h5>Problems We Commenly See By Fridges:</h5><br>

            <div class="arrow-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The frige won't turn on because of a malfunctioning start capacitor.</div><br>

            <div class="arrow-right">&nbsp;&nbsp;&nbsp;you should replenish teh coolant if it becomes low.</div><br>

            <div class="arrow-right">&nbsp;&nbsp;&nbsp;Improving efficiency by cleaning dirty condenser coils.</div><br>

            <div class="arrow-right">&nbsp;&nbsp;&nbsp;The voltage is insufficient despte the fact that the home wire is in good working order.</div><br>

            <div class="arrow-right">&nbsp;&nbsp;&nbsp;The voltage is insufficient despte the fact that the home wire is in good working order.</div><br><br>
           
            <button type="button" class="btn1">Call Us</button>
          
  </div>
</div>   

<div class="row" id="row1">
  <div class="column1">
    <h2>Image 3</h2>
    <p>Some text..</p>
  </div>
  <div class="column1">
            <button type="button" class="btn1">CHEAPEST REPAIR SERVICE</button><br><br>
            <h1>
            <b>Fast and Reliable Appliance Repair Service Near You.<b><br>
          </h1>
          <p>
           We are an expert appliance repair company that services all major brands of home appliances. Get unparalleled service, expert advice and speddy same-day repairs. Whatever the brand or problem, our technicians will resolve it quickly.<br>
           </p><br>
            <div class="row">
               <div class="column2">
                 <h4><b>+15</b><br>
                 Years Experiance</h4>
               </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <div class="column2">
                 <h4><b>99%</b><br>
                 Happy Clients</h4>
               </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <div class="column2">
                 <h4><b>1,000+</b><br>
                 Compelete Projects</h4>
               </div>&nbsp;
           </div><br>
            <button type="button" class="btn1">Call Us</button>
          
  </div>
</div>
<br><br>

 <div class="tab">
   <div class="card1"><br>
      <div class="row">
          <div class="column3">
                <button type="button" class="btn1">POPULAR BRANDS</button><br><br>
                <h4><b>We Serve<b></h4><br>
                  <div class="info">
                  <p><strong>Info!</strong> Some text...</p>
                </div>
                <div class="info">
                  <p><strong>Info!</strong> Some text...</p>
                </div>
                <div class="info">
                  <p><strong>Info!</strong> Some text...</p>
                </div>
                <div class="info">
                  <p><strong>Info!</strong> Some text...</p>
                </div>
                <div class="info">
                  <p><strong>Info!</strong> Some text...</p>
                </div>
                <div class="info">
                  <p><strong>Info!</strong> Some text...</p>
                </div>
            </div>

           <div class="column4">
              <button type="button" class="btn1">GET IN TOUCH</button><br><br>
              <h4><b>Lets Talk About Ypur Appliances Problems<b></h4><br>
              <P>Professional service center for repairing a variety of appliance brands at affordable prices.</P>

               <form action="action_page.php">

                        <label for="fname">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name.." required>

                       <label for="email"><b>Email</b></label>
                       <input type="text" placeholder="Enter Email" name="email" id="email" required>

                        <label for="subject">Comment</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

                        <input type="submit" value="Submit">

               </form><br>

           </div><br>
       </div><br>
    </div><br>
  </div><br>

<?php include 'footer.php'; ?>
</body>
</html>
