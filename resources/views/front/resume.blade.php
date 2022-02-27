<section id="resume">

      <!-- Education
      ----------------------------------------------- -->
    <div class="row education">

        <div class="three columns header-col">
        <h1><span>Education</span></h1>
        </div>

        <div class="nine columns main-col">

        <div class="row item">

            <div class="twelve columns">

                <h3>{{ $educations[0]->school ?? 'No Data' }}</h3>
                <p class="info"> {{ $educations[0]->program_Study ?? 'No Data' }} <span>&bull;</span> <em class="date">{{ $educations[0]->year ?? 'No Data' }}</em></p>

            </div>

        </div> <!-- item end -->

        </div> <!-- main-col end -->

    </div> <!-- End Education -->


    <!-- Work
    ----------------------------------------------- -->
    <div class="row work">

        <div class="three columns header-col">
        <h1><span>Work</span></h1>
        </div>

        <div class="nine columns main-col">

        <div class="row item">

            <div class="twelve columns">

                <h3>{{ $works[0]->company ?? 'No Data' }}</h3>
                <p class="info">{{ $works[0]->position ?? 'No Data' }} <span>&bull;</span> <em class="date">{{ $works[0]->year_of_entry ?? 'No Data' }} - {{ $works[0]->year_out ?? 'Present' }}</em></p>

            </div>

        </div> <!-- item end -->

        </div> <!-- main-col end -->

    </div> <!-- End Work -->


    <!-- Skills
    ----------------------------------------------- -->
    <div class="row skill">

        <div class="three columns header-col">
        <h1><span>Skills</span></h1>
        </div>

        <div class="nine columns main-col">

        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
        voluptatem sequi nesciunt.
        </p>

            <div class="bars">

                <ul class="skills">
                    <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
                <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
                    <li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
                    <li><span class="bar-expand css"></span><em>CSS</em></li>
                    <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
                </ul>

            </div><!-- end skill-bars -->

        </div> <!-- main-col end -->

    </div> <!-- End skills -->

</section> 