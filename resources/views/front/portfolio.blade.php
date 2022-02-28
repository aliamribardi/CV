<section id="portfolio">

    <div class="row">

        <div class="twelve columns collapsed">

        <h1>Check Out Some of My Works.</h1>

        <!-- portfolio-wrapper -->
        <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

            @foreach ($myworks as $mywork)
            <div class="columns portfolio-item">
                <div class="item-wrap">
                    
                    <a href="#modal-01" title="">
                        <img alt="" src="{{ asset('storage/' . $mywork->image) }}">
                        <div class="overlay">
                            <div class="portfolio-item-meta">
                                <h5>{{ $mywork->name }}</h5>
                                {{-- <p>Illustrration</p> --}}
                            </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                    </a>
                    
                </div>
            </div> <!-- item end -->
            @endforeach


        </div> <!-- portfolio-wrapper end -->

        </div> <!-- twelve columns end -->


        <!-- Modal Popup
        --------------------------------------------------------------- -->

        <div id="modal-01" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="images/portfolio/modals/m-coffee.jpg" alt="" />

            <div class="description-box">
                <h4>{{ $mywork->name }}</h4>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            <span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>
            </div>

        <div class="link-box">
            <a href="#" target="_blank">Details</a>
                <a class="popup-modal-dismiss">Close</a>
        </div>

        </div><!-- modal-01 End -->



    </div> <!-- row End -->

</section>