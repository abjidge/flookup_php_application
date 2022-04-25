<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Muchhal And Gupta</title>
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="css/main.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@800&family=Oleo+Script&display=swap&family=family=Rock+Salt&Hind:wght@300&family=Lobster&family=Yellowtail&family=Permanent+Marker&display=swap" rel="stylesheet">
      <script src="https://use.fontawesome.com/265fb2577b.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/5.8.2/css/font-awesome.min.css">
      <!-- <script src="js/main.js"></script> -->
    </head>
    <body onload="chalu()">
      <div class="desktop">
      <div class="container-fluid">
        <div class="sticky">
          <div class="nav" >
            <div class="col-md-2">
              <center><p class="navitem" style="display:inline;font-family: 'Eczar', serif;font-size:40px;">M&G</p></center>
            </div>
            <div class="col-md-10" style="padding-top:10px;" id="navpop">
              <ul style="display:inline;">
                <li style="display:inline;float:left;margin-top:8px;padding-left:0px;"><a href="#home" class="navitem btnnav active" style="text-decoration:none;">HOME</a></li>
                <li style="display:inline;float:left;margin-top:8px;"><a href="#about" class="navitem btnnav" style="text-decoration:none;">ABOUT</a></li>
                <li style="display:inline;float:left;margin-top:8px;"><a href="#team" class="navitem btnnav" style="text-decoration:none;">TEAM</a></li>
                <li style="display:inline;float:left;margin-top:8px;"><a href="#infra" class="navitem btnnav" style="text-decoration:none;">INFRASTRUCTURE</a></li>
                <li style="display:inline;float:left;margin-top:8px;"><a href="#service" class="navitem btnnav" style="text-decoration:none;">SERVICES</a></li>
                <li style="display:inline;float:left;margin-top:8px;"><a href="#contact" class="navitem btnnav" style="text-decoration:none;">CONTACT</a></li>
                <li class="navitem login" style="display:inline;float:right;"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin-top:0px;margin-bottom:0px;">Login</button></li>
                <div class="login">
                  <div id="id01" class="modal">
                    <form class="modal-content animate"  method="post">
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
                        <img src="assets/avatar2.jpg" alt="Avatar" class="avatar">
                      </div>
                      <div class="container_m">
                        <p style="color:red;text-align:center;" id="errormsg"></p>
                        <label for="uname" style="color:#032152"><b>USERNAME</b></label><br>
                        <input style="background-color:#ccd6e6;border:none;border: 1.5px solid #032152;" type="text"  name="uname" required>
                        <label for="psw" style="color:#032152;margin-top:5px;"><b>PASSWORD</b></label>
                        <input style="background-color:#ccd6e6;border:none;border: 1.5px solid #032152;" type="password"  name="psw" required>
                        <button class="log" type="submit" onclick="error()" style="margin-top:20px;margin-bottom:10px;display:inline;">Login</button>
                        <button id="myBtnerr" class="fgtpwd" type="button" style="display:inline;float:right;margin-top:25px;margin-right:2px;border:none;background-color:#ccd6e6;" onclick="deskforgotopen()">Forgot Password?</button>
                      </div>
                    </form>
                  </div>
                </div>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="popforg">
      <div class="forg-popup" id="forgareadesk" style="z-index:9999;">
        <div class="forg-container">
          <i class="fa fa-times" onclick="deskforgotclose()" style="float:right;font-size:25px;color:#032152"></i>
          <p style="margin-left:5px;margin-top:20px;">Enter a valid Email Id:</p>
          <input style="margin-top:-5px;" type="text" placeholder="Enter your Email" name="email" required>
          <p style="color:red;text-align:center;margin-top:-10px;" id="errormsg2"></p>
          <button type="submit" class="btn" style="background-color:#032152" onclick="erroragain()">Login</button>
        </div>
      </div>
      </div>
      <div id="home">
      <div class="home">
        <div class="img1">
          <div class="text1">
            <div class="container-fluid">
            <div class="row">
              <div class="col-md-5 home1">
                <center>
                  <p style="color:white;font-size:40px;margin-top:150px;font-family: 'Lato', sans-serif;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">MUCHHAL & GUPTA</p>
                  <div id="slider2">
                    <ul>
                      <li>
                        <div class="slider2-container">
                          <p>Combining a global perspective with local insights.</p>
                        </div>
                      </li>
                      <li>
                        <div class="slider2-container">
                          <p>A vision that goes deeper and farther.</p>
                        </div>
                      </li>
                      <li>
                        <div class="slider2-container">
                          <p>Quality is never an accident. It is always the result of intelligent efforts.</p>
                        </div>
                      </li>
                      <li>
                        <div class="slider2-container">
                          <p>Integrity – Doing exactly what we say & saying exactly what we will do.</p>
                        </div>
                      </li>
                      <li>
                        <div class="slider2-container">
                          <p>Doing business without boundaries.</p>
                        </div>
                      </li>
                      <li>
                        <div class="slider2-container">
                          <p>We help </br>To setup </br>Build Business </br>Grow</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </center>
              <div class="col-md-7">
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      </div>
      <div id="about">
      <div class="about">
        <center>
        <p style="font-size:40px;padding-top:70px;" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">ABOUT US</p>
        <p style="font-size:20px;margin-right:150px;margin-left:150px;margin-top:60px;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000">Muchhal & Gupta, Chartered Accountants established in 1988 is having qualified professionals, providing Assurance and Auditing, Direct & Indirect Taxation, Advisory and various Offshore services. Known for their professional ethos and technical expertise, driven by astuteness of over three decades and a team of highly competent professionals, we provide effective solutions to their client’s needs, running into deep engagements.</p>
        <p style="font-size:20px;margin-right:150px;margin-left:150px;margin-top:50px;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000">They sternly believe in being a partner to our client and not a mere service provider. They also understand that businesses are inherently different thus we tailor our services to meet client’s specific needs and banish the ‘one-size-fits-all’ standardization. </p>
        <p style="font-size:20px;margin-right:150px;margin-left:150px;margin-top:50px;padding-bottom:50px;margin-bottom:0px;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000">They recruit, train, motivate and retain highly capable and sharpest talent, who bring quality in their work and deliver the best solutions. Their team of highly skilled and motivated professionals includes Chartered Accountants (Indian CPA), Management graduates and Company secretaries who have worked for top consulting firms and have also travelled outside India for various assignments. Over the years, we have gained in-depth experience in providing multitude of services.</p>
        </center>
      </div>
      </div>
      <div class="container-fluid" id="spirits">
        <div class="row">
          <div class="col-md-5 spirit">
            <center>
              <p style="font-size:45px;color:#042254;margin-top:180px;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000">OUR </p>
              <p style="font-size:45px;color:#042254;margin-top:-25px;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000">SPIRITS</p>
            </center>
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-6">
                <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000"><img style="height:60px;margin-top:80px;margin-left:0px;" src="assets/1.png" alt="">
                  <p style="margin-left:0px;margin-top:0px;">Integrity</p></center>
                </div>
                <div class="col-md-6">
                  <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                    <img style="height:60px;margin-top:80px;margin-left:0px;" src="assets/5.png" alt="">
                    <p style="margin-left:0px;margin-top:0px;">Togetherness</p>
                  </center>
                </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                  <img style="height:60px;margin-left:0px;margin-top:25px;" src="assets/4.png" alt="">
                  <p style="margin-left:0px;margin-top:0px;">Wisdom</p>
                </center>
              </div>
              <div class="col-md-6">
                <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                  <img style="height:60px;margin-left:0px;margin-top:25px;" src="assets/3.png" alt="">
                  <p style="margin-left:0px;margin-top:0px;">Relevance</p>
                </center>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                  <img style="height:60px;margin-left:0px;margin-top:25px;" src="assets/2.png" alt="">
                  <p style="margin-left:0px;">Ownership</p>
                </center>
              </div>
              <div class="col-md-6">
                <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000" >
                  <img style="height:60px;margin-left:0px;margin-top:25px;" src="assets/6.png" alt="">
                  <p style="margin-left:0px;margin-top:0px;">Simplicity</p>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="team">
      <div class="team">
        <center><p style="font-size:40px;padding-top:70px;padding-bottom:40px;" data-aos="fade-up" data-aos-delay="100" data-aos-duration="5000">OUR TEAM</p></center>
        <div id="id02" class="modalinfo1">
            <div class="modalinfo-content1 animatedinfo1">
                    <div class="imgcontainerinfo1">
                      <span onclick="document.getElementById('id02').style.display='none'" class="closeinfo1" title="Close Modal">&times;</span>
                     </br>
                    </div>
                    <div class="containerinfo1" style="padding:0px 30px;">
                      <h1 style="margin-top:-40px;">CA. Santosh Muchhal</h1>
                      <p style="margin-top:0px;font-size:18px;">Qualification: FCA, B.Com</p>
                      <p style="margin-top:-10px;font-size:18px;">Specialisation: Advisory Services</p>
                      <p style="margin-top:-10px;font-size:18px;">santosh@mngca.com</p>
                      <p style="margin-top:-10px;font-size:18px;">+91 9425053518</p>
                      <p style="margin-top:-10px;font-size:18px;">Co-founder of M/s. Muchhal & Gupta and a Fellow Member of the ICAI, CA. Santosh Muchhal has been practicing the profession since 1988. With an experience ranging over 30 years, he has handled various assignments during his professional career, which include statutory audits, taxation, bank branch audits, insurance audits, financial planning /structuring, debt syndication and Company Law matters etc.</p>
                      <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">Apart from advising clients (both domestic and international) on various issues, he is an active member of Tax Practitioners Association. He was immediate past president of Indore Management Association (IMA) and a council member of All India Management Association (AIMA). CA. Santosh Muchhal is also serving as an Independent Director on the boards of various companies including listed company, advising them on various matters. He is an active member of various social circles.</p>
                    </div>
            </div>
        </div>
        <div id="id03" class="modalinfo2">
            <div class="modalinfo-content2 animatedinfo2">
                    <div class="imgcontainerinfo2">
                      <span onclick="document.getElementById('id03').style.display='none'" class="closeinfo2" title="Close Modal">&times;</span>
                     </br>
                    </div>
                    <div class="containerinfo2" style="padding:0px 30px;">
                      <h1 style="margin-top:-35px;">CA. Prakash Gupta</h1>
                      <p style="margin-top:0px;font-size:18px;">Qualification: FCA, LLB, B.Com </p>
                      <p style="margin-top:-10px;font-size:18px;">Specialisation: Audit &Assurance</p>
                      <p style="margin-top:-10px;font-size:18px;">ca.mandg@gmail.com</p>
                      <p style="margin-top:-10px;font-size:18px;">+91 9425053517</p>
                      <p style="margin-top:-10px;font-size:18px;">CA. Prakash Gupta qualified in the year 1987 and co-founded the firm, M/s. Muchhal& Gupta in 1988. A Fellow Member of the ICAI, CA. Prakash Gupta has a long-standing career of 32 years with a vast experience ranging in the field of internal audits, statutory audits, taxation, bank and branch audits, insurance audits. He specializes in audit and assurance and has handled clients belonging to manufacturing, automotive, food and agriculture and various other industries. He has his expertise in handling assessment proceedings under the Income-tax Act and handles the litigation of direct tax matters.</p>
                      <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">He is also an active member of Indore Chartered Accountants’ Society, Member of Tax Practitioners Association and a Member of Indore Management Association.</p>
                    </div>
            </div>
        </div>
        <div id="id04" class="modalinfo3">
            <div class="modalinfo-content3 animatedinfo3">
                    <div class="imgcontainerinfo3">
                      <span onclick="document.getElementById('id04').style.display='none'" class="closeinfo3" title="Close Modal">&times;</span>
                     </br>
                    </div>
                    <div class="containerinfo3" style="padding:0px 30px;">
                      <h1 style="margin-top:-35px;">CA. Prateek Agrawal</h1>
                      <p style="margin-top:0px;font-size:18px;">Qualification: FCA, CS, B.Com, LLB </p>
                      <p style="margin-top:-10px;font-size:18px;">Specialisation: Indirect Taxation</p>
                      <p style="margin-top:-10px;font-size:18px;">prateek@mngca.com</p>
                      <p style="margin-top:-10px;font-size:18px;">+91 99269 55855</p>
                      <p style="margin-top:-10px;font-size:18px;">CA. Prateek Agrawal is a Fellow Member of ICAI. Along with his Chartered Accountancy course he also successfully completed his Company Secretary Course. He has done his articleship from Haribhakti & Co., Mumbai and have also done L.L.B.</p>
                      <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">He exclusively handles Indirect Tax matters. He specializes in Goods and Service Tax and Local Sales Tax matters. Along with it he also looks after DGFT matters. His expertise is in giving opinions and litigation matters.He is a regular speaker on GST at various forums and has also written various articles in various magazines. He has also undertaken GST courses. In his free time, Prateek enjoys playing table-tennis and cricket.</p>
                    </div>
            </div>
        </div>
        <div id="id05" class="modalinfo4">
            <div class="modalinfo-content4 animatedinfo4">
                    <div class="imgcontainerinfo4">
                      <span onclick="document.getElementById('id05').style.display='none'" class="closeinfo4" title="Close Modal">&times;</span>
                     </br>
                    </div>
                    <div class="containerinfo4" style="padding:0px 30px;">
                      <h1 style="margin-top:-35px;">CA.Vaibhav Mandhana </h1>
                      <p style="margin-top:0px;font-size:18px;">Qualification: FCA,B.Com</p>
                      <p style="margin-top:-10px;font-size:18px;">Specialisation: Valuations / Virtual CFO</p>
                      <p style="margin-top:-10px;font-size:18px;">vaibhav.mandhana@gmail.com</p>
                      <p style="margin-top:-10px;font-size:18px;">+91 9967 11 0003</p>
                      <p style="margin-top:-10px;font-size:18px;">A Chartered Accountant, member of ICAI RVO (Registered Valuer Organisation) and IBBI Registered Valuer. He has a total experience of more than a decade working for billion dollar consulting firms. During his tenure he has worked in successfully completing IPO and PCAOB assignments, along with working for various financial services companies.</p>
                      <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">He is instrumental in developing strategies and raising funds for the NGO along with preparation of budgets and detailed presentation for the CSR committees for various Billion$ conglomerates, Public listed Banks and Maharatna company.</p>
                    </div>
            </div>
        </div>
        <div id="id06" class="modalinfo5">
            <div class="modalinfo-content5 animatedinfo5">
                    <div class="imgcontainerinfo5">
                      <span onclick="document.getElementById('id06').style.display='none'" class="closeinfo5" title="Close Modal">&times;</span>
                     </br>
                    </div>
                    <div class="containerinfo5" style="padding:0px 30px;">
                      <h1 style="margin-top:-35px;">CA. Natraj Dashore</h1>
                      <p style="margin-top:0px;font-size:18px;">Qualification: ACA</p>
                      <p style="margin-top:-10px;font-size:18px;">natrajdashore@gmail.com</p>
                      <p style="margin-top:-10px;font-size:18px;">+91 90986 97369</p>
                      <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">CA. Natraj Dashore is an associate member of ICAI, He qualified chartered accountancy in year 2019. Currently leading Direct taxes, Indirect taxes and Finance work. He has successfully completed Certificate course on Public Finance and Government Accounting, he is pursuing certificate course on GST. He is actively assisting Senior Partner CA. Santosh Muchhal in various consultation and advisory services.</p>
                    </div>
            </div>
        </div>
        <div id="id07" class="modalinfo6">
            <div class="modalinfo-content6 animatedinfo6">
                    <div class="imgcontainerinfo6">
                      <span onclick="document.getElementById('id07').style.display='none'" class="closeinfo6" title="Close Modal">&times;</span>
                     </br>
                    </div>
                    <div class="containerinfo4" style="padding:0px 30px;">
                      <h1 style="margin-top:-35px;">CA. Shashank Sharma</h1>
                      <p style="margin-top:0px;font-size:18px;">Qualification: FCA, FAFP (ICAI), Dip in IFRS(ACCA-UK), pursuing DISA(ICAI)</p>
                      <p style="margin-top:-10px;font-size:18px;">Specialisation: Direct Taxation</p>
                      <p style="margin-top:-10px;font-size:18px;">Sharma.shashank0307@gmail.com</p>
                      <p style="margin-top:-10px;font-size:18px;">+91 8817578510</p>
                      <p style="margin-top:-10px;font-size:18px;">He is a Fellow Member of the Institute of Chartered Accountants of India having specialization in the area of Direct taxation & Auditing & Assurance. He has also successfully completed certification course on Forensic Audit & Fraud Prevention (FAFP) and alsopursuing Diploma in Information System Audit with ICAI.</p>
                      <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">He is having thorough knowledge and Experience of more than 6 years in Auditing & Assurance in Computerized environment. He is actively involved inassignments like Bank Audits. Corporate audits, Institutional audits, Government audits, PSU audits He is also looking Taxation & litigation matters and other allied matters. He has worked with multiple Big four firms and ITC Limited.</p>
                    </div>
            </div>
        </div>
        <div class="container-fluid">
          <div class="containers">
            <div class="row">
              <div class="col-md-4" style="margin-left:-150px;margin-right:60px;">
                <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000" >
                  <div class="card" style="z-index:1;" >
                    <div class="card-image">
                      <img src="assets/Santosh Muchhal.jpeg" alt="profile one" style="height:330px;">
                    </div>
                    <div class="details">
                      <h5>
                        <button onclick="document.getElementById('id02').style.display='block'" class="buttoninfo1" style="width:auto;margin-top:-40px;">Santosh Muchhal</button>
                        <p style="font-size:17px;margin-top:-20px;">FCA, B.Com</p>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4" style="margin-left:0px;margin-right:0px;">
                <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                  <div class="card" style="z-index:1;">
                    <div class="card-image">
                      <img src="assets/Prakash Gupta.jpeg" alt="profile one" style="height:330px;">
                    </div>
                    <div class="details">
                      <h5>
                        <button onclick="document.getElementById('id03').style.display='block'" class="buttoninfo2" style="width:auto;margin-top:-40px;">Prakash Gupta</button>
                        <p style="font-size:17px;margin-top:-20px;">FCA, LLB, B.Com</p>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4" style="margin-left:60px;margin-right:-50px;">
                <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                  <div class="card" style="z-index:1;">
                    <div class="card-image">
                      <img src="assets/Prateek.JPG" alt="profile one">
                    </div>
                    <div class="details">
                      <h5>
                        <button onclick="document.getElementById('id04').style.display='block'" class="buttoninfo3" style="width:auto;margin-top:-40px;">Prateek Agrawal</button>
                        <p style="font-size:17px;margin-top:-20px;">FCA, CS, B.Com, LLB</p>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="containers">
            <div class="row" style="margin-top:50px;margin-bottom:100px;">
              <div class="col-md-4" style="margin-left:-150px;margin-right:60px;">
                <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                  <div class="card" style="z-index:1;">
                    <div class="card-image">
                      <img src="assets/Vaibhav.jpeg" alt="profile one">
                    </div>
                    <div class="details">
                      <h5>
                        <button onclick="document.getElementById('id05').style.display='block'" class="buttoninfo4" style="width:auto;margin-top:-40px;">Vaibhav Mandhana</button>
                        <p style="font-size:17px;margin-top:-20px;">FCA, B.Com</p>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4" style="margin-left:0px;margin-right:0px;">
                <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                  <div class="card" style="z-index:1;">
                    <div class="card-image">
                      <img src="assets/Natraj.jpg" alt="profile one">
                    </div>
                    <div class="details">
                      <h5>
                        <button onclick="document.getElementById('id06').style.display='block'" class="buttoninfo5" style="width:auto;margin-top:-40px;">Natraj Dashore</button>
                        <p style="font-size:17px;margin-top:-20px;">ACA</p>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4" style="margin-left:60px;margin-right:-50px;">
                <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                  <div class="card" style="z-index:1;">
                    <div class="card-image">
                      <img src="assets/Shashank.jpeg" alt="profile one" style="height:330px;">
                    </div>
                    <div class="details">
                      <h5>
                        <button onclick="document.getElementById('id07').style.display='block'" class="buttoninfo6" style="width:auto;margin-top:-40px;">Shashank Sharma</button>
                        <p style="font-size:17px;margin-top:-20px;">FCA, FAFP (ICAI), Dip in IFRS(ACCA-UK)</p>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div id="infra">
      <div class="infra" style="background-color: #cacfd9;">
        <div class="container-fluid">
          <div class="row" style="height:600px;">
            <div class="col-md-4">
              <div class="text3" style="padding-top:20px;margin-left:-15px;">
                <div class="infrabox">.</div>
                <p class="vertical" style="font-size:30px;margin-top:230px;margin-left:360px;">OUR INFRASTRUCTURE</p>
                <p style="margin-left:40px;margin-top:-180px;text-align:left;" data-aos="fade-right" data-aos-delay="100" data-aos-duration: "1000" data-aos-offset="50"><i class="fa fa-square" style="color:white;margin-right:10px;font-size:18px;margin-bottom:10px;"></i><span style="font-size:15px;">6000 sq.ft modernised office</span></p>
                <p style="margin-left:40px;margin-top:0px;text-align:left;" data-aos="fade-right" data-aos-delay="100" data-aos-duration: "1000" data-aos-offset="50"><i class="fa fa-square" style="color:white;margin-right:10px;font-size:18px;margin-bottom:10px;"></i><span style="font-size:15px;">Conference room </span></p>
                <p style="margin-left:40px;margin-top:0px;text-align:left;" data-aos="fade-right" data-aos-delay="100" data-aos-duration: "1000" data-aos-offset="50"><i class="fa fa-square" style="color:white;margin-right:10px;font-size:18px;margin-bottom:10px;"></i><span style="font-size:15px;">Server in secured environment</span></p>
                <p style="margin-left:40px;margin-top:0px;text-align:left;" data-aos="fade-right" data-aos-delay="100" data-aos-duration: "1000" data-aos-offset="50"><i class="fa fa-square" style="color:white;margin-right:10px;font-size:18px;margin-bottom:10px;"></i><span style="font-size:15px;">Special emphasis on data security</span></p>
              </div>
            </div>
            <div class="col-md-8" >
              <div class="text4">
                <center>
                  <video controls style="z-index:-1;min-height:400px;min-width:100%;margin-top:100px;">
                    <source src="assets/video1.mp4" type=video/mp4>
                  </video>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div id="service">
      <div class="services">
        <center><p style="font-size:40px;padding-top:70px;" data-aos="fade-up" data-aos-delay="100" data-aos-duration="5000">SERVICES</p></center>
        <div class="servicebox" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
          <div class="tab">
            <button class="tablinks" onclick="chalu()" id="defaultOpen"><span data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000" data-aos-offset="50">AUDIT AND ASSURANCE</span></button>
            <button class="tablinks" onclick="openCity(event, 'Paris')"><span data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000" data-aos-offset="50">TAXATION</span></button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')"><span data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000" data-aos-offset="50">ADVISORY</span></button>
            <button class="tablinks" onclick="openCity(event, 'India')"><span data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000" data-aos-offset="50">OFFSHORE SERVICES</span></button>
          </div>
          <div id="London" class="tabcontent" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
            <p style="font-size:17px;padding-top:0px;margin-left:10px;margin-right:40px;">Our Assurance practice provides high quality, independent audit services that transcends beyond conventional financial reporting. </p>
            <p style="font-size:17px;padding-top:0px;margin-left:10px;margin-right:40px;">We invest time and efforts to understand client’s business and needs and identify the key drivers, risks and opportunities. A comprehensive second partner review of audit engagement helps to assure you of your business scenario.</p>
            <p style="font-size:17px;padding-top:0px;margin-left:10px;margin-right:40px;">Refined over years, we deploy robust audit methodologies and bring in decades of insightful experience. Our people are highly skilled and trained to understand the nitty-gritties of your business and handle complexities. We employ people development programs to stay abreast of key issues, global best practices and latest technical updates (be it Accounting Standards or government notifications).</p>
            <p style="font-size:17px;padding-top:0px;margin-left:10px;margin-right:40px;">Our independent opinions, strong competency, value-addition approach and partnership philosophy makes us highly respected by our clientele, who range from PSUs, listed companies to SMEs.</p>
            <ul> <span style="font-size:17px;margin-left:-20px;">We specialize in the following:</span>
              <li style="font-size:17px;margin-left:10px;margin-top:10px;">Statutory Audit under the Companies Act, 1956/ 2013 </li>
              <li style="font-size:17px;margin-left:10px;">Statutory Audit of the Branches of the Nationalized Banks</li>
              <li style="font-size:17px;margin-left:10px;">Tax Audit under the Provisions of Income Tax Act</li>
              <li style="font-size:17px;margin-left:10px;">International Audit with a special objective and / or for Statutory Compliance</li>
              <li style="font-size:17px;margin-left:10px;">Internal Audits</li>
              <li style="font-size:17px;margin-left:10px;">Concurrent Audits</li>
              <li style="font-size:17px;margin-left:10px;">Assurance and Certification Services</li>
              <li style="font-size:17px;margin-left:10px;">Management Assurance </li>
              <li style="font-size:17px;margin-left:10px;">Stock Audit</li>
              <li style="font-size:17px;margin-left:10px;">Propriety Audit for in depth checking of transactions</li>
              <li style="font-size:17px;margin-left:10px;">Special purpose Investigations</li>
            </ul>
          </div>
          <div id="Paris" class="tabcontent" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
            <p style="font-size:17px;padding-top:0px;margin-left:10px;margin-right:40px;">Businesses increasingly find it difficult to keep up to the myriad and abstruse taxation system. With growing impact of multiple and ever- changing tax jurisdictions, even more so with recently implemented GST; we help our clients to identify, minimize and manage the incidence of such taxes within the framework of applicable laws. We provide a comprehensive and practical Tax solutions emanating from our highly specialized and leading Indirect and Direct Tax practices.</p>
            <ul> <span style="font-size:19px;margin-left:-20px;">Direct Taxation:</span>
              <li style="font-size:17px;margin-left:10px;margin-top:10px;">Personal Income Tax</li>
              <li style="font-size:17px;margin-left:10px;">Corporate Income Tax</li>
              <li style="font-size:17px;margin-left:10px;">DTAA Related Services</li>
              <li style="font-size:17px;margin-left:10px;">Withholding Tax (TDS)</li>
              <li style="font-size:17px;margin-left:10px;">Wealth Tax</li>
              <li style="font-size:17px;margin-left:10px;">Gift Tax</li>
              <li style="font-size:17px;margin-left:10px;">Transfer Pricing</li>
              <li style="font-size:17px;margin-left:10px;">Advisory Services </li>
              <li style="font-size:17px;margin-left:10px;">Compliance Services</li>
              <li style="font-size:17px;margin-left:10px;">Transaction Structuring</li>
              <li style="font-size:17px;margin-left:10px;">Litigation Services</li>
            </ul>
            <ul style="margin-top:130px;"> <span style="font-size:19px;margin-left:-20px;">Indirect Taxation:</span>
              <li style="font-size:17px;margin-left:10px;margin-top:10px;">Advising on the applicability and assistance in procedural compliance with complete outsourcing capabilities</li>
              <li style="font-size:17px;margin-left:10px;">Review of the set up to confirm with the required legislations</li>
              <li style="font-size:17px;margin-left:10px;">Planning of the incidence of tax at initial stage of the transactions</li>
              <li style="font-size:17px;margin-left:10px;">Filing of the multiple tax returns</li>
              <li style="font-size:17px;margin-left:10px;">Transaction Structuring</li>
              <li style="font-size:17px;margin-left:10px;">Litigation Services</li>
            </ul>
          </div>
          <div id="Tokyo" class="tabcontent" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
            <p style="font-size:17px;padding-top:0px;margin-left:10px;margin-right:40px;">Our value-added offerings of various Advisory services including Accounting, Financial, Transaction, Corporate Advisory, and Management Consulting enable our clients to run their businesses ingeniously and benefit from astute insights generated.</p>
            <ul> <span style="font-size:17px;margin-left:-20px;">Financial Advisory:</span>
              <li style="font-size:17px;margin-left:10px;margin-top:10px;">Feasibility studies</li>
              <li style="font-size:17px;margin-left:10px;">Loan syndications</li>
              <li style="font-size:17px;margin-left:10px;">Rehabilitation of sick units </li>
              <li style="font-size:17px;margin-left:10px;">Financial analysis</li>
              <li style="font-size:17px;margin-left:10px;">IPO consultation</li>
              <li style="font-size:17px;margin-left:10px;">Raising funds from Bonds and securities</li>
            </ul>
            <ul> <span style="font-size:17px;margin-left:-20px;">Transaction Advisory:</span>
              <li style="font-size:17px;margin-left:10px;margin-top:10px;">Formations of Companies in India and in tax haven countries</li>
              <li style="font-size:17px;margin-left:10px;">Formation of LLP </li>
              <li style="font-size:17px;margin-left:10px;">Investigation on behalf of the Official Liquidator</li>
              <li style="font-size:17px;margin-left:10px;">Central Government and C.C.I. approvals</li>
              <li style="font-size:17px;margin-left:10px;">Advising on amalgamations and mergers and takeovers</li>
              <li style="font-size:17px;margin-left:10px;">Corporate strategic planning</li>
              <li style="font-size:17px;margin-left:10px;">Due Diligence on behalf of Company Law and Courts of India</li>
            </ul>
            <ul style="margin-top:40px;"> <span style="font-size:17px;margin-left:-20px;">Miscellaneous:</span>
              <li style="font-size:17px;margin-left:10px;margin-top:10px;">Guiding on provisions of FEMA with Special Reference to Joint Ventures and NRIs</li>
              <li style="font-size:17px;margin-left:10px;">India Entry Services</li>
              <li style="font-size:17px;margin-left:10px;">Setting up Liaison Offices for overseas clients for statutory compliance and Financial Reporting</li>
            </ul>
          </div>
          <div id="India" class="tabcontent" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
            <p style="font-size:17px;padding-top:0px;margin-left:10px;margin-right:40px;">The role of offshore services has been increased manifolds from past one decade as it helps the client to get trained expert personal for his work and let the client focus in its business.</p>
            <ul style="margin-top:10px;"> <span style="font-size:17px;margin-left:-20px;">Accounting & Bookkeeping:</span>
              <li style="font-size:17px;margin-left:10px;margin-top:10px;">Bookkeeping</li>
              <li style="font-size:17px;margin-left:10px;">MIS Reporting</li>
              <li style="font-size:17px;margin-left:10px;">Financial Closing </li>
              <li style="font-size:17px;margin-left:10px;">Co-ordination with CPA</li>
            </ul>
            <ul style="margin-top:-60px;"> <span style="font-size:17px;margin-left:-20px;">Payroll Processing:</span>
              <li style="font-size:17px;margin-left:10px;margin-top:10px;">Salary Payable calculation</li>
              <li style="font-size:17px;margin-left:10px;">Salary Statements</li>
              <li style="font-size:17px;margin-left:10px;">Pay Slips</li>
              <li style="font-size:17px;margin-left:10px;">Tax calculations</li>
              <li style="font-size:17px;margin-left:10px;">Disbursement of Salary</li>
            </ul>
            <ul style="margin-top:-30px;"> <span style="font-size:17px;margin-left:-20px;">CFO Services:</span>
              <li style="font-size:17px;margin-left:10px;margin-top:10px;">Budgets and Forecasting</li>
              <li style="font-size:17px;margin-left:10px;">AR/AP Management</li>
              <li style="font-size:17px;margin-left:10px;">Key Performance Indicators</li>
              <li style="font-size:17px;margin-left:10px;">Financial Analysis and Modelling</li>
              <li style="font-size:17px;margin-left:10px;">Special Projects</li>
            </ul>
          </div>
        </div>
      </div>
      </div>
      <div id="contact" style="height:50px;">
      </div>
      <div class="contact">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6" style="padding:auto;">
            <center>
            <div style="height:350px;width:450px;margin-top:100px; border:2px solid #eee; display:inline-block;overflow:hidden;">
              <iframe src="https://www.google.com/maps/d/embed?mid=1lRoUHirrXjtFDFNPttd-AvbHUoMTjeta&ehbc=2E312F" width="450" height="420" style="position:relative; top:-60px; border:none;float:left;"></iframe>
            </div>
            </center>
            </div>
            <div class="col-md-6">
              <p style="font-size:40px;padding-top:10px;text-align:left;margin-left:0px;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">GET IN TOUCH!</p>
              <p style="font-size:30px;margin-top:-10px;text-align:left;margin-right:0px;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000"><i class="fa fa-phone"></i></p>
              <p style="font-size:15px;margin-top:-18px;text-align:left;margin-right:0px;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">+91 731 2591818, +91 731 4046818</p>
              <p style="font-size:30px;margin-top:-18px;text-align:left;margin-right:0px;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000"><i class="fa fa-envelope"></i></p>
              <p style="font-size:15px;margin-top:-20px;text-align:left;margin-right:0px;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">prateek@mngca.in</p>
              <form action="mail.php" method="POST" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000" style="color:white;">
                <p style="margin-top:18px;color:white;"><input type="text" name="Fname" value="" placeholder="Enter Your name" style="height:35px;width:100%;border:1px solid white;background-color:#032152;margin-top:0px;color:white;"></p>
                <p style="margin-top:-5px;color:white;"><input type="email" name="email" value="" placeholder="Enter a valid Email address" style="height:35px;width:100%;border:1px solid white;background-color:#032152;margin-top:0px;color:white;"></p>
                <p style="margin-top:-5px;color:white;"><input type="text" name="msg" value="" placeholder="Enter Message" style="height:120px;width:100%;padding-bottom:110px;padding-top:20px;border:1px solid white;background-color:#032152;color:white;"></p>
                <p><input type="submit" name="add" value="Submit"></p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
              <center>
                <p style="margin-top:-5px;">
                <a href="https://www.facebook.com/muchhalandgupta" ><i class="fa fa-facebook " style="color:#032152;margin-right:15px;font-size:25px;"aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/company/muchhal-gupta/about/?viewAsMember=true"><i class="fa fa-linkedin " style="color:#032152;margin-right:15px;font-size:25px;"aria-hidden="true"></i></a>
                </p>
                <p style="color:#032152;font-size:13px;">Copyright © 2021 Muchhal & Gupta. </p>
              </center>
            </div>
            <div class="col-md-4">
            </div>
          </div>
        </div>
      </footer>
      </div>











      <div class="mobile">
        <div class="sticky" style="z-index:999">
        <nav class="navbar" style="background-color:#032152;z-index:999">
          <a class="navbar-brand" href="#" style="margin-left:20px;color:white;">M&G</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-right:20px;outline:0;outline-style: none;box-shadow: none;border-color: transparent;">
            <b style="color:white;font-size:30px;">&#9776;</b>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="margin-left:20px;">
            <ul class="navbar-nav" style="color:white;">
              <li class="nav-item">
                <a class="nav-link navitem" href="#home2">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navitem" href="#about1">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navitem" href="#team2">TEAM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navitem" href="#infra2">INFRASTRUCTURE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navitem" href="#service2">SERVICES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navitem" href="#contact2">CONTACT</a>
              </li>
              <li class="nav-item login">
                <button onclick="document.getElementById('id1').style.display='block'" style="width:auto;float:left;">LOGIN</button>
              </li>
              <div class="login">
                <div id="id1" class="modal">
                  <form class="modal-content animate"  method="post">
                    <div class="imgcontainer">
                      <span onclick="document.getElementById('id1').style.display='none'" class="close" title="Close">&times;</span>
                      <img src="assets/avatar2.jpg" alt="Avatar" class="avatar">
                    </div>
                    <div class="container_m">
                      <p style="color:red;text-align:center;" id="errormsg_mob"></p>
                      <label for="uname" style="color:#032152"><b>USERNAME</b></label><br>
                      <input style="background-color:#ccd6e6;border:none;border: 1.5px solid #032152;" type="text"  name="uname" required>
                      <label for="psw" style="color:#032152;margin-top:5px;"><b>PASSWORD</b></label>
                      <input style="background-color:#ccd6e6;border:none;border: 1.5px solid #032152;" type="password"  name="psw" required>
                      <button class="log" type="submit" onclick="error2()" style="margin-top:20px;margin-bottom:10px;display:inline;">Login</button>
                      <button id="myBtnerr" class="fgtpwd" type="button" style="display:inline;float:right;margin-top:25px;margin-right:2px;border:none;background-color:#ccd6e6;" onclick="mobforgotopen()">Forgot Password?</button>
                    </div>
                  </form>
                </div>
              </div>
            </ul>
          </div>
      </nav>
      </div>

      <div class="popforg">
      <div class="forg-popup" id="forgarea" style="z-index:9999;">
        <div class="forg-container">
          <i class="fa fa-times" onclick="mobforgotclose()" style="float:right;font-size:25px;color:#032152"></i>
          <p style="margin-left:5px;margin-top:20px;">Enter a valid Email Id:</p>
          <input style="margin-top:-5px;" type="text" placeholder="Enter your Email" name="email" required>
          <p style="color:red;text-align:center;margin-top:-10px;" id="errormsg2_mob"></p>
          <button type="submit" class="btn" style="background-color:#032152" onclick="erroragain2()">Login</button>
        </div>
      </div>
      </div>



      <div id="home2">
        <div class="img1">
          <div class="text1">
            <div class="container-fluid">
            <div class="row">
              <div class="col-md-5 home1">
                <center>
                  <p style="color:white;font-size:40px;margin-top:150px;font-family: 'Lato', sans-serif;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">MUCHHAL & GUPTA</p>
                  <div id="carouselContent" class="carousel slide" data-ride="carousel" style="color:white;margin-top:100px;">
                      <div class="carousel-inner" role="listbox" style="z-index:0;">
                          <div class="carousel-item active">
                              <p>Combining a global perspective with local insights.</p>
                          </div>
                          <div class="carousel-item">
                              <p>A vision that goes deeper and farther.</p>
                          </div>
                          <div class="carousel-item">
                              <p>Quality is never an accident. It is always the result of intelligent efforts.</p>
                          </div>
                          <div class="carousel-item">
                              <p>Integrity – Doing exactly what we say & saying exactly what we will do.</p>
                          </div>
                          <div class="carousel-item">
                              <p>Doing business without boundaries.</p>
                          </div>
                          <div class="carousel-item">
                              <p>We help </br>To setup </br>Build Business </br>Grow</p>
                          </div>
                      </div>
                  </div>
                </div>
              </center>
              <div class="col-md-7">
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>


        <div id="about2">
        <div class="about">
          <center>
          <p style="font-size:40px;padding-top:70px;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">ABOUT US</p>
          <p style="font-size:20px;margin-top:60px;margin-right:20px;margin-left:20px;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000">Muchhal & Gupta, Chartered Accountants established in 1988 is having qualified professionals, providing Assurance and Auditing, Direct & Indirect Taxation, Advisory and various Offshore services. Known for their professional ethos and technical expertise, driven by astuteness of over three decades and a team of highly competent professionals, we provide effective solutions to our client’s needs, running into deep engagements.</p>
          <p style="font-size:20px;margin-top:50px;margin-right:20px;margin-left:20px;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000">They sternly believe in being a partner to our client and not a mere service provider. They also understand that businesses are inherently different thus we tailor our services to meet client’s specific needs and banish the ‘one-size-fits-all’ standardization. </p>
          <p style="font-size:20px;margin-right:20px;margin-left:20px;margin-top:50px;padding-bottom:30px;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000">They recruit, train, motivate and retain highly capable and sharpest talent, who bring quality in their work and deliver the best solutions. Their team of highly skilled and motivated professionals includes Chartered Accountants (Indian CPA), Management graduates and Company secretaries who have worked for top consulting firms and have also travelled outside India for various assignments. Over the years, we have gained in-depth experience in providing multitude of services.</p>
          </center>
        </div>
        </div>


        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 spirit">
              <center>
                <p style="font-size:45px;color:#042254;margin-top:180px;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000">OUR </p>
                <p style="font-size:45px;color:#042254;margin-top:-25px;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000">SPIRITS</p>
              </center>
            </div>
            <div class="col-md-7">
            <div class="row">
                <div class="col-md-6">
                  <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000"><img style="height:60px;margin-top:30px;margin-left:0px;" src="assets/1.png" alt="">
                    <p class="slide-in-left" style="margin-left:0px;margin-top:0px;">Integrity</p></center>
                  </div>
                  <div class="col-md-6">
                    <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                      <img class="slide-in-left" style="height:60px;margin-top:25px;margin-left:0px;" src="assets/5.png" alt="">
                      <p class="slide-in-left" style="margin-left:0px;margin-top:0px;">Togetherness</p>
                    </center>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                    <img class="slide-in-left" style="height:60px;margin-left:0px;margin-top:25px;" src="assets/4.png" alt="">
                    <p class="slide-in-left" style="margin-left:0px;margin-top:0px;">Wisdom</p>
                  </center>
                </div>
                <div class="col-md-6">
                  <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                    <img class="slide-in-left" style="height:60px;margin-left:0px;margin-top:25px;" src="assets/3.png" alt="">
                    <p class="slide-in-left" style="margin-left:0px;margin-top:0px;">Relevance</p>
                  </center>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                    <img class="slide-in-left" style="height:60px;margin-left:0px;margin-top:25px;" src="assets/2.png" alt="">
                    <p class="slide-in-left" style="margin-left:0px;">Ownership</p>
                  </center>
                </div>
                <div class="col-md-6">
                  <center data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                    <img class="slide-in-left" style="height:60px;margin-left:0px;margin-top:25px;" src="assets/6.png" alt="">
                    <p class="slide-in-left" style="margin-left:0px;margin-top:0px;">Simplicity</p>
                  </center>
                </div>
              </div>
            </div>
          </div>
          </div>













          <div id="team2">
            <div class="team">
              <center><p style="font-size:40px;padding-top:70px;padding-bottom:40px;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000" data-aos-offset="150">OUR TEAM</p></center>
              <div id="id21" class="modalinfo1">
                  <div class="modalinfo-content1 animatedinfo1">
                          <div class="imgcontainerinfo1">
                            <span onclick="document.getElementById('id21').style.display='none'" class="closeinfo1" title="Close Modal">&times;</span>
                           </br>
                          </div>
                          <div class="containerinfo1" style="padding:0px 30px;">
                            <h1 style="margin-top:-40px;">CA. Santosh Muchhal</h1>
                            <p style="margin-top:0px;font-size:18px;">Qualification: FCA, B.Com</p>
                            <p style="margin-top:-10px;font-size:18px;">Specialisation: Advisory Services</p>
                            <p style="margin-top:-10px;font-size:18px;">santosh@mngca.com</p>
                            <p style="margin-top:-10px;font-size:18px;">+91 9425053518</p>
                            <p style="margin-top:-10px;font-size:18px;">Co-founder of M/s. Muchhal & Gupta and a Fellow Member of the ICAI, CA. Santosh Muchhal has been practicing the profession since 1988. With an experience ranging over 30 years, he has handled various assignments during his professional career, which include statutory audits, taxation, bank branch audits, insurance audits, financial planning /structuring, debt syndication and Company Law matters etc.</p>
                            <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">Apart from advising clients (both domestic and international) on various issues, he is an active member of Tax Practitioners Association. He was immediate past president of Indore Management Association (IMA) and a council member of All India Management Association (AIMA). CA. Santosh Muchhal is also serving as an Independent Director on the boards of various companies including listed company, advising them on various matters. He is an active member of various social circles.</p>
                          </div>
                  </div>
              </div>
              <div id="id22" class="modalinfo2">
                  <div class="modalinfo-content2 animatedinfo2">
                          <div class="imgcontainerinfo2">
                            <span onclick="document.getElementById('id22').style.display='none'" class="closeinfo2" title="Close Modal">&times;</span>
                           </br>
                          </div>
                          <div class="containerinfo2" style="padding:0px 30px;">
                            <h1 style="margin-top:-35px;">CA. Prakash Gupta</h1>
                            <p style="margin-top:0px;font-size:18px;">Qualification: FCA, LLB, B.Com </p>
                            <p style="margin-top:-10px;font-size:18px;">Specialisation: Audit &Assurance</p>
                            <p style="margin-top:-10px;font-size:18px;">ca.mandg@gmail.com</p>
                            <p style="margin-top:-10px;font-size:18px;">+91 9425053517</p>
                            <p style="margin-top:-10px;font-size:18px;">CA. Prakash Gupta qualified in the year 1987 and co-founded the firm, M/s. Muchhal& Gupta in 1988. A Fellow Member of the ICAI, CA. Prakash Gupta has a long-standing career of 32 years with a vast experience ranging in the field of internal audits, statutory audits, taxation, bank and branch audits, insurance audits. He specializes in audit and assurance and has handled clients belonging to manufacturing, automotive, food and agriculture and various other industries. He has his expertise in handling assessment proceedings under the Income-tax Act and handles the litigation of direct tax matters.</p>
                            <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">He is also an active member of Indore Chartered Accountants’ Society, Member of Tax Practitioners Association and a Member of Indore Management Association.</p>
                          </div>
                  </div>
              </div>
              <div id="id23" class="modalinfo3">
                  <div class="modalinfo-content3 animatedinfo3">
                          <div class="imgcontainerinfo3">
                            <span onclick="document.getElementById('id23').style.display='none'" class="closeinfo3" title="Close Modal">&times;</span>
                           </br>
                          </div>
                          <div class="containerinfo3" style="padding:0px 30px;">
                            <h1 style="margin-top:-35px;">CA. Prateek Agrawal</h1>
                            <p style="margin-top:0px;font-size:18px;">Qualification: FCA, CS, B.Com, LLB </p>
                            <p style="margin-top:-10px;font-size:18px;">Specialisation: Indirect Taxation</p>
                            <p style="margin-top:-10px;font-size:18px;">prateek@mngca.com</p>
                            <p style="margin-top:-10px;font-size:18px;">+91 99269 55855</p>
                            <p style="margin-top:-10px;font-size:18px;">CA. Prateek Agrawal is a Fellow Member of ICAI. Along with his Chartered Accountancy course he also successfully completed his Company Secretary Course. He has done his articleship from Haribhakti & Co., Mumbai and have also done L.L.B.</p>
                            <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">He exclusively handles Indirect Tax matters. He specializes in Goods and Service Tax and Local Sales Tax matters. Along with it he also looks after DGFT matters. His expertise is in giving opinions and litigation matters.He is a regular speaker on GST at various forums and has also written various articles in various magazines. He has also undertaken GST courses. In his free time, Prateek enjoys playing table-tennis and cricket.</p>
                          </div>
                  </div>
              </div>
              <div id="id24" class="modalinfo4">
                  <div class="modalinfo-content4 animatedinfo4">
                          <div class="imgcontainerinfo4">
                            <span onclick="document.getElementById('id24').style.display='none'" class="closeinfo4" title="Close Modal">&times;</span>
                           </br>
                          </div>
                          <div class="containerinfo4" style="padding:0px 30px;">
                            <h1 style="margin-top:-35px;">CA.Vaibhav Mandhana </h1>
                            <p style="margin-top:0px;font-size:18px;">Qualification: FCA,B.Com</p>
                            <p style="margin-top:-10px;font-size:18px;">Specialisation: Valuations / Virtual CFO</p>
                            <p style="margin-top:-10px;font-size:18px;">vaibhav.mandhana@gmail.com</p>
                            <p style="margin-top:-10px;font-size:18px;">+91 9967 11 0003</p>
                            <p style="margin-top:-10px;font-size:18px;">A Chartered Accountant, member of ICAI RVO (Registered Valuer Organisation) and IBBI Registered Valuer. He has a total experience of more than a decade working for billion dollar consulting firms. During his tenure he has worked in successfully completing IPO and PCAOB assignments, along with working for various financial services companies.</p>
                            <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">He is instrumental in developing strategies and raising funds for the NGO along with preparation of budgets and detailed presentation for the CSR committees for various Billion$ conglomerates, Public listed Banks and Maharatna company.</p>
                          </div>
                  </div>
              </div>
              <div id="id25" class="modalinfo5">
                  <div class="modalinfo-content5 animatedinfo5">
                          <div class="imgcontainerinfo5">
                            <span onclick="document.getElementById('id25').style.display='none'" class="closeinfo5" title="Close Modal">&times;</span>
                           </br>
                          </div>
                          <div class="containerinfo5" style="padding:0px 30px;">
                            <h1 style="margin-top:-35px;">CA. Natraj Dashore</h1>
                            <p style="margin-top:0px;font-size:18px;">Qualification: ACA</p>
                            <p style="margin-top:-10px;font-size:18px;">natrajdashore@gmail.com</p>
                            <p style="margin-top:-10px;font-size:18px;">+91 90986 97369</p>
                            <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">CA. Natraj Dashore is an associate member of ICAI, He qualified chartered accountancy in year 2019. Currently leading Direct taxes, Indirect taxes and Finance work. He has successfully completed Certificate course on Public Finance and Government Accounting, he is pursuing certificate course on GST. He is actively assisting Senior Partner CA. Santosh Muchhal in various consultation and advisory services.</p>
                          </div>
                  </div>
              </div>
              <div id="id26" class="modalinfo6">
                  <div class="modalinfo-content6 animatedinfo6">
                          <div class="imgcontainerinfo6">
                            <span onclick="document.getElementById('id26').style.display='none'" class="closeinfo6" title="Close Modal">&times;</span>
                           </br>
                          </div>
                          <div class="containerinfo4" style="padding:0px 30px;">
                            <h1 style="margin-top:-35px;">CA. Shashank Sharma</h1>
                            <p style="margin-top:0px;font-size:18px;">Qualification: FCA, FAFP (ICAI), Dip in IFRS(ACCA-UK), pursuing DISA(ICAI)</p>
                            <p style="margin-top:-10px;font-size:18px;">Specialisation: Direct Taxation</p>
                            <p style="margin-top:-10px;font-size:18px;">Sharma.shashank0307@gmail.com</p>
                            <p style="margin-top:-10px;font-size:18px;">+91 8817578510</p>
                            <p style="margin-top:-10px;font-size:18px;">He is a Fellow Member of the Institute of Chartered Accountants of India having specialization in the area of Direct taxation & Auditing & Assurance. He has also successfully completed certification course on Forensic Audit & Fraud Prevention (FAFP) and alsopursuing Diploma in Information System Audit with ICAI.</p>
                            <p style="margin-top:-10px;margin-bottom:30px;font-size:18px;">He is having thorough knowledge and Experience of more than 6 years in Auditing & Assurance in Computerized environment. He is actively involved inassignments like Bank Audits. Corporate audits, Institutional audits, Government audits, PSU audits He is also looking Taxation & litigation matters and other allied matters. He has worked with multiple Big four firms and ITC Limited.</p>
                          </div>
                  </div>
              </div>
              <div class="container-fluid">
                <div class="containers">
                  <div class="row">
                    <div class="col-md-4" style="">
                      <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                        <div class="card" style="z-index:1;">
                          <div class="card-image">
                            <!-- <img src="assets/Vaibhav.jpeg" alt="profile one"> -->
                            <center><button type="button" name="button" style="height:50px;width:100px;border-radius:10px;border:none;margin-top:250px;background-color:rgba(255,255,255,0.2);">Click Me</button></center>
                          </div>
                          <div class="details">
                            <h4>
                              <button onclick="document.getElementById('id21').style.display='block'" class="buttoninfo1" style="width:auto;margin-top:-40px;">Santosh Muchhal</button>
                              <p style="font-size:20px;margin-top:-20px;">FCA, B.Com</p>
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="">
                      <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                        <div class="card" style="z-index:1;">
                          <div class="card-image">
                            <!-- <img src="assets/Vaibhav.jpeg" alt="profile one"> -->
                            <center><button type="button" name="button" style="height:50px;width:100px;border-radius:10px;border:none;margin-top:250px;background-color:rgba(255,255,255,0.2);">Click Me</button></center>
                          </div>
                          <div class="details">
                            <h4>
                              <button onclick="document.getElementById('id22').style.display='block'" class="buttoninfo2" style="width:auto;margin-top:-40px;">Prakash Gupta</button>
                              <p style="font-size:20px;margin-top:-20px;">FCA, B.Com</p>
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="">
                      <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                        <div class="card" style="z-index:1;">
                          <div class="card-image">
                            <img src="assets/Prateek.JPG" style="z-index:1;" alt="profile one">
                            <center><button type="button" name="button" style="height:50px;width:100px;border-radius:10px;border:none;margin-top:250px;background-color:rgba(255,255,255,0.2);z-index:5;">Click Me</button></center>
                          </div>
                          <div class="details">
                            <h4>
                              <button onclick="document.getElementById('id23').style.display='block'" class="buttoninfo3" style="width:auto;margin-top:-40px;">Prateek Agrawal</button>
                              <p style="font-size:20px;margin-top:-20px;">FCA, B.Com</p>
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="containers">
                  <div class="row" style="">
                    <div class="col-md-4" style="">
                      <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                        <div class="card" style="z-index:1;">
                          <div class="card-image">
                            <img src="assets/Vaibhav.jpeg" alt="profile one">
                            <center><button type="button" name="button" style="height:50px;width:100px;border-radius:10px;border:none;margin-top:250px;background-color:rgba(255,255,255,0.2);z-index:5;">Click Me</button></center>
                          </div>
                          <div class="details">
                            <h4>
                              <button onclick="document.getElementById('id24').style.display='block'" class="buttoninfo4" style="width:auto;margin-top:-40px;">Vaibhav Mandhana</button>
                              <p style="font-size:20px;margin-top:-20px;">FCA, B.Com</p>
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="">
                      <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                        <div class="card" style="z-index:1;">
                          <div class="card-image">
                            <img src="assets/Natraj.jpg" alt="profile one">
                            <center><button type="button" name="button" style="height:50px;width:100px;border-radius:10px;border:none;margin-top:250px;background-color:rgba(255,255,255,0.2);z-index:5;">Click Me</button></center>
                          </div>
                          <div class="details">
                            <h4>
                              <button onclick="document.getElementById('id25').style.display='block'" class="buttoninfo5" style="width:auto;margin-top:-40px;">Natraj Dashore</button>
                              <p style="font-size:20px;margin-top:-20px;">FCA, B.Com</p>
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="">
                      <div class="card-wrapper" style="z-index:1;" data-aos="flip-left" data-aos-delay="100" data-aos-duration="5000">
                        <div class="card" style="z-index:1;">
                          <div class="card-image">
                            <!-- <img src="assets/Vaibhav.jpeg" alt="profile one"> -->
                            <center><button type="button" name="button" style="height:50px;width:100px;border-radius:10px;border:none;margin-top:250px;background-color:rgba(255,255,255,0.2);z-index:5;">Click Me</button></center>
                          </div>
                          <div class="details">
                            <h4>
                              <button onclick="document.getElementById('id26').style.display='block'" class="buttoninfo6" style="width:auto;margin-top:-40px;">Shashank Sharma</button>
                              <p style="font-size:20px;margin-top:-20px;">FCA, B.Com</p>
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>










                <div id="infra2">
                <div style="background-color: #032152;margin-top:0px;">
                  <div class="container-fluid">
                    <div class="row" style="height:750px;">
                      <div class="col-md-4">
                        <div class="text3 " style="padding-top:20px;">
                          <p style="font-size:30px;margin-top:20px;text-align:center;margin-bottom:50px;"data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">OUR INFRASTRUCTURE</p>
                          <p style="margin-left:40px;text-align:left;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000"><i class="fa fa-square" style="color:white;margin-right:10px;font-size:18px;margin-bottom:0px;"></i><span style="font-size:15px;">6000 sq.ft modernised office</span></p>
                          <p style="margin-left:40px;text-align:left;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000"><i class="fa fa-square" style="color:white;margin-right:10px;font-size:18px;margin-bottom:0px;"></i><span style="font-size:15px;">Conference room </span></p>
                          <p style="margin-left:40px;text-align:left;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000"><i class="fa fa-square" style="color:white;margin-right:10px;font-size:18px;margin-bottom:0px;"></i><span style="font-size:15px;">Server in secured environment</span></p>
                          <p style="margin-left:40px;text-align:left;" data-aos="fade-right" data-aos-delay="500" data-aos-duration: "1000"><i class="fa fa-square" style="color:white;margin-right:10px;font-size:18px;margin-bottom:0px;"></i><span style="font-size:15px;">Special emphasis on data security</span></p>
                        </div>
                      </div>
                      <div class="col-md-8" >
                        <div class="text4">
                          <div class="contanier-fluid" >
                            <center>
                              <video controls style="z-index:-1;height:400px;width:100%;margin-top:-250px;">
                                <source src="assets/video1.mp4" type=video/mp4 style="z-index:-1;">
                              </video>
                            </center>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>









                <div id="service2">
                <div class="container-fluid" style="background-color:#ccd6e6;padding-top:40px;">
                <p style="font-size:30px;text-align:center;margin-bottom:30px;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">OUR SERVICES</p>
                <div class="tab">
                  <button class="tablinks" onclick="chalu()" id="defaultOpentab" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">Audit</button>
                  <button class="tablinks" onclick="services(event, 'taxation')" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">Taxation</button>
                  <button class="tablinks" onclick="services(event, 'advisory')" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">Advisory</button>
                  <button class="tablinks" onclick="services(event, 'offshore')" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">Offshore</button>
                </div>

                <div class="tabcon">
                <div id="audit_assurance" class="tabcontent" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                  <h3>Audit And Assurance</h3>
                  <p style="font-size:15px;margin-top:-5px;">Our Assurance practice provides high quality, independent audit services that transcends beyond conventional financial reporting.</p>
                  <p style="font-size:15px;margin-top:-5px;">We invest time and efforts to understand client’s business and needs and identify the key drivers, risks and opportunities. A comprehensive second partner review of audit engagement helps to assure you of your business scenario.</p>
                  <p style="font-size:15px;margin-top:-5px;">Refined over years, we deploy robust audit methodologies and bring in decades of insightful experience. Our people are highly skilled and trained to understand the nitty-gritties of your business and handle complexities. We employ people development programs to stay abreast of key issues, global best practices and latest technical updates (be it Accounting Standards or government notifications).</p>
                  <p style="font-size:15px;margin-top:-5px;">Our independent opinions, strong competency, value-addition approach and partnership philosophy makes us highly respected by our clientele, who range from PSUs, listed companies to SMEs.</p>
                  <ul>
                    <p style="font-size:15px;margin-top:-5px;margin-left:-9%;">We specialize in the following:</p>
                    <li style="font-size:15px;">Statutory Audit under the Companies Act, 1956/ 2013</li>
                    <li style="font-size:15px;">Statutory Audit of the Branches of the Nationalized Banks</li>
                    <li style="font-size:15px;">Tax Audit under the Provisions of Income Tax Act</li>
                    <li style="font-size:15px;">International Audit with a special objective and / or for Statutory Compliance</li>
                    <li style="font-size:15px;">Internal Audits</li>
                    <li style="font-size:15px;;">Concurrent Audits</li>
                    <li style="font-size:15px;">Assurance and Certification Services</li>
                    <li style="font-size:15px;">Management Assurance</li>
                    <li style="font-size:15px;">Stock Audit</li>
                    <li style="font-size:15px;">Propriety Audit for in depth checking of transactions</li>
                    <li style="font-size:15px;">Special purpose Investigations</li>
                  </ul>
                </div>

                <div id="taxation" class="tabcontent" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                  <h3>Taxation</h3>
                  <p style="font-size:15px;margin-top:-5px;">Businesses increasingly find it difficult to keep up to the myriad and abstruse taxation system. With growing impact of multiple and ever- changing tax jurisdictions, even more so with recently implemented GST; we help our clients to identify, minimize and manage the incidence of such taxes within the framework of applicable laws. We provide a comprehensive and practical Tax solutions emanating from our highly specialized and leading Indirect and Direct Tax practices.</p>
                  <ul>
                    <p style="font-size:15;margin-top:-5px;margin-left:-9%;">Direct Taxation:</p>
                    <li style="font-size:15px;">Personal Income Tax</li>
                    <li style="font-size:15px;">Corporate Income Tax</li>
                    <li style="font-size:15px;">DTAA Related Services</li>
                    <li style="font-size:15px;">Withholding Tax (TDS)</li>
                    <li style="font-size:15px;">Wealth Tax</li>
                    <li style="font-size:15px;">Gift Tax</li>
                    <li style="font-size:15px;">Transfer Pricing</li>
                    <li style="font-size:15px;">Advisory Services</li>
                    <li style="font-size:15px;">Compliance Services</li>
                    <li style="font-size:15px;">Transaction Structuring</li>
                    <li style="font-size:15px;">Litigation Services</li>
                  </ul>
                  <ul>
                    <p style="font-size:15;margin-top:-5px;margin-left:-9%;">Indirect Taxation:</p>
                    <li style="font-size:15px;">Advising on the applicability and assistance in procedural compliance with complete outsourcing capabilities</li>
                    <li style="font-size:15px;">Review of the set up to confirm with the required legislations</li>
                    <li style="font-size:15px;">Planning of the incidence of tax at initial stage of the transactions</li>
                    <li style="font-size:15px;">Filing of the multiple tax returns</li>
                    <li style="font-size:15px;">Transaction Structuring</li>
                    <li style="font-size:15px;">Litigation Services</li>
                  </ul>
                </div>

                <div id="advisory" class="tabcontent" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                  <h3>Advisory</h3>
                  <p style="font-size:15;margin-top:-5px;">Our value-added offerings of various Advisory services including Accounting, Financial, Transaction, Corporate Advisory, and Management Consulting enable our clients to run their businesses ingeniously and benefit from astute insights generated.</p>
                  <ul>
                    <p style="font-size:15;margin-top:-5px;margin-left:-9%;">Financial Advisory:</p>
                    <li style="font-size:15px;">Feasibility studies</li>
                    <li style="font-size:15px;">Loan syndications</li>
                    <li style="font-size:15px;">Rehabilitation of sick units</li>
                    <li style="font-size:15px;">Financial analysis</li>
                    <li style="font-size:15px;">IPO consultation</li>
                    <li style="font-size:15px;">Raising funds from Bonds and securities</li>
                  </ul>
                  <ul>
                    <p style="font-size:15;margin-top:-5px;margin-left:-9%;">Transaction Advisory:</p>
                    <li style="font-size:15px;">Formations of Companies in India and in tax haven countries</li>
                    <li style="font-size:15px;">Formation of LLP</li>
                    <li style="font-size:15px;">Investigation on behalf of the Official Liquidator</li>
                    <li style="font-size:15px;">Central Government and C.C.I. approvals</li>
                    <li style="font-size:15px;">Advising on amalgamations and mergers and takeovers</li>
                    <li style="font-size:15px;">Corporate strategic planning</li>
                    <li style="font-size:15px;">Due Diligence on behalf of Company Law and Courts of India</li>
                  </ul>
                  <ul>
                    <p style="font-size:15;margin-top:-5px;margin-left:-9%;">Miscellaneous:</p>
                    <li style="font-size:15px;">Guiding on provisions of FEMA with Special Reference to Joint Ventures and NRIs</li>
                    <li style="font-size:15px;">India Entry Services</li>
                    <li style="font-size:15px;">Setting up Liaison Offices for overseas clients for statutory compliance and Financial Reporting</li>
                  </ul>
                </div>

                <div id="offshore" class="tabcontent" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">
                  <h3>Offshore Services</h3>
                  <p>The role of offshore services has been increased manifolds from past one decade as it helps the client to get trained expert personal for his work and let the client focus in its business.</p>
                  <ul>
                    <p style="font-size:15;margin-top:-5px;margin-left:-9%;">Accounting & Bookkeeping:</p>
                    <li style="font-size:15px;">Bookkeeping</li>
                    <li style="font-size:15px;">MIS Reporting</li>
                    <li style="font-size:15px;">Financial Closing</li>
                    <li style="font-size:15px;">Co-ordination with CPA</li>
                  </ul>
                  <ul>
                    <p style="font-size:15;margin-top:-5px;margin-left:-9%;">Payroll Processing:</p>
                    <li style="font-size:15px;">Salary Payable calculation</li>
                    <li style="font-size:15px;">Salary Statements</li>
                    <li style="font-size:15px;">Pay Slips</li>
                    <li style="font-size:15px;">Tax calculations</li>
                    <li style="font-size:15px;">Disbursement of Salary</li>
                  </ul>
                  <ul>
                    <p style="font-size:15;margin-top:-5px;margin-left:-9%;">CFO Services:</p>
                    <li style="font-size:15px;">Budgets and Forecasting</li>
                    <li style="font-size:15px;">AR/AP Management</li>
                    <li style="font-size:15px;">Key Performance Indicators</li>
                    <li style="font-size:15px;">Financial Analysis and Modelling</li>
                    <li style="font-size:15px;">Special Projects</li>
                  </ul>
                </div>
                </div>
                </div>
                </div>










                <div id="contact2">
          <div class="contact" style="background-color:#032152;padding-bottom:20px;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <p style="font-size:40px;padding-top:10px;text-align:left;margin-left:0px;text-align:center;color:white;margin-top:60px; "data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">GET IN TOUCH!</p>
                  <p style="font-size:30px;margin-top:-10px;text-align:left;margin-right:0px;text-align:center;color:white;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000"><i class="fa fa-phone"></i></p>
                  <p style="font-size:15px;margin-top:-18px;text-align:left;margin-right:0px;text-align:center;color:white;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">+91 731 2591818, +91 731 4046818</p>
                  <p style="font-size:30px;margin-top:-18px;text-align:left;margin-right:0px;text-align:center;color:white;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000"><i class="fa fa-envelope"></i></p>
                  <p style="font-size:15px;margin-top:-20px;text-align:left;margin-right:0px;text-align:center;color:white;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000">prateek@mngca.in</p>
                  <form action="mail.php" method="POST" data-aos="fade-in" data-aos-delay="100" data-aos-duration="5000" style="color:white;">
                    <p style="margin-top:18px;color:white;"><input type="text" name="Fname" value="" placeholder="Enter Your name" style="height:35px;width:100%;border:1px solid white;background-color:#032152;margin-top:0px;color:white;"></p>
                    <p style="margin-top:-5px;color:white;"><input type="email" name="email" value="" placeholder="Enter a valid Email address" style="height:35px;width:100%;border:1px solid white;background-color:#032152;margin-top:0px;color:white;"></p>
                    <p style="margin-top:-5px;color:white;"><input type="text" name="msg" value="" placeholder="Enter Message" style="height:120px;width:100%;padding-bottom:110px;padding-top:20px;border:1px solid white;background-color:#032152;color:white;"></p>
                    <center><p><input type="submit" name="add" value="Submit"></p></center>
                  </form>
                </div>
                <div class="col-md-6" style="padding:auto;margin-top:50px;">
                <center>
                <div style="height:350px;width:100%;border:2px solid #eee; display:inline-block;overflow:hidden;">
                  <iframe src="https://www.google.com/maps/d/embed?mid=1lRoUHirrXjtFDFNPttd-AvbHUoMTjeta&ehbc=2E312F" width="100%" height="420" style="position:relative; top:-55px; border:none;float:left;"></iframe>
                </div>
                </center>
                </div>
              </div>
            </div>
          </div>
          </div>

          <footer>
            <center>
              <p style="margin-top:0px;">
              <a href="https://www.facebook.com/muchhalandgupta" ><i class="fa fa-facebook " style="color:#032152;margin-right:15px;font-size:25px;"aria-hidden="true"></i></a>
              <a href="https://www.linkedin.com/company/muchhal-gupta/about/?viewAsMember=true"><i class="fa fa-linkedin " style="color:#032152;margin-right:15px;font-size:25px;"aria-hidden="true"></i></a>
              </p>
              <p style="color:#032152;font-size:13px;">Copyright © 2021 Muchhal & Gupta. </p>
            </center>
          </footer>

      </div>
      <script>

      function deskforgotopen() {
        document.getElementById("forgareadesk").style.display = "block";
      }

      function deskforgotclose() {
        document.getElementById("forgareadesk").style.display = "none";
      }

      function mobforgotopen() {
        document.getElementById("forgarea").style.display = "block";
      }

      function mobforgotclose() {
        document.getElementById("forgarea").style.display = "none";
      }


      // $(document).ready(function () {
      //
      //     $('ul.navbar-nav > li')
      //             .click(function (e) {
      //         $('ul.navbar-nav > li')
      //             .removeClass('active');
      //         $(this).addClass('active');
      //     });
      // });


      function chalu(){
        let intViewportWidth = window.innerWidth;
        if(intViewportWidth > 499){
          var a = document.getElementById("defaultOpen");
          a.style.backgroundColor = "#052e73";
          openCity_ex(event, 'London');
        }
        else{
          var a = document.getElementById("defaultOpentab");
          a.style.backgroundColor = "#052e73";
          services_ex(event, 'audit_assurance');
        }
      }

      function error(){
           document.getElementById('errormsg').innerHTML = "USERNAME NOT REGISTERED";
         }
      function erroragain(){
          document.getElementById('errormsg2').innerHTML = "EMAIL NOT REGISTERED";
        }


        function error2(){
             document.getElementById('errormsg_mob').innerHTML = "USERNAME NOT REGISTERED";
           }
        function erroragain2(){
            document.getElementById('errormsg2_mob').innerHTML = "EMAIL NOT REGISTERED";
          }

        // var modal2 = document.getElementById("myModal2");
        // var btn2 = document.getElementById("myBtn2");
        // var span2 = document.getElementsByClassName("close2")[0];
        // btn2.onclick = function() {
        //   modal2.style.display = "block";
        // }
        // span2.onclick = function() {
        //   modal2.style.display = "none";
        // }
        // window.onclick = function(event) {
        //   if (event.target == modal2) {
        //     modal2.style.display = "none";
        //   }
        // }





        // var modalerr = document.getElementById("myModalerr");
        // var btn2 = document.getElementById("myBtnerr");
        // var span2 = document.getElementsByClassName("closeerr")[0];
        // btn2.onclick = function() {
        //   modalerr.style.display = "block";
        // }
        // span2.onclick = function() {
        //   modalerr.style.display = "none";
        // }
        // window.onclick = function(event) {
        //   if (event.target == modalerr) {
        //     modalerr.style.display = "none";
        //   }
        // }


        function openCity(evt, cityName)
        {
          var a = document.getElementById("defaultOpen");
          a.style.backgroundColor = "#032152";
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++)
          {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++)
          {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }


        function services(evt, serv) {
          var a = document.getElementById("defaultOpentab");
          a.style.backgroundColor = "#032152";
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(serv).style.display = "block";
          evt.currentTarget.className += " active";
        }

        function openCity_ex(evt, cityName)
        {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++)
          {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++)
          {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }


        function services_ex(evt, serv) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(serv).style.display = "block";
          evt.currentTarget.className += " active";
        }
      </script>

      <script>
        var header = document.getElementById("navpop");
        var btns = header.getElementsByClassName("btnnav");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
          });
        }
      </script>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
    </body>
  </html>
