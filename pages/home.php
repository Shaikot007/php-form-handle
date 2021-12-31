<?php include "./includes/header.php"; ?>

  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="card">
            <div class="card-header text-center">
              <h3>Show smallest to largest number</h3>
            </div>
            <div class="card-body">
              <form action="action.php" method="POST">
                <div class="form-group row">
                  <label for="first_number" class="col-form-label col-md-3">
                    First number
                  </label>
                  <div class="col-md-9">
                    <input type="number" name="first_number" id="first_number" class="form-control" required />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="last_number" class="col-form-label col-md-3">
                    Last number
                  </label>
                  <div class="col-md-9">
                    <input type="number" name="last_number" id="last_number" class="form-control" required />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="result" class="col-form-label col-md-3">
                    Result
                  </label>
                  <div class="col-md-9">
                    <textarea id="result" class="form-control" readonly><?php if(isset($result)) { echo $result; } ?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-md-3">
                  </label>
                  <div class="col-md-9">
                    <input type="submit" name="button_one" class="btn btn-outline-success btn-block" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include "./includes/footer.php"; ?>
