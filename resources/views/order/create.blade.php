@extends('layout.app')
@section('nav','order')
@section('subnav','create-order')
@section('title','Create Order')
@section('subtitle','404 Users')

@section('content')    
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Create Order</h4>
                </div>
                <div class="panel-body">
                    {{-- <form action="/" method="POST" data-parsley-validate="true" name="form-wizard"> --}}
                    <form action="/" method="POST">
                        <div id="wizard">
                            <ol style="padding: 0;">
                                <li>
                                    Sender Information 
                                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                                </li>
                                <li>
                                    Consignee Information
                                    <small>Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin.</small>
                                </li>
                                <li>
                                    Item Detail
                                    <small>Phasellus lacinia placerat neque pretium condimentum.</small>
                                </li>
                                <li>
                                    Vendor Selection
                                    <small>Sed nunc neque, dapibus non leo sed, rhoncus dignissim elit.</small>
                                </li>
                                <li>
                                    Summary
                                    <small>Sed nunc neque, dapibus non leo sed, rhoncus dignissim elit.</small>
                                </li>
                            </ol>
                            <!-- begin wizard step-1 -->
                            <div class="wizard-step-1">
                                <fieldset>
                                    <legend class="pull-left width-full">Sender Information</legend>
                                    <!-- begin row -->
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-offset-0">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <label>Sender Name</label>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <input type="text" name="sender_name" placeholder="*Sender Name" class="form-control" data-parsley-group="wizard-step-1" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <label>Origin City</label>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <input type="text" name="sender_city" placeholder="*Origin City" class="form-control" data-parsley-group="wizard-step-1" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <label>Address</label>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <textarea rows="5" name="sender_address" placeholder="*Address" class="form-control" data-parsley-group="wizard-step-1" required /></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <label>Postal Code</label>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <input type="text" name="sender_postalcode" placeholder="*Postal Code" class="form-control" data-parsley-group="wizard-step-1" data-parsley-type="number" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <label>Phone Number</label>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <input type="text" name="sender_phone" placeholder="*Phone Number" class="form-control" data-parsley-group="wizard-step-1" data-parsley-type="number" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                            </div>
                            <!-- end wizard step-1 -->
                            <!-- begin wizard step-2 -->
                            <div class="wizard-step-2">
                                <fieldset>
                                    <legend class="pull-left width-full">Consignee Information</legend>
                                    <!-- begin row -->
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-offset-0">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <label>Consignee Name</label>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <input type="text" name="consignee_name" placeholder="*Consignee Name" class="form-control" data-parsley-group="wizard-step-2" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <label>Origin City</label>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <input type="text" name="consignee_city" placeholder="*Origin City" class="form-control" data-parsley-group="wizard-step-2" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <label>Address</label>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <textarea rows="5" name="consignee_address" placeholder="*Address" class="form-control" data-parsley-group="wizard-step-2" required /></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <label>Postal Code</label>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <input type="text" name="consignee_postalcode" placeholder="*Postal Code" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <label>Phone Number</label>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <input type="text" name="consignee_phone" placeholder="*Phone Number" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                            </div>
                            <!-- end wizard step-2 -->
                            <!-- begin wizard step-3 -->
                            <div class="wizard-step-3">
                                <fieldset>
                                    <legend class="pull-left width-full">
                                        <span class="pull-left">Item Detail</span>
                                        <span id="add-item" class="pull-right" style="cursor: pointer;"><a>+ add new item</a></span>
                                    </legend>
                                    <div id="item-body">
                                        <div class="item-component">
                                            <!-- begin row -->
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-offset-0">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <label>Item Name</label>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <input type="text" name="item_name[]" placeholder="*Item Name" class="form-control" data-parsley-group="wizard-step-3" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <label>Item Quantity</label>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <select class="form-control" name="item_qty[]" style="width: auto; float: left;" data-parsley-group="wizard-step-3" required />
                                                                    <option value="1">1</option>
                                                                    @for($i = 2; $i <= 20; $i++)
                                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                                <select class="form-control" name="item_type[]" style="width: auto; float: left; margin-left: 10px;" data-parsley-group="wizard-step-3" required />
                                                                    <option value="Pcs/Units">Pcs/Units</option>
                                                                    <option value="Coli">Coli</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <label>Item Value</label>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <input type="text" name="item_value[]" placeholder="*Rp" class="form-control" data-parsley-group="wizard-step-3" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <label>Item Weight</label>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <input type="text" name="item_weight[]" placeholder="*Kg" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="number" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <label>Dimension <small>(Optional)</small></label>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="pull-left" style="width: 30%; margin-right: 5%;">
                                                                    <input type="text" name="item_dimension_w[]" placeholder="Width (cm)" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="number" required />
                                                                </div>
                                                                <div class="pull-left" style="width: 30%; margin-right: 5%;">
                                                                    <input type="text" name="item_dimension_h[]" placeholder="Height (cm)" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="number" required />
                                                                </div>
                                                                <div class="pull-left" style="width: 30%;">
                                                                    <input type="text" name="item_dimension_l[]" placeholder="Lenght (cm)" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="number" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <label>Service</label>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <label style="margin-right: 10px;"><input type="radio" name="service[]" data-parsley-group="wizard-step-3" required  style="margin-right: 2px;"/> Pick Only</label>
                                                                <label style="margin-left: 10px;"><input type="radio" name="service[]" data-parsley-group="wizard-step-3" required style="margin-right: 2px;"/> Pick & Pack</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <!-- end wizard step-3 -->
                            <!-- begin wizard step-4 -->
                            <div class="wizard-step-4">
                                <fieldset>
                                    <legend class="pull-left width-full">Item Detail</legend>
                                    <!-- begin row -->
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-offset-0">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td class="th"></td>
                                                        <td class="th">Vendor</td>
                                                        <td class="th">Estimated Time</td>
                                                        <td class="th">Price</td>
                                                        <td class="th">Rating</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="radio" name="vendor"></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="radio" name="vendor"></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>                                           
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                            </div>
                            <!-- end wizard step-4 -->
                            <!-- begin wizard step-5 -->
                            <div class="wizard-step-54">
                                <fieldset>
                                    <legend class="pull-left width-full">Summary</legend>
                                    <!-- begin row -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-5 col-sm-offset-1" style="padding: 15px;">
                                                    <h5 class="lead" style="margin-bottom: 10px">Sender Information</h5>
                                                    <div class="row">
                                                        <div class="col-xs-5">Sender Name</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Irfan Maulana</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Sender City</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">DKI Jakarta</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Sender Address</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Jalan Dukuh pinggir 1 RT 02/05 no.15 Jakarta pusat kec.tanah abang kel.kebon melati</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Sender Postal Code</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">10230</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Sender Phone Number</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">087880987453</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1" style="padding: 15px;">
                                                    <h5 class="lead" style="margin-bottom: 10px">Consignee Information</h5>
                                                    <div class="row">
                                                        <div class="col-xs-5">Consignee Name</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Irfan Maulana</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Consignee City</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Bandung</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Consignee Address</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Jalan Dukuh pinggir 1 RT 02/05 no.15 Jakarta pusat kec.tanah abang kel.kebon melati</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Consignee Postal Code</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">10230</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Consignee Phone Number</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">087880987453</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-top: 30px;">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Quantity</th>
                                                                    <th>Value</th>
                                                                    <th>Weight</th>
                                                                    <th>Dimension</th>
                                                                    <th>Attribute</th>
                                                                    <th>Shipping Cost</th>
                                                                    <th>Insurance Cost</th>
                                                                    <th>Packing Cost</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Macbook pro Retina Display 15"</td>
                                                                    <td>1 Pcs/Units</td>
                                                                    <td>Rp 18.500.000</td>
                                                                    <td>6 Kg</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Rp 60.000</td>
                                                                    <td>Rp 0</td>
                                                                    <td>Rp 0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Macbook pro Retina Display 15"</td>
                                                                    <td>1 Pcs/Units</td>
                                                                    <td>Rp 18.500.000</td>
                                                                    <td>6 Kg</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Rp 60.000</td>
                                                                    <td>Rp 0</td>
                                                                    <td>Rp 0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Macbook pro Retina Display 15"</td>
                                                                    <td>1 Pcs/Units</td>
                                                                    <td>Rp 18.500.000</td>
                                                                    <td>6 Kg</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Rp 60.000</td>
                                                                    <td>Rp 0</td>
                                                                    <td>Rp 0</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>3 Item(s)</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th>18 Kg</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th>Rp 180.000</th>
                                                                    <th>Rp 0</th>
                                                                    <th>Rp 0</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h3 class="f-w-700 pull-left">Vendor : Daytrans</h3>
                                                    <h3 class="f-w-700 pull-right">Total Cost : Rp 180.000</h3>
                                                </div>
                                                {{-- <div class="col-sm-6" style="padding: 15px;">
                                                    <h5 class="lead" style="margin-bottom: 10px">Sender Detail</h5>
                                                    <div class="row">
                                                        <div class="col-xs-5">Item Name</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Macbook pro Retina Display 15"</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Item Quantity</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">1 Pcs/Units</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Item Value</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">18.500.000</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">item Weight</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">6 Kg</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Item Dimension</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6"></div>
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-xs-5">Item Attributes</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" style="padding: 15px;">
                                                    <h5 class="lead" style="margin-bottom: 10px">Summary</h5>
                                                    <div class="row">
                                                        <div class="col-xs-5">Origin City</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Jakarta</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Destination City</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Bandung</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Vendor</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Daytrans</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Shipment Cost</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Rp 60.000</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-5">Insurance Cost</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">-</div>
                                                    </div> 
                                                    <div class="row lead" style="font-weight: bold;">
                                                        <div class="col-xs-5">Total Cost</div>
                                                        <div class="col-xs-1">:</div>
                                                        <div class="col-xs-6">Rp 60.000</div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <center>
                                                    <a href="new-order" class="btn btn-success btn-lg" role="button">Finish Order</a>
                                                </center>
                                            </div>                                
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                            </div>
                            <!-- end wizard step-5 -->
                        </div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->

    @section('custom-js')
        <script src="plugins/parsley/dist/parsley.js"></script>
        <script src="plugins/bootstrap-wizard/js/bwizard.js"></script>
        {{-- <script src="js/form-wizards-validation.demo.js"></script> --}}
        <script src="js/form-wizards.demo.js"></script>
        <script>
            // FormWizardValidation.init();
            FormWizard.init();

            // add multiple item
            var item = 2;
            var item_component = '<hr><div class="item-component"><div class="row"><div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-offset-0"><div class="form-group"><div class="row"><div class="col-xs-5"><label>Item Name</label></div><div class="col-xs-7"><input type="text" name="item_name[]" placeholder="*Item Name" class="form-control" data-parsley-group="wizard-step-3" required /></div></div></div><div class="form-group"><div class="row"><div class="col-xs-5"><label>Item Quantity</label></div><div class="col-xs-7"><select class="form-control" name="item_qty[]" style="width: auto; float: left;" data-parsley-group="wizard-step-3" required ><option value="1">1</option>@for($i = 2; $i <= 20; $i++)<option value="{{ $i }}">{{ $i }}</option>@endfor</select><select class="form-control" name="item_type[]" style="width: auto; float: left; margin-left: 10px;" data-parsley-group="wizard-step-3" required ><option value="Pcs/Units">Pcs/Units</option><option value="Coli">Coli</option></select></div></div></div><div class="form-group"><div class="row"><div class="col-xs-5"><label>Item Value</label></div><div class="col-xs-7"><input type="text" name="item_value[]" placeholder="*Rp" class="form-control" data-parsley-group="wizard-step-3" required /></div></div></div><div class="form-group"><div class="row"><div class="col-xs-5"><label>Item Weight</label></div><div class="col-xs-7"><input type="text" name="item_weight[]" placeholder="*Kg" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="number" required /></div></div> </div><div class="form-group"><div class="row"><div class="col-xs-5"><label>Dimension <small>(Optional)</small></label></div><div class="col-xs-7"><div class="pull-left" style="width: 30%; margin-right: 5%;"><input type="text" name="item_dimension_w[]" placeholder="Width (cm)" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="number" required /></div><div class="pull-left" style="width: 30%; margin-right: 5%;"><input type="text" name="item_dimension_h[]" placeholder="Height (cm)" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="number" required /></div><div class="pull-left" style="width: 30%;"><input type="text" name="item_dimension_l[]" placeholder="Lenght (cm)" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="number" required /></div></div></div></div></div></div></div>';

            $("#add-item").click(function(){
                $("#item-body").append(item_component);
                item++;
            });
        </script>
    @stop
@stop