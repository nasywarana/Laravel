D A T A S U P P L I E R
<br />
<br />
@foreach($supplier as $supplierlist)

   {{$supplierlist->supplier_id}}
   {{$supplierlist->name}}
   {{$supplierlist->address}}
    <br />
@endforeach 
<br>
<br>
<a href="{{ url('Supplier/create') }}">
touch me
</a>