<b> C R E A T E  </b>
<br>  
<br>
<form method="POST"
      action="/Customer">
      {{ csrf_field() }}
<input type="text" name="txt_id" />
<br>
<br>
<input type="text" name="txt_name" />
<br>
<br>
<input type="text" name="txt_address" />

<input type="submit"
       name="sbm_save"
       id="sbm_save"
       value="save" />
</form>