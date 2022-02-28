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

                <h3>{{ $educations->school ?? 'No Data' }}</h3>
                <p class="info"> {{ $educations->program_Study ?? 'No Data' }} <span>&bull;</span> <em class="date">{{ $educations->year ?? 'No Data' }}</em></p>

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

                <h3>{{ $works->company ?? 'No Data' }}</h3>
                <p class="info">{{ $works->position ?? 'No Data' }} <span>&bull;</span> <em class="date">{{ $works->year_of_entry ?? 'No Data' }} - {{ $works->year_out ?? 'Present' }}</em></p>

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
                    <li><span class="bar-expand" style="width: {{ $skills->percent . '%' }}"></span><em>{{ $skills->skill ?? 'No Data' }}</em></li>
                </ul>

            </div><!-- end skill-bars -->

        </div> <!-- main-col end -->

    </div> <!-- End skills -->

</section> 