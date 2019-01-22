<b> C R E A T E  </b>
<br>  
<br>
<form method="POST"
      action="/Supplier">
      {{ csrf_field() }}
<input type="text" name="txt_id" />
<br>
<br>
<input type="text" name="txt_name" />
<br>
<br>
<input type="text" name="txt_address" />

<input type="submit"
       id="sbm_save"
       name="sbm_save"
       address="sbm_save"
       value="save" />
</form>