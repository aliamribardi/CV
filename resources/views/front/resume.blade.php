<section id="resume">

      <!-- Education
      ----------------------------------------------- -->
    <div class="row education">

        <div class="three columns header-col">
        <h1><span>Education</span></h1>
        </div>

        <div class="nine columns main-col">

        <div class="row item">
            @foreach ($educations as $education)
                <div class="twelve columns">
                    <h3>{{ $education->school ?? 'No Data' }}</h3>
                    <p class="info"> {{ $education->program_Study ?? 'No Data' }} <span>&bull;</span> <em class="date">{{ $education->year ?? 'No Data' }}</em></p>
                </div>
            @endforeach
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
            @foreach ($works as $work)
                <div class="twelve columns">
                    <h3>{{ $work->company ?? 'No Data' }}</h3>
                    <p class="info">{{ $work->position ?? 'No Data' }} <span>&bull;</span> <em class="date">{{ $work->year_of_entry ?? 'No Data' }} - {{ $work->year_out ?? 'Present' }}</em></p>
                </div>
            @endforeach
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
            @foreach ($skills as $skill)
                <div class="bars">
                    <ul class="skills">
                        <li><span class="bar-expand" style="width: {{ $skill->percent . '%' }}"></span><em>{{ $skill->skill ?? 'No Data' }}</em></li>
                    </ul>
                </div><!-- end skill-bars -->
            @endforeach
        </div> <!-- main-col end -->

    </div> <!-- End skills -->

</section> 