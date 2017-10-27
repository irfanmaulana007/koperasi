@if($action == "add" || $action == "edit")
    <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4" for="fullname">Full Name * :</label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Required" data-parsley-required="true" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4" for="email">Email * :</label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4" for="website">Website :</label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="url" id="website" name="website" data-parsley-type="url" placeholder="url" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4"></label>
            <div class="col-md-6 col-sm-6">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </form>
@elseif($action == "delete")
    <form>
        <h4 class="text-center">Are you sure want to delete <b>{{ $id }}</b> ?</h4>
        <br>
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4"></label>
            <div class="col-md-6 col-sm-6">
                <button type="submit" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </form>
@endif