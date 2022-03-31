
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<form action="select3a.php">
<fieldset>


  <div class="form-group row">
    <label class="col-md-4 control-label" for="text1">Filme aparute dupa anul:</label> 
    <div class="col-md-5">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-4 control-label" for="select">Si Gen:</label> 
    <div class="col-md-5">
      <select id="select" name="select" class="custom-select">
        <option value="SF">SF</option>
        <option value="copii">copii</option>
        <option value="drama">drama</option>
        <option value="comedie">comedie</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="col-md-12">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
 </fieldset>
</form>

 
<form action="select3b.php">
<fieldset>

  <div class="form-group row">
    <label class="col-md-4 control-label" for="text1">Persoane de sex:</label> 
    <div class="col-md-5">
      <select id="select1" name="select1" class="custom-select">
        <option value="F">F</option>
        <option value="M">M</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-4 control-label" for="text1">Cu castig peste:</label> 
    <div class="col-md-5">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-4 control-label" for="select">Moneda:</label> 
    <div class="col-md-5">
      <select id="select2" name="select2" class="custom-select">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="col-md-12">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
 </fieldset>
</form>