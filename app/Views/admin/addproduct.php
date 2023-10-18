<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header"><strong>Product</strong><small> Form</small></div>
               <form method="post" enctype="multipart/form-data">
                 <div class="card-body card-block">
                    <div class="form-group">
                      <label for="categories" class=" form-control-label">Categories</label>
                      <select class="form-control" name="categories_id">
                          <option value="">Select Category</option>
                          <?php foreach ($data as $category): ?>
                               <option value="<?= $category['id'] ?>"><?= $category['categories'] ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="categories" class="form-control-label">Product Name</label>
                      <input type="text" name="name" placeholder="Enter product name" class="form-control" required>
                    </div>
                    <div class="field_error">
                      <?php if (isset($error) && !empty($error)): ?>
                         <?= $error ?>
                      <?php endif; ?>
                    </div>
                    <div class="form-group">
                      <label for="categories" class="form-control-label">MRP</label>
                      <input type="text" name="mrp" placeholder="Enter product mrp" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="categories" class="form-control-label">Price</label>
                      <input type="text" name="price" placeholder="Enter product price" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="categories" class="form-control-label">Quantity</label>
                      <input type="text" name="qty" placeholder="Enter product qty" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="categories" class="form-control-label">Image</label>
                      <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <div class="field_error">
                      <?php if (isset($fileerror) && !empty($fileerror)): ?>
                         <?= $fileerror ?>
                      <?php endif; ?>
                    </div>
                    <div class="form-group">
                      <label for="categories" class="form-control-label">Short Description</label>
                      <textarea name="short_desc" placeholder="Enter product short description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="categories" class="form-control-label">Description</label>
                      <textarea name="description" placeholder="Enter product description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="categories" class="form-control-label">Meta Title</label>
                      <textarea name="meta_title" placeholder="Enter product meta title" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="categories" class="form-control-label">Meta Description</label>
                      <textarea name="meta_desc" placeholder="Enter product meta description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="categories" class="form-control-label">Meta Keyword</label>
                      <textarea name="meta_keyword" placeholder="Enter product meta keyword" class="form-control"></textarea>
                    </div>

                    <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                    <span id="payment-button-amount" name="submit">Submit</span>
                    </button>
                 </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>
