@extends('../layouts/master')

@section('title','Purchase Order')
@section('content')
            <div id="upload-section">
              <!-- The original row with the form -->
              <div class="row upload-row">
                <div class="col-12">
                  
                  <div class="row">
                    <div class="col-md-6">
                        <form method="POST" action="{{route('purchase-order.scan') }}" id="upload-form"  class="mt-10"  enctype="multipart/form-data">
                        @csrf
                          <!-- Profile Image -->
                          <div class="card card-danger card-outline">
                            <div class="card-body box-profile">
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="purchase-order-is-compare" value="">
                                <label for="purchase-order-is-compare" class="custom-control-label">
                                    <h6>Is Compare ?</h6>
                                </label>
                              </div>
                              <h6 class="">Upload a PDF or image file (JPEG, PNG, GIF, WebP, BMP, SVG) </h6>
                          
                              <!-- Iframe to display PDF/image -->
                              <iframe id="pdf-preview" style="outline: none !important; border: none;" src="" width="100%" height="800"></iframe>  
                              <img id="image-preview" alt="Image Preview">

                              <!-- Form Upload -->
                                <div style="display: flex; justify-content: space-between;">
                                    <input type="text" name="is_url" value="0" hidden>
                                    <input type="file" id="file-input" name="doc_invoice_img" style="width: 200px;" accept=".pdf, image/*" required onchange="handleFile()">
                                    <button type="submit" class="btn bg-dark" style="width: 100px;">Scan</button>
                                </div>
                              </form>

                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          <div class="card card-danger card-outline" id="purchase-order-is-compare-card">
                            <div class="card-header p-2">
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                  <form id="data-form" class="form-horizontal">
                                    <div class="form-group row">
                                      <label for="inputNIK" class="col-sm-4 col-form-label">Nama Vendor</label>
                                      <input type="text" class="form-control" id="nama_vendor" name="nama_vendor" placeholder="Nama">
                                    </div>
                                    <div class="form-group row">
                                      <label for="no_invoice" class="col-sm-4 col-form-label">No Invoice</label>
                                      <input type="text" class="form-control" id="no_invoice" name="no_invoice" placeholder="No Invoice...">
                                    </div>
                                    <div class="form-group row">
                                      <label for="tanggal_invoice" class="col-sm-4 col-form-label">Tanggal Invoice</label>
                                      <input type="date" class="form-control" id="tanggal_invoice" name="tanggal_invoice" 
                                        placeholder="Tanggal Invoice...">

                                    </div>
                                    <div class="form-group row">
                                      <label for="Periode" class="col-sm-4 col-form-label">Periode</label>
                                      <input type="text" class="form-control" id="Periode" name="Periode"  placeholder="Periode ...">

                                    </div>
                                    <div class="form-group row">
                                      <label for="no_kontrak" class="col-sm-4 col-form-label">No Kontak</label>
                                      <input type="text" class="form-control" id="no_kontrak" name="no_kontrak"  placeholder="No Kontak ...">

                                    </div>
                                    <div class="form-group row">
                                      <label for="DPP" class="col-sm-4 col-form-label">DPP</label>
                                      <input type="number" class="form-control" id="DPP" name="DPP"  placeholder="DPP..">

                                    </div>
                                    <div class="form-group row">
                                      <label for="Tax" class="col-sm-4 col-form-label">Tax</label>
                                      <input type="number" class="form-control" id="Tax" name="Tax"  placeholder="Tax...">

                                    </div>
                                    <div class="form-group row">
                                      <label for="Total" class="col-sm-4 col-form-label">Total</label>
                                      <input type="number" class="form-control" id="Total" name="Total"  placeholder="Total...">

                                    </div>
                                    <div class="form-group row">
                                      <label for="Type_Tax" class="col-sm-4 col-form-label">Type Tax</label>
                                      <input type="text" class="form-control" id="Type_Tax" name="Type_Tax"  placeholder="Tipe Tax">
                                    </div>
                                    <div class="form-group row">
                                      <label for="No_Rek" class="col-sm-4 col-form-label">No Rekening</label>
                                      <input type="text" class="form-control" id="No_Rek" name=""  placeholder="No Rekening...">
                                    </div>
                                    <div class="form-group row">
                                      <label for="Nama_Rek" class="col-sm-4 col-form-label">Nama Rekening</label>
                                      <input type="text" class="form-control" id="Nama_Rek" name="Nama_Rek"  placeholder="Nama Rekening...">
                                    </div>
                                    <div class="form-group row">
                                      <label for="Nama_Bank" class="col-sm-4 col-form-label">Nama Bank</label>
                                      <input type="text" class="form-control" id="Nama_Bank" name="Nama_Bank"  placeholder="Nama Bank...">
                                    </div>
                                    <div class="form-group row">
                                      <label for="Type_Transaksi" class="col-sm-4 col-form-label">Tipe Tramsaksi</label>
                                      <input type="text" class="form-control" id="Type_Transaksi" name="Type_Transaksi"  placeholder="Type Transaksi...">
                                    </div>
                                    <div class="form-group row">
                                      <label for="Meterai" class="col-sm-4 col-form-label">Meretai</label>
                                      <input type="text" class="form-control" id="Meterai" name="Meterai"  placeholder="Meterai...">
                                    </div>
                                    <div class="form-group row">
                                      <label for="NILAI_METERAI" class="col-sm-4 col-form-label">Nilai Meterai</label>
                                      <input type="number" class="form-control" id="NILAI_METERAI" name="NILAI_METERAI"  placeholder="Nilai Meterai">
                                    </div>
                                    <!-- Add other form fields here -->
                                    <div class="form-group row">
                                      <div class="" style="display: flex; justify-content: space-between;">
                                        <button type="submit" class="btn btn-primary">Scan</button>
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
                        </form>
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
                                  <input type="text" class="form-control" id="nama_vendor" name="nama_vendor" placeholder="Nama">
                                </div>
                                <div class="form-group row">
                                  <label for="no_invoice" class="col-sm-4 col-form-label">No Invoice</label>
                                  <input type="text" class="form-control" id="no_invoice" name="no_invoice" placeholder="No Invoice...">
                                </div>
                                <div class="form-group row">
                                  <label for="tanggal_invoice" class="col-sm-4 col-form-label">Tanggal Invoice</label>
                                  <input type="date" class="form-control" id="tanggal_invoice" name="tanggal_invoice" 
                                    placeholder="Tanggal Invoice...">

                                </div>
                                <div class="form-group row">
                                  <label for="Periode" class="col-sm-4 col-form-label">Periode</label>
                                  <input type="text" class="form-control" id="Periode" name="Periode"  placeholder="Periode ...">

                                </div>
                                <div class="form-group row">
                                  <label for="no_kontrak" class="col-sm-4 col-form-label">No Kontak</label>
                                  <input type="text" class="form-control" id="no_kontrak" name="no_kontrak"  placeholder="No Kontak ...">

                                </div>
                                <div class="form-group row">
                                  <label for="DPP" class="col-sm-4 col-form-label">DPP</label>
                                  <input type="number" class="form-control" id="DPP" name="DPP"  placeholder="DPP..">

                                </div>
                                <div class="form-group row">
                                  <label for="Tax" class="col-sm-4 col-form-label">Tax</label>
                                  <input type="number" class="form-control" id="Tax" name="Tax"  placeholder="Tax...">

                                </div>
                                <div class="form-group row">
                                  <label for="Total" class="col-sm-4 col-form-label">Total</label>
                                  <input type="number" class="form-control" id="Total" name="Total"  placeholder="Total...">

                                </div>
                                <div class="form-group row">
                                  <label for="Type_Tax" class="col-sm-4 col-form-label">Type Tax</label>
                                  <input type="text" class="form-control" id="Type_Tax" name="Type_Tax"  placeholder="Tipe Tax">
                                </div>
                                <div class="form-group row">
                                  <label for="No_Rek" class="col-sm-4 col-form-label">No Rekening</label>
                                  <input type="text" class="form-control" id="No_Rek" name=""  placeholder="No Rekening...">
                                </div>
                                <div class="form-group row">
                                  <label for="Nama_Rek" class="col-sm-4 col-form-label">Nama Rekening</label>
                                  <input type="text" class="form-control" id="Nama_Rek" name="Nama_Rek"  placeholder="Nama Rekening...">
                                </div>
                                <div class="form-group row">
                                  <label for="Nama_Bank" class="col-sm-4 col-form-label">Nama Bank</label>
                                  <input type="text" class="form-control" id="Nama_Bank" name="Nama_Bank"  placeholder="Nama Bank...">
                                </div>
                                <div class="form-group row">
                                  <label for="Type_Transaksi" class="col-sm-4 col-form-label">Tipe Tramsaksi</label>
                                  <input type="text" class="form-control" id="Type_Transaksi" name="Type_Transaksi"  placeholder="Type Transaksi...">
                                </div>
                                <div class="form-group row">
                                  <label for="Meterai" class="col-sm-4 col-form-label">Meretai</label>
                                  <input type="text" class="form-control" id="Meterai" name="Meterai"  placeholder="Meterai...">
                                </div>
                                <div class="form-group row">
                                  <label for="NILAI_METERAI" class="col-sm-4 col-form-label">Nilai Meterai</label>
                                  <input type="number" class="form-control" id="NILAI_METERAI" name="NILAI_METERAI"  placeholder="Nilai Meterai">
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
  function handleFile() {
      const fileInput = document.getElementById('file-input');
      const file = fileInput.files[0];
      const pdfPreview = document.getElementById('pdf-preview');
      const imagePreview = document.getElementById('image-preview');

      if (file) {
          const fileType = file.type;

          if (fileType === 'application/pdf') {
              // Display PDF
              const reader = new FileReader();
              reader.onload = function(e) {
                  pdfPreview.src = e.target.result;
                  pdfPreview.style.display = 'block';
                  imagePreview.style.display = 'none';
              };
              reader.readAsDataURL(file);
          } else if (fileType.startsWith('image/')) {
              // Display image
              const reader = new FileReader();
              reader.onload = function(e) {
                  imagePreview.src = e.target.result;
                  imagePreview.style.display = 'block';
                  pdfPreview.style.display = 'none';
              };
              reader.readAsDataURL(file);
          } else {
              alert('File type not supported. Please upload a PDF or an image.');
          }
      }
  }
</script>

<script>

  function clearForm() {
    document.getElementById("nama_vendor").value = '';
    document.getElementById("no_invoice").value = '';
    document.getElementById("tanggal_invoice").value = '';
    document.getElementById("periode").value = '';
    document.getElementById("no_kontrak").value = '';
    document.getElementById("dpp").value = '';
    document.getElementById("tax").value = '';
    document.getElementById("total").value = '';
    document.getElementById("type_tax").value = '';
    document.getElementById("no_rek").value = '';
    document.getElementById("nama_rek").value = '';
    document.getElementById("nama_bank").value = '';
    document.getElementById("type_transaksi").value = '';
    document.getElementById("meterai").value = '';
    document.getElementById("nilai_meterai").value = '';
  }

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



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.getElementById('purchase-order-is-compare');
        const card = document.getElementById('purchase-order-is-compare-card');

        // Load the saved checkbox state from localStorage
        const isChecked = localStorage.getItem('purchase-order-is-compare') === 'true';
        checkbox.checked = isChecked;
        card.style.display = isChecked ? 'block' : 'none';

        checkbox.addEventListener('change', function() {
            const isChecked = checkbox.checked;
            localStorage.setItem('purchase-order-is-compare', isChecked);
            card.style.display = isChecked ? 'block' : 'none';
        });
    });
  </script>
@endsection