<x-mail::message>
# Worker Maintenance was a success

Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero illum, minima recusandae exercitationem aliquid id earum soluta voluptatibus ipsa molestias doloribus quae perspiciatis labore incidunt ut quam, dolore commodi animi?

<x-mail::button :url="route('assign-jobs.index')">
View Availaible Workers
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
