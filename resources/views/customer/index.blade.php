D A T A C U S T O M E R
<br />
<br />
@foreach($customer as $customerlist)

   {{$customerlist->customer_id}}
   {{$customerlist->name}}
   {{$customerlist->address}}
  <a href=
  "/Customer/{{ $customerlist->customer_id }}">show</a>
    <br />

    <a href="/Customer/{{  $customerlist->customer_id }}/edit"> edit </a>
    <br />
    <form action="/Customer/{{$customerlist->customer_id}}" method="post">
      {{ csrf_field()  }}
      {{ method_field('DELETE') }}
      <button>X</button>
    </form>
    
@endforeach 

<a href="{{ url('Customer/create') }}"> 
touch me </a>