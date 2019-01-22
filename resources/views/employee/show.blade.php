<b>DATA EMPLOYEE</b>
<br />
<br />
@foreach($employee as $employeelist)

   {{$employeelist->employee_id}}
   {{$employeelist->employee_name}}
   {{$employeelist->employee_address}}
   {{$employeelist->employee_phone_number}}

    <br />
@endforeach 

<br>
<br>
<a href="{{ url('Employee') }}"> touch me </a>