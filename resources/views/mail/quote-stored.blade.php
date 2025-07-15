<h1>
    {{ $quote->quote_name }}
</h1>

<p>Hi, {{ $quote->user->first_name }}</p>

<p>We are sincerely grateful for taking the time to create a quote. Find below the details of your services and billings as well</p>

<h2>Refrence Number: {{ $quote->quote_number }}</h2>

<div>
    <h3>Services</h3>
    <p>Price: ${{ $quote->price_total }}</p>
</div>

<p>Thanks,</p>
<p>Ben Ken-Idehen.</p>
<p>Copyright &copy; 2025.</p>

<a href="{{ url(route('admin.quote.index')) }}">View Quote</a>