@if($action == "add" || $action == "edit")
    <form class="form-horizontal form-bordered label-initial" data-parsley-validate="true">
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4" for="fullname">Courier Name <span class="text-danger">*</span> :</label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" id="couriername" name="couriername"  data-parsley-required="true" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4" for="email">Contact Person <span class="text-danger">*</span> :</label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" id="contact" name="contact" data-parsley-required="true" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4" for="website">Phone Number <span class="text-danger">*</span> :</label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" id="phone" name="phone" data-parsley-required="true" data-parsley-type="digits"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4" for="website">Status <span class="text-danger">*</span> :</label>
            <div class="col-md-6 col-sm-6">
                <select name="status" id="status" class="form-control" data-parsley-required="true">
                    <option value="0" disabled selected>- Select -</option>
                    <option value="1">Online</option>
                    <option value="2">Offline</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4"></label>
            <div class="col-md-6 col-sm-6">
                <button class="btn btn-primary">Submit</button>
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

<script src="plugins/parsley/dist/parsley.js"></script>