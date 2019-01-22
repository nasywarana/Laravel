D A T A C U S T O M E R
<br />
<br />
@foreach($customer as $customerlist)

   {{$customerlist->customer_id}}
   {{$customerlist->name}}
   {{$customerlist->address}}

    <br />
@endforeach 

<br>
<br>
<a href="{{ url('Customer') }}"> touch me </a>