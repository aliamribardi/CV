<section id="contact">

        <div class="row">

        <div class="eight columns">

            <!-- form -->
            <form action="" method="post" id="contactForm" name="contactForm">
                <fieldset>

                <div>
                        <label for="contactName">Name <span class="required">*</span></label>
                        <input type="text" value="" size="35" id="contactName" name="contactName">
                </div>

                <div>
                        <label for="contactEmail">Email <span class="required">*</span></label>
                        <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                </div>

                <div>
                        <label for="contactSubject">Subject</label>
                        <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                </div>

                <div>
                    <label for="contactMessage">Message <span class="required">*</span></label>
                    <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                </div>

                <div>
                    <button class="submit">Submit</button>
                    <span id="image-loader">
                    <img alt="" src="images/loader.gif">
                    </span>
                </div>

                </fieldset>
                </form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning"> Error boy</div>
            <!-- contact-success -->
                <div id="message-success">
                <i class="fa fa-check"></i>Your message was sent, thank you!<br>
                </div>

        </div>


        <aside class="four columns footer-widgets">

            <div class="widget widget_contact">

                    <h4>Address and Phone</h4>
                    <p class="address">
                        {{ $banners->name ?? 'No Data' }}<br>
                        {{ $abouts->address ?? 'No Data' }}<br>
                        <span>{{ $abouts->phone_number ?? 'No Data' }}</span>
                    </p>

                </div>


        </aside>

    </div>

</section>