<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global2.css" />
    <link rel="stylesheet" href="./index2.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Assistant:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,700;1,500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap"
    />
  </head>
  <body>
    <div class="contact-us">
      <img class="ar-only-logo-1" alt="" src="./public2/ar-only-logo-1@2x.png" />

      <div class="contact-us-child"></div>
      <b class="lets-talk">Let’s Talk</b>
      <div class="want-to-talk">
        Want to talk to us? Then reach out we'd love to hear about your project
        and provide help.
      </div>
      <b class="email">Email</b>
      <div class="contactusavenueroadwaysgmail">
        contactus.avenueroadways@gmail.com
      </div>
      <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
      <form action="https://sheetdb.io/api/v1/xyz2d5afrqz3l" method="POST" target="dummyframe">
        <div class="name-parent">
          <div class="name">Name</div>
          <input class="frame-inner" type="text" name="data[Name]" />
          
        </div>
        <div class="email-parent">
          <div class="name">Email</div>
          <input class="frame-inner" type="text" name="data[Email]"/>
          
        </div>
        <div class="what-service-are-you-intereste-parent">
          <div class="name">What service are you interested in</div>
          <input class="frame-inner" type="text" name="data[What]"/>
        </div>
        <div class="industry-parent">
          <div class="name">Industry</div>
          <input class="frame-inner" type="text" name="data[Industry]"/>
        </div>
        <div class="city-parent">
          <div class="name">City</div>
          <input class="frame-inner" type="text" name="data[City]"/>
        </div>
        <div class="city-parent2">
          <div class="name">Message</div>
          <input class="frame-inner" type="text" name="data[Message]"/>
        </div>
        <div class="button">

        <button type="submit" onclick="popUp()" style="width:400px; height:50px; font-size: 30px; background:rgba(245, 40, 145, 0); border: none">Submit</button>
      </div>
      </form><br><br><br>
      <script>
              const popUp = () => {
                alert("Your Query Submitted ! ")
              }
      </script>
      <div class="map-to-avenue">
        <img
          class="map-to-avenue-child"
          alt=""
          src="./public2/rectangle-11879@2x.png"
        />

        <img class="vector-icon" alt="" src="./public1/vector1.svg" />
      </div>
      <b class="phone">
        <p class="phone1">Phone</p>
      </b>
      <b class="landline">Landline</b>
      <div class="where-to-find">Where to find us?</div>
      <div class="div">+91 9825045870</div>
      <div class="div1">079 26893150</div>
      

      <img class="ar-only-logo-2" alt="" src="./public2/ar-only-logo-2@2x.png" />

      <div class="office-address">
        <img
          class="round-place-24px-icon"
          alt=""
          src="./public2/roundplace24px.svg"
        />

        <b class="abc-company"
          >C-401, Signature Tower II, Sanand Cross Road, Sarkhej, Ahmedabad:
          382210, India</b
        >
      </div>
      <div class="phone-number-parent">
        <div class="phone-number">
          <img
            class="round-phone-24px-icon"
            alt=""
            src="./public2/roundphone24px.svg"
          />

          <b class="b">+91 9825045870</b>
        </div>
        <div class="phone-number">
          <img
            class="round-phone-24px-icon"
            alt=""
            src="./public2/roundlocalprintshop24px.svg"
          />

          <b class="b">079 26893150</b>
        </div>
      </div>
      

      
      <div class="group-div">
        <div class="header-wrapper">
          <div class="header-wrapper">
            <a style ="text-decoration: none"href="../index.php" class="home">Home</a>
            <a class="about-us" style ="text-decoration: none"href="about us.html">About us</a></div>
            
            <div class="our-team"><a href="./about-us-team.html" style="text-decoration:none">Our Team</a></div>
            <div class="our-services"><a href="./index-servies.html" style="text-decoration:none">Our Services</a></div>
            <div class="news-room"><a href="./newsroom.html" style="text-decoration:none">News Room</a></div>
            
            <div class="contact-us1" id="contactUsText"><a href="./contact.html" style="text-decoration:none">Contact us</a></div>
          </div>
        </div>
      </div>
      

    </div>

    <script>
      var contactUsText = document.getElementById("contactUsText");
      if (contactUsText) {
        contactUsText.addEventListener("click", function (e) {
          window.location.href = "/";
        });
      }
      
      var contactUsText1 = document.getElementById("contactUsText1");
      if (contactUsText1) {
        contactUsText1.addEventListener("click", function (e) {
          window.location.href = "/";
        });
      }
      </script>
  </body>
</html>