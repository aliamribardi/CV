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

            <div class="bars">

                <ul class="skills">
                    <li><span class="" data-width="50%" style="width: 0"></span><em>{{ $skills[0]->skill }}</em></li>
                </ul>

            </div><!-- end skill-bars -->

        </div> <!-- main-col end -->

    </div> <!-- End skills -->

</section> 