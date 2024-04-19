<style>body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    </style>
    <?php
    include "includes/head_links.php";
    ?>
    <?php
    include "includes/header.php";
    ?>


<div class="about-section" >
  <h1>About Us</h1>
  <p>Book My PG is a technology-based platform for Booking PG, Serviced Apartments, Shared Flat and Rooms by Location with Specific requirement by filtering by Location, IT Parks, Land Mark, Price, Room type, Amenities, Gender and Food. Presently we have Launched in Platform in Chennai, Coimbatore and Bangalore. We will soon expand to all the Major Cities of the Country
  We are a set of well-selected and chosen Paying Guest services. This is a platform where those, who are willing to open their homes to guests, meet the people looking for wonderful homes to stay in and not have to look for hotels or favors in any city for their long stays. We ensure the places listed and the people looking for a stay are selected based on careful filtering criteria so that both parties benefit and the safety of all involved persons is ensured. We know how important a safe home is to you at both ends of the deal and that is a promise we make.
  
</p>
  <p>To meet our aim, we eliminate the two major problems a guest or host may face. The first of these is a lack of information for anyone new in a city. Our site will list all the information you can seek not just about the house and homeowners but also the locality and other aspects. The other is the loss of capital to a host when a paying guest leaves. We do not wish our homeowners and makers to lose money waiting for the next stroke of luck and therefore listing with us helps them find a guest sooner.</p>
</div>
 <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
 
