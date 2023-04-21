@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')

<section class="w3-padding">
        
    <h2 class="w3-text-blue">About Me!</h2>

    <p>
    I am a highly motivated and enthusiastic web development professional with a strong foundation in HTML, CSS, PHP, AWS and JavaScript seeking 
    to join a constantly challenging work environment that enables the application of my knowledge, skills and experiences, promotes my intellectual 
    development and career growth towards achieving corporate goals and vision. I have Proficiency in developing responsive websites and applications. 
    Experienced in collaborating with cross-functional teams to achieve project goals. Strong problem-solving and communication skills with a passion for learning new technologies.
    </p>

    <h3>My Skills</h3>

    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>Node.js</li>
        <li>PHP</li>
        <li>Laravel</li>
        <li>MySQL</li>
    </ul>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    @foreach ($projects as $project)

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3>{{$project->title}}</h3>

            </div>
            
            @if ($project->image)
                <div class="w3-container w3-margin-top">
                    <img src="{{asset('storage/'.$project->image)}}" width="200">
                </div>
            @endif

            <div class="w3-container w3-padding">

                @if ($project->url)
                    View Project: <a href="{{$project->url}}">{{$project->url}}</a>
                @endif

                <p>
                    Posted: {{$project->created_at->format('M j, Y')}}
                    <br>
                    Skill: {{$project->title}}
                </p>

                <a href="/project/{{$project->slug}}" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    @endforeach

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 613.501.7278
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

</section>

@endsection