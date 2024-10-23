
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

<body>  
    <nav class="container-fluid navbar bg-body-tertiary navbar_pivi">
        <div class="container-fluid navbar_pivi">
            <a class="navbar-brand"><h1 class="pivi_label text-light">PIVI Central Dashboard</h1></a>
            <form class="d-flex mt-5" role="search">
                <input id="search_sys" class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> 
                <a href="<?php echo base_url('Home/AdminLogin');?>" class="btn btn-sm btn-primary">Login</a>
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="system_list" class="row"> 
        </div>  
    </div>
</body>

<?= $this->include('core/footer')  ?>

<script>
    $(document).ready(function(){
        GetSystems(); 

        $('#search_sys').on('input',function(){ 
            SearchString = $(this).val();
            FindSystem(SearchString);
        });
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
                    if(row.SL_Status=='Active'){
                        $('#system_list').append(`  <div class="col-sm-3 col-lg-2 d-flex align-items-stretch">
                                                    <div class="card shadow-sm mt-5 mb-5 cardbody"> 
                                                        <div class="card-body text-center">
                                                            <div class="grow">
                                                                <a target="_blank" href="${row.SL_URL}"><img src="${baseurl+'/'+row.SL_Logo}" alt="image not found" class="sys_image"></a>
                                                            </div> 
                                                            <h6 class="card-title ">${row.SL_System_Name}</h6>
                                                            <a target="_blank" href="${row.SL_URL}" class="sys_link btn btn-sm btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Go to Link</a>
                                                            <p class="card-text mt-3"><i>${row.SL_Description}</i></p>
                                                        </div>
                                                    </div>
                                                </div>`);
                    }
                    
                });
            }
        })
    }

    function FindSystem(SearchString){
        if(SearchString!='')
        {
            $.ajax({
                type: "POST",
                url:"<?php echo base_url('Home/FindSystem');?>", 
                data: 
                {
                    SearchString:SearchString
                },
                success:function(data){   
                    data = JSON.parse(data);
                    $('#system_list').empty();
                    console.log(data);
                    data.forEach(row => {
                        if(row.SL_Status=='Active'){
                            $('#system_list').append(`  <div class="col-sm-3 col-lg-2 d-flex align-items-stretch">
                                                        <div class="card shadow-sm mt-5 mb-5 cardbody"> 
                                                            <div class="card-body text-center">
                                                                <div class="grow"><a target="_blank" href="${row.SL_URL}"><img src="${baseurl+'/'+row.SL_Logo}" alt="image not found" class="sys_image"></a></div> 
                                                                <h6 class="card-title ">${row.SL_System_Name}</h6>
                                                                <a target="_blank" href="${row.SL_URL}" class="sys_link btn btn-sm btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Go to Link</a>
                                                                <p class="card-text mt-3"><i>${row.SL_Description}</i></p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>`);
                        }
                        
                    });
                }
            })  
        }else{
            GetSystems();
        }
    }
</script>
