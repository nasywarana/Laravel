D A T A C U S T O M E R
<br />
<br />
@foreach($customer as $customerlist)
<form action="{{ route('Customer.update', 
$customerlist->customer_id) }}"method="post">
    {{ csrf_field() }}
        {{ method_field('PUT') }}
     <br />

<input type="text" 
     name="txt_name" 
     value="{{$customerlist->name}}"/>
    <br />

<input type="text" 
    name="txt_address"
    value="{{$customerlist->address}}" />
    <br />

@endforeach 
<button type="submit">Submit</button>
<br>
<br>
<a href="{{ url('Customer') }}"> index </a>