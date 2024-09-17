@extends('../layouts/master')

@section('title','Purchase Order Scan')
@section('content')
<div id="upload-section">
              <!-- The original row with the form -->
              <div class="row upload-row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-md-6">

                      <!-- Profile Image -->
                      <div class="card card-dark card-outline">
                        <div class="nav-item">
                          <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                              class="fas fa-expand"></i></button>
                        </div>
                        <div class="card-body box-profile">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="purchase-order-is-compare" value="">
                            <label for="purchase-order-is-compare" class="custom-control-label">
                              <h6>Is Compare ?</h6>
                            </label>
                          </div>
                          <div id="progress-container">
                            <div class="progress">
                              <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                              </div>
                            </div>
                            <h5 class="bg-success text-center" id="progress-text">0% Complete (success)</h6>
                          </div>
                          <h5 class="bg-success text-center" id="scan-status" style="display: none;">Scan Success</h6>
                            <iframe id="pdf-iframe" src="{{ asset($fileUrl) }}" width="100%"
                            height="600"></iframe>
                            
                            <form id="upload-form" class="mt-10">
                              <div class="" style="display: flex;justify-content: space-between;">
                                <input type="file" id="file-input" style="width: 200px" accept="image/*" required>
                                <button class="bg-dark " style="width: 100px;">Re Scan</button>
                              </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->

                      <div class="card card-danger card-outline" id="purchase-order-is-compare-card">
                        <div class="card-header p-2">
                          <ul class="nav nav-pills">
                          </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                          <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                              <form id="data-form" class="form-horizontal">
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Nama Vendor</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="nama_vendorCompare"
                                      name="nama_vendor" value="" placeholder="Nama...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="no_invoice" class="col-sm-4 col-form-label">No Invoice</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="no_invoiceCompare"
                                      name="no_invoice" value="" placeholder="No Invoice...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="tanggal_invoice" class="col-sm-4 col-form-label">Tanggal Invoice</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="date" class="form-control is-valid" id="tanggal_invoiceCompare"
                                      value="" name="tanggal_invoice" placeholder="Tanggal Invoice...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>


                                </div>
                                <div class="form-group row">
                                  <label for="Periode" class="col-sm-4 col-form-label">Periode</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="PeriodeCompare" name="Periode"
                                      value="" placeholder="Periode ...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="no_kontrakCompare" class="col-sm-4 col-form-label">No Kontrak</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="no_kontrakCompare"
                                      name="no_kontrak" value="" placeholder="No Kontrak ...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="DPP" class="col-sm-4 col-form-label">DPP</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="number" class="form-control is-valid" id="DPPCompare" name="DPP"
                                      value="" placeholder="DPP..">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Tax" class="col-sm-4 col-form-label">Tax</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="number" class="form-control is-valid" id="TaxCompare" name="Tax"
                                      value="" placeholder="Tax...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Total" class="col-sm-4 col-form-label">Total</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="number" class="form-control is-valid" id="TotalCompare" name="Total"
                                      value="" placeholder="Total...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Type_Tax" class="col-sm-4 col-form-label">Type Tax</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="Type_TaxCompare"
                                      name="Type_Tax" value="" placeholder="Tipe Tax">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="No_Rek" class="col-sm-4 col-form-label">No Rekening</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="No_RekCompare" name="" value=""
                                      placeholder="No Rekening...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Nama_Rek" class="col-sm-4 col-form-label">Nama Rekening</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="Nama_RekCompare"
                                      name="Nama_Rek" value="" placeholder="Nama Rekening...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Nama_Bank" class="col-sm-4 col-form-label">Nama Bank</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="Nama_BankCompare"
                                      name="Nama_Bank" value="" placeholder="Nama Bank...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Type_Transaksi" class="col-sm-4 col-form-label">Tipe Transaksi</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="Type_TransaksiCompare"
                                      name="Type_Transaksi" value="" placeholder="Type Transaksi...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Meterai" class="col-sm-4 col-form-label">Meterai</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="MeteraiCompare" name="Meterai"
                                      value="" placeholder="Meterai...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="NILAI_METERAI" class="col-sm-4 col-form-label">Nilai Meterai</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="number" class="form-control is-valid" id="NILAI_METERAICompare"
                                      name="NILAI_METERAI" value="" placeholder="Nilai Meterai">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>

                                </div>
                                <!-- Add other form fields here -->
                                <div class="form-group row">
                                  <div class="" style="display: flex; justify-content: space-between;">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button class="btn btn-danger" onclick="clearForm()">Clear Form</button>
                                  </div>
                                  <div class="offset-sm-4 col-sm-10">

                                  </div>
                                </div>
                              </form>

                              <!-- /.post -->
                            </div>
                          </div>
                          <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                      </div>

                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="card card-danger card-outline">
                        <div class="card-header p-2">
                          <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link bg-dark active" href="#activity"
                                data-toggle="tab">Information Detail</a></li>
                          </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                              <form class="form-horizontal">
                                <div class="form-group row">
                                  <label for="inputNIK" class="col-sm-4 col-form-label">Nama Vendor</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="nama_vendor" name="nama_vendor" value="{{ $invoices['data']['nama_vendor'] ?? '' }}"
                                      placeholder="Nama...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="no_invoice" class="col-sm-4 col-form-label">No Invoice</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="no_invoice" name="no_invoice" value="{{ $invoices['data']['no_invoice'] ?? '' }}"
                                      placeholder="No Invoice...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="tanggal_invoice" class="col-sm-4 col-form-label">Tanggal Invoice</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="date" class="form-control is-valid" id="tanggal_invoice"
                                      name="tanggal_invoice" value="{{ $invoices['data']['tanggal_invoice'] ?? '' }}" placeholder="Tanggal Invoice...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>


                                </div>
                                <div class="form-group row">
                                  <label for="Periode" class="col-sm-4 col-form-label">Periode</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="Periode" name="Periode" value="{{ $invoices['data']['Periode'] ?? '' }}"
                                      placeholder="Periode ...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="no_kontrak" class="col-sm-4 col-form-label">No Kontrak</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="no_kontrak" name="no_kontrak" value="{{ $invoices['data']['no_kontrak'] ?? '' }}"
                                      placeholder="No Kontrak ...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="DPP" class="col-sm-4 col-form-label">DPP</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="number" class="form-control is-valid" id="DPP" name="DPP" value="{{ $invoices['data']['DPP'] ?? '' }}"
                                      placeholder="DPP..">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Tax" class="col-sm-4 col-form-label">Tax</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="number" class="form-control is-valid" id="Tax" name="Tax" value="{{ $invoices['data']['Tax'] ?? '' }}"
                                      placeholder="Tax...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Total" class="col-sm-4 col-form-label">Total</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="number" class="form-control is-valid" id="Total" name="Total" value="{{ $invoices['data']['Total'] ?? '' }}"
                                      placeholder="Total...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Type_Tax" class="col-sm-4 col-form-label">Type Tax</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="Type_Tax" name="Type_Tax" value="{{ $invoices['data']['Type_Tax'] ?? '' }}"
                                      placeholder="Tipe Tax">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>

                                </div>
                                <div class="form-group row">
                                  <label for="No_Rek" class="col-sm-4 col-form-label">No Rekening</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="No_Rek" name="" value="{{ $invoices['data']['No_Rek'] ?? '' }}"
                                      placeholder="No Rekening...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Nama_Rek" class="col-sm-4 col-form-label">Nama Rekening</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="Nama_Rek" name="Nama_Rek" value="{{ $invoices['data']['Nama_Rek'] ?? '' }}"
                                      placeholder="Nama Rekening...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Nama_Bank" class="col-sm-4 col-form-label">Nama Bank</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="Nama_Bank" name="Nama_Bank" value="{{ $invoices['data']['Nama_Bank'] ?? '' }}"
                                      placeholder="Nama Bank...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Type_Transaksi" class="col-sm-4 col-form-label">Tipe Tramsaksi</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="Type_Transaksi"
                                      name="Type_Transaksi" value="{{ $invoices['data']['Type_Transaksi'] ?? '' }}" placeholder="Type Transaksi...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="Meterai" class="col-sm-4 col-form-label">Meterai</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="text" class="form-control is-valid" id="Meterai" name="Meterai" value="{{ $invoices['data']['Meterai'] ?? '' }}"
                                      placeholder="Meterai...">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="NILAI_METERAI" class="col-sm-4 col-form-label">Nilai Meterai</label>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-terminal"></i></span>
                                    </div>
                                    <input type="number" class="form-control is-valid" id="NILAI_METERAI"
                                      name="NILAI_METERAI" value="{{ $invoices['data']['NILAI METERAI'] ?? '' }}" placeholder="Nilai Meterai">
                                  </div>

                                  <div class=" " style="display: flex;justify-content: space-between;">
                                    <div class="text-danger" hidden>
                                      Please insert data
                                    </div>
                                    <div class="text-success" position="right">
                                      Validation score : 100
                                    </div>
                                  </div>

                                </div>
                                <!-- Add other form fields here -->
                                <div class="form-group row">
                                  <div class="" style="display: flex; justify-content: space-between;">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button class="btn btn-danger" onclick="clearForm()">Clear Form</button>
                                  </div>
                                  <div class="offset-sm-4 col-sm-10">

                                  </div>
                                </div>
                              </form>
                              <!-- /.post -->
                            </div>
                          </div>
                          <!-- /.tab-content -->
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>

            <!-- Add More Button -->
            <div class="row">
              <div class="col-12">
                <button id="add-more" class="btn btn-success mt-3">Add More</button>
              </div>
            </div>




            
<script>
  document.getElementById('file-input').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        document.getElementById('image-preview').src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
</script>

  <!-- add more row  -->
  <script>
    document.getElementById('add-more').addEventListener('click', function () {
      // Clone the original upload row
      var originalRow = document.querySelector('.upload-row');
      var clone = originalRow.cloneNode(true);

      // Clear the input fields in the cloned row (if needed)
      var inputs = clone.querySelectorAll('input[type="text"], input[type="file"]');
      inputs.forEach(input => input.value = '');

      // Append the cloned row to the upload section
      document.getElementById('upload-section').appendChild(clone);
    });

  </script>
  <!-- end add more row  -->




  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Simulasi data JSON
      const data = {
        "nama_vendor": "PT INFOMEDIA SOLUSI HUMANIKA",
        "no_invoice": "24/ISH/INV/IV/12460",
        "tanggal_invoice": "16 April 2024",
        "Periode": "Maret 2024",
        "no_kontrak": "",
        "DPP": "735838394",
        "Tax": "80942223",
        "Total": "816780617",
        "Type_Tax": "PPN 11%",
        "No_Rek": "028-6384535",
        "Nama_Rek": "PT INFOMEDIA SOLUSI HUMANIKA",
        "Nama_Bank": "Bank BNI KCP Duta Mas ITC Fatmawati",
        "Type_Transaksi": "Rp",
        "Meterai": "",
        "NILAI_METERAI": ""
      };

      // Fungsi untuk mengonversi tanggal dari format '16 April 2024' ke '2024-04-16'
      function convertDateToISO(dateString) {
        const months = {
          'Januari': '01', 'Februari': '02', 'Maret': '03', 'April': '04', 'Mei': '05', 'Juni': '06',
          'Juli': '07', 'Agustus': '08', 'September': '09', 'Oktober': '10', 'November': '11', 'Desember': '12'
        };

        // Pisahkan string tanggal menjadi bagian-bagian
        const [day, month, year] = dateString.split(' ');

        // Cek apakah bulan valid
        const monthNumber = months[month];
        if (!monthNumber) return ''; // Jika bulan tidak valid

        // Format menjadi YYYY-MM-DD
        return `${year}-${monthNumber}-${String(day).padStart(2, '0')}`;
      }



      startLoadingProgress();

      // Fungsi untuk mengupdate progress bar
      function updateProgressBar(percent) {
        const progressBar = document.querySelector(".progress-bar");
        const progressText = document.getElementById("progress-text");

        progressBar.style.width = percent + "%";
        progressText.textContent = percent + "% Complete";

        if (percent >= 100) {
          
          setTimeout(() => {


            // Hide the progress bar
            document.getElementById("progress-container").style.display = "none";
            // Show the success message
            document.getElementById("scan-status").style.display = "block";
            // Show the form
            document.getElementById("data-form").style.display = "block";

            // Fill the form with JSON data
            document.getElementById("nama_vendor").value = data.nama_vendor || '';
            document.getElementById("no_invoice").value = data.no_invoice || '';
            document.getElementById("tanggal_invoice").value = convertDateToISO(data.tanggal_invoice) || '';
            document.getElementById("Periode").value = data.Periode || '';
            document.getElementById("no_kontrak").value = data.no_kontrak || '';
            document.getElementById("DPP").value = formatCurrencyToNumber(data.DPP) || '';
            document.getElementById("Tax").value = formatCurrencyToNumber(data.Tax) || '';
            document.getElementById("Total").value = formatCurrencyToNumber(data.Total) || '';
            document.getElementById("Type_Tax").value = data.Type_Tax || '';
            document.getElementById("No_Rek").value = data.No_Rek || '';
            document.getElementById("Nama_Rek").value = data.Nama_Rek || '';
            document.getElementById("Nama_Bank").value = data.Nama_Bank || '';
            document.getElementById("Type_Transaksi").value = data.Type_Transaksi || '';
            document.getElementById("Meterai").value = data.Meterai || '';
            document.getElementById("NILAI_METERAI").value = data.NILAI_METERAI || '';

            document.getElementById("nama_vendorCompare").value = data.nama_vendor || '';
            document.getElementById("no_invoiceCompare").value = data.no_invoice || '';
            document.getElementById("tanggal_invoiceCompare").value = convertDateToISO(data.tanggal_invoice) || '';
            document.getElementById("PeriodeCompare").value = data.Periode || '';
            document.getElementById("no_kontrakCompare").value = data.no_kontrak || '';
            document.getElementById("DPPCompare").value = formatCurrencyToNumber(data.DPP) || '';
            document.getElementById("TaxCompare").value = formatCurrencyToNumber(data.Tax) || '';
            document.getElementById("TotalCompare").value = formatCurrencyToNumber(data.Total) || '';
            document.getElementById("Type_TaxCompare").value = data.Type_Tax || '';
            document.getElementById("No_RekCompare").value = data.No_Rek || '';
            document.getElementById("Nama_RekCompare").value = data.Nama_Rek || '';
            document.getElementById("Nama_BankCompare").value = data.Nama_Bank || '';
            document.getElementById("Type_TransaksiCompare").value = data.Type_Transaksi || '';
            document.getElementById("MeteraiCompare").value = data.Meterai || '';
            document.getElementById("NILAI_METERAICompare").value = data.NILAI_METERAI || '';
          }, 500);
        }
      }

      // Fungsi untuk mengubah format mata uang menjadi angka
      function formatCurrencyToNumber(value) {
        if (!value) return '';
        // Hapus pemisah ribuan (titik) dan ganti pemisah desimal (koma) dengan titik
        return parseFloat(value.replace(/\./g, '').replace(',', '.'));
      }

      function clearForm() {
        document.getElementById("nama_vendor").value = '';
        document.getElementById("no_invoice").value = '';
        document.getElementById("tanggal_invoice").value = '';
        document.getElementById("Periode").value = '';
        document.getElementById("no_kontrak").value = '';
        document.getElementById("DPP").value = '';
        document.getElementById("Tax").value = '';
        document.getElementById("Total").value = '';
        document.getElementById("Type_Tax").value = '';
        document.getElementById("No_Rek").value = '';
        document.getElementById("Nama_Rek").value = '';
        document.getElementById("Nama_Bank").value = '';
        document.getElementById("Type_Transaksi").value = '';
        document.getElementById("Meterai").value = '';
        document.getElementById("NILAI_METERAI").value = '';
      }

      // Fungsi untuk memulai loading progress
      function startLoadingProgress() {
        let progress = 0;
        const interval = setInterval(() => {
          progress += 20;
          updateProgressBar(progress);
          if (progress >= 100) {
            clearInterval(interval);
          }
        }, 1000);
      }

      document.getElementById('file-input').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
          // Contoh: Menampilkan pratinjau gambar
          const reader = new FileReader();
          reader.onload = function (e) {
            const imgPreview = document.getElementById('image-preview');
            imgPreview.src = e.target.result;
            imgPreview.style.display = 'block'; // Menampilkan gambar
          };
          reader.readAsDataURL(file);
        }
      });

      function reScan() {
        location.reload(); // Memuat ulang halaman
      }
    });

  </script>


  <script>
    function showPDF() {
      const fileInput = document.getElementById('file-input-pdf');
      const file = fileInput.files[0];

      if (file && file.type === 'application/pdf') {
        const fileURL = URL.createObjectURL(file);
        document.getElementById('pdf-iframe').src = fileURL;
      } else {
        alert('Please upload a valid PDF file.');
      }
    }
  </script>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const checkbox = document.getElementById('purchase-order-is-compare');
      const card = document.getElementById('purchase-order-is-compare-card');

      // Load the saved checkbox state from localStorage
      const isChecked = localStorage.getItem('purchase-order-is-compare') === 'true';
      checkbox.checked = isChecked;
      card.style.display = isChecked ? 'block' : 'none';

      checkbox.addEventListener('change', function () {
        const isChecked = checkbox.checked;
        localStorage.setItem('purchase-order-is-compare', isChecked);
        card.style.display = isChecked ? 'block' : 'none';
      });
    });
  </script>
@endsection