        <!--# content #-->
        <div class="content">

          <div class="page-title">
            <div class="title-overlay">
              <h1>{$oMod->getName()}</h1>
            </div>
            <img src="{#IMAGE_PATH#}/contact-title-bg.jpg" class="img-fluid">
          </div>

          <!-- # contact -->
          <div class="container">
            <br><br>
            <div class="row">
              <div class="col-sm-6">
                <div class="company-info-large">
                  <p>
                    You can book apointment online via this website {*or whatsapp +65 6638 1544*} to make an appointment with us in advance,
                  </p>
                  <ul>
                    <li class="addr">
                      20 maxwell Road, #09-17 Maxwell Road, Singapore 099113
                    </li>
                    {*
                    <li class="phone">
                      +65 6638 1544
                    </li>
                    *}
                    <li class="mail">
                      vasanthipillay@innergytc.com
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6">
                {include file='core/feedback.tpl'}
                <form class="contact-form" method="POST" action="">
                  <div class="form-group">
                    <select class="form-control" name="type">
                      <option value="">Select Type</option>
                      <option>General Enquiries</option>
                      <option>Ask the doctor</option>
                      <option>Event related information</option>
                      <option>Feedback</option>
                    </select>
                  </div>                
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="fullname" value="{$smarty.post.fullname}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address" name="email" value="{$smarty.post.email}">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject Matter" name="subject" value="{$smarty.post.subject}">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Your Messages" rows="6" name="message">{$smarty.post.message}</textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <div class="g-recaptcha" data-sitekey="6LdykDQUAAAAAIyBNM1hUbusNO1WKAegPXprN-8l"></div>
                    </div>
                    <div class="col-md-5">
                      <button class="btn btn-block" name="send" value="1">SEND</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <br><br>
          </div>
          <!-- # contact -->

          <section id="contact-map">
            <!--# responsive google maps #-->
            <div class="google">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8243215942043!2d103.84256501530128!3d1.2789777990671574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da196d4cd9635b%3A0x98bb3c6087e766d0!2sInnergy+Ayurveda+%26+Yoga!5e0!3m2!1sid!2sid!4v1497339361297" width="600" height="450" frameborder="0" style="border:0" scrollwheel="false" allowfullscreen></iframe>
            </div>
            <!--# responsive google maps #-->                
          </section>

        </div>
        <!--# content #-->