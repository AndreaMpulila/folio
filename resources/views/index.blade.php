@include('header')

<div class="container-fluid">
    <div class="card small m-2" >
        <div class="row">
            <div class="col-sm-6">
                <div class="row m-1" id="headert">
                    <div class="m-1 ">
                       <a href=""> <i class=" text-success bi bi-house"></i> Home</a>
                    </div>
                    <div class="m-1">
                       <a href=""> <i class=" text-success bi bi-file-person"></i> About Me</a>
                    </div>
                    <div class="m-1">
                        <a href=""> <i class=" text-success bi bi-phone"></i>Contacts</a>
                        </div>
                    <div class="m-1"> 
                       <a href=""> <i class=" text-success bi bi-cast"></i> My Project</a>
                    </div>
               
            </div>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
        <div class="row">
            <a href="{{ asset('resume/Resume-Andrea-Mpulila.pdf')}}">
            <div class="col-sm-3">
                <div class="col-sm-12 m-2">
                    <div class="row">
                <img class="round_img shadow" src="{{asset('img/Adobe.png')}}" alt="Resume"  width="50" height="50">
                    </div>
                    <div class="row "> Resume</div>
                </div>
            </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="col-sm-12 m-2">
                    <div class="row">
                <img class="round_img shadow" src="{{asset('img/django-.png')}}" alt="Projects"  width="50" height="50">
                    </div>
                    <div class="row "> Projects</div>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="https://www.linkedin.com/in/andrea-mpulila-010116254" target="_blank">
            <div class="col-sm-3">
                <div class="col-sm-12 m-2">
                    <div class="row">
                <img class="round_img shadow" src="{{asset('img/in.png')}}" alt="Resume"  width="50" height="50">
                    </div>
                    <div class="row "> LinkedIn</div>
                </div>
            </div>
            </a>
        </div>
        <div class="row">
            <a href="https://github.com/AndreaMpulila" target="_blank">
                <div class="col-sm-3">
                    <div class="col-sm-12 m-2">
                        <div class="row">
                    <img class="round_img shadow" src="{{asset('img/github.png')}}" alt="Resume"  width="50" height="50">
                        </div>
                        <div class="row "> Github</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="row">
            <a type="button" data-toggle="modal" data-target="#contact" id ="contacted">
                <div class="col-sm-3">
                    <div class="col-sm-12 m-2">
                        <div class="row">
                    <img class="round_img shadow" src="{{asset('img/cont.png')}}" alt="Resume"  width="50" height="50">
                        </div>
                        <div class="row "> Contacts</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="col-sm-12 m-2">
                    
                <?php if(session('mode') =='mac'){?>
                    <a href="{{route('change')}}">
                        <div class="row">
                            <img class="round_img shadow" src="{{asset('img/windows11.jpg')}}" alt="Resume"  width="50" height="50">
                            </div>
                            <div class="row "> Windows mode</div>
                    </a>
                <?php }else{?>
                   <a href="{{route('change')}}">
                    <div class="row">
                        <img class="round_img shadow" src="{{asset('img/Mac.jpg')}}" alt="Mac"  width="50" height="50">
                        </div>
                        <div class="row "> Mac mode</div>
                   </a>
                    <?php
                }
                ?>
                
            </div>
        </div>
    </div>
    
</div>

  <div class="modal fade" id="contact" data-backdrop="contact" data-keyboard="false" tabindex="-1" aria-labelledby="contactBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-dark">
          <div class="row">
            <span class=" h4 modal-title col-sm-9">Contact Information</span>
            <span class="modal-icon col-sm-1 close"data-dismiss="modal"><i class="bi bi-dash-circle"></i> </span>
            <span class="modal-icon col-sm-1 close btn" id="full"><i class="bi bi-fullscreen"></i> </span>
            <span class="modal-icon col-sm-1 close"data-dismiss="modal"><i class="bi bi-x-circle"></i></span>
          </div>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
@include('footer')
  <script>
    $(document).ready(function () {
        $("#full").click(function(){
           $(".modal-fullscreen").addClass('modal-fullscreen');
        })
      });
 </script>