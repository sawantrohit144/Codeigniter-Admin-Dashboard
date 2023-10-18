<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header"><strong>Categories</strong><small> Form</small></div>
               <form method="post">
                 <div class="card-body card-block">
                    <div class="form-group">
                      <label for="categories" class=" form-control-label">Categories</label>
                      <input type="text" name="categories" placeholder="Enter categories name" class="form-control" required>
                    </div>
                    <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                    <span id="payment-button-amount" name="submit">Submit</span>
                    </button>
                    <div class="field_error">
                      <?php if (isset($error) && !empty($error)): ?>
                         <?= $error ?>
                      <?php endif; ?>
                    </div>
                 </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>
