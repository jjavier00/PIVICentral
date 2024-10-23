
<html lang="en">

<?= $this->include('core/header')  ?> 

<style type="text/css"> 
    .navbar_pivi{
        background-color:#003345 !important;
    }

    .sys_image{
        width: 60%;
        height: 50%;
    }

    .sys_preview_image{
        width: 60%;
        height: auto;
    }
    .card-text{
        font-size:10px;
    }

    .sys_link{
        font-size:70%;
    }

    .cardbody{
        width: 18rem;
    }

    /* .pivi_label{
        
    } */

    .grow img{
        transition: 1s ease;
    }

    .grow img:hover{
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
        transition: 1s ease;
    }
</style>

<body  >  
    <nav class="container-fluid navbar bg-body-tertiary navbar_pivi">
        <div class="container-fluid"> 
            <a class="navbar-brand"><h1 class="pivi_label text-light">PIVI Central Dashboard</h1></a>
            <form class="d-flex mt-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> 
                <a href="#!" class="btn btn-danger" onclick="SignOut()">LogOut</a>
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="form-group text-start">
                    <a data-bs-toggle="modal" data-bs-target="#add_new_system_mdl" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                </div>    
            </div>
        </div>
        <div id="system_list" class="row"> 
        </div>  
    </div>
</body>

<div class="modal fade" id="add_new_system_mdl">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="fw-bold modal-title fs-6" id="exampleModalLabel">Add New System</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add_new_system" action="#!" method="POST" enctype="multipart/form-data">
                <div class="modal-body table-responsive">
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="fw-bold" for="sys_label">Label:</label> 
                                <input type="text" class="form-control" name="sys_label" id="sys_label">
                            </div>
                        </div> 
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="fw-bold" for="sys_logo">Logo:</label> 
                                <input type="file" class="form-control" name="sys_logo" id="sys_logo">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="fw-bold" for="sys_url">URL:</label> 
                                <input type="text" class="form-control" name="sys_url" id="sys_url">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="fw-bold" for="sys_desc">Description:</label> 
                                <input type="text" class="form-control" name="sys_desc" id="sys_desc">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                    <button type="button" class="btn btn-sm btn-dark" data-bs-dismiss="modal">Close</button> 
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_system_mdl">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="fw-bold modal-title fs-6" id="exampleModalLabel">Edit System</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="edit_system" action="#!" method="POST" enctype="multipart/form-data">
                <div class="modal-body table-responsive">
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="fw-bold" for="sys_edit_label">Label:</label> 
                                <input type="hidden" name="sys_edit_refno" id="sys_edit_refno">
                                <input type="text" class="form-control" name="sys_edit_label" id="sys_edit_label">
                            </div>
                        </div> 
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="fw-bold" for="sys_preview_logo">Logo Preview:</label> 
                                <div class="text-center">
                                    <img class="sys_preview_image" src="" name="sys_preview_logo" id="sys_preview_logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="fw-bold" for="sys_edit_logo">New Logo:</label> 
                                <input type="file" class="form-control" name="sys_edit_logo" id="sys_edit_logo">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="fw-bold" for="sys_edit_url">URL:</label> 
                                <input type="text" class="form-control" name="sys_edit_url" id="sys_edit_url">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="fw-bold" for="sys_edit_desc">Description:</label> 
                                <input type="text" class="form-control" name="sys_edit_desc" id="sys_edit_desc">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="fw-bold" for="sys_edit_status">Status:</label> 
                                <select class="form-control" name="sys_edit_status" id="sys_edit_status">
                                    <option value="">- Select -</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                    <button type="button" class="btn btn-sm btn-dark" data-bs-dismiss="modal">Close</button> 
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->include('core/footer')  ?>

<script>
    $(document).ready(function(){ 
        $('#add_new_system').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this); // Create FormData object 
            $.ajax({
                url: "<?php echo base_url('Home/AddSystem');?>", // Update with your actual endpoint
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) { 
                    GetSystems(); // Refresh the system list
                    $('#add_new_system_mdl').modal('toggle');
                },
                error: function(xhr, status, error) {
                     
                }
            });
        });

        $('#edit_system').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this); // Create FormData object 
            $.ajax({
                url: "<?php echo base_url('Home/EditSystem');?>", // Update with your actual endpoint
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) { 
                    GetSystems(); // Refresh the system list
                    $('#edit_system_mdl').modal('toggle');
                },
                error: function(xhr, status, error) {
                     
                }
            });
        });
        
        GetSystems();

    }); 

    function GetSystems(){
        baseurl = "<?php echo base_url();?>";

        $.ajax({
            type: "POST",
            url:"<?php echo base_url('Home/GetSystems');?>", 
            success:function(data){   
                data = JSON.parse(data);
                $('#system_list').empty();
                data.forEach(row => { 
                    $('#system_list').append(`  <div class="col-sm-3 col-lg-2 d-flex align-items-stretch">
                                                    <div class="card shadow-sm mt-5 mb-5 cardbody"> 
                                                        <div class="card-body text-center">
                                                            <div class="grow"><a target="_blank" href="${row.SL_URL}"><img src="${baseurl+'/'+row.SL_Logo}" alt="image not found" class="sys_image"></a></div> 
                                                            <h6 class="card-title ">${row.SL_System_Name}</h6>
                                                            <a 
                                                                data-refno="${row.SL_Ref_No}"
                                                                data-label="${row.SL_System_Name}"
                                                                data-logo="${row.SL_Logo}"
                                                                data-url="${row.SL_URL}"
                                                                data-desc="${row.SL_Description}"
                                                                data-status="${row.SL_Status}"

                                                            data-bs-toggle="modal" data-bs-target="#edit_system_mdl" href="#!" class="editsys btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i> Edit</a> 
                                                        </div>
                                                    </div>
                                                </div>`);
                });
                btn_function();
            }
        })
    }

    function getstatus(val){
        const status_list = ['Active','Inactive'];
        $('#sys_edit_status').empty();
        for(i=0;i<status_list.length;i++){
            if(val!='' && val==status_list[i]){
                $('#sys_edit_status').append(`<option selected value="${status_list[i]}">${status_list[i]}</option>`);
            }else{
                $('#sys_edit_status').append(`<option value="${status_list[i]}">${status_list[i]}</option>`);
            }
            
        }
    }

    function btn_function(){
        $('.editsys').on('click',function(){
            baseurl = "<?php echo base_url();?>";

            sys_refno   = $(this).attr("data-refno");
            sys_label   = $(this).attr("data-label");
            sys_logo    = $(this).attr("data-logo");
            sys_url     = $(this).attr("data-url");
            sys_desc    = $(this).attr("data-desc");
            sys_status  = $(this).attr("data-status");
           

            $('#sys_edit_refno').val(sys_refno);
            $('#sys_edit_label').val(sys_label);
            $('#sys_edit_url').val(sys_url);
            $('#sys_edit_desc').val(sys_desc); 
            $("#sys_preview_logo").attr("src", baseurl+'/'+sys_logo);

            getstatus(sys_status); 
        });
    }

    function SignOut(){
        Swal.fire({
            icon: 'info',
            title: 'Are you sure want to logout!',
            showCancelButton: true,
            confirmButtonColor: "#2098a8",
            confirmButtonText: 'Logout',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                get('<?= route_to('Logout'); ?>', function(res) {

                    if(res.status === 200){
                        history.pushState({ prevUrl: window.location.href }, '', ' <?= route_to('LoginForm'); ?>');
                        window.location.href = '<?= route_to('LoginForm'); ?>';
                        // localStorage.removeItem('MenuList');
                    }

                    var AlertResult = {
                        'tittle' : res.title,
                        'icon'   : res.status === 200 ? 'success' : 'warning',
                        'Message': res.Message
                    };
                    Message_Result(AlertResult)

                })

            }
        })

    }

</script>
