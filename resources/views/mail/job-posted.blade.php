<h2>{{ $job->title }}</h2>

<p>
    Congrats. Your job is live on our Website.
</p>

<a href="{{ url('/jobs/' . $job->id) }}">You can see Your Job-Listing here</a>
